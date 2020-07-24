<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderLine;
use App\Models\Pizza;
use App\Services\ConverterService;



class OrderRepository extends GenericRepository 
{
    private $converter;
    private $orderLine;
    public function __construct(Order $order,OrderLine $orderLine, ConverterService $converter) {
        $this->orderLine=$orderLine;
        $this->converter = $converter;
        parent::__construct($order);
    }
   public function getAllOrders(){
       return 123;
   }
   public function getPizzaPrice($item){
    $pizza=Pizza::findOrFail($item['pizzaId']);
    $pizzaPrice= $pizza->sizes()->select('price')->where('size_id',$item['pizzaSizeId'])->findOrFail($item['pizzaSizeId']);
    return $pizzaPrice->price;
   }
   public function makeOrder($request){
       $price=0;
       
       foreach($request->items as $item){
        $unitPrice= $this->getPizzaPrice($item);
          $price+=($unitPrice)*$item['quantity'];
       }
       $priceUSD = $this->converter->convert($price);
      // return $priceUSD;
     //  return $priceEur;
     \DB::beginTransaction();
     $user_id=auth('api')->user()->id;
        $order = $this->model->create([
            'address' => $request->address,
                'phone' => $request->phone,
                'additional_info' => $request->additionalInfo,
                'user_id' => $user_id,
                'payment' => $request->payment,
                'status'=>'Received',
                'price_eur' =>$price,
                'price_usd' =>$priceUSD,
                

        ]);
        $orderId = $order->id;
        
        foreach($request->items as $item){
            $this->orderLine->create([
                'order_id' => $orderId,
                    'pizza_id' => $item['pizzaId'],
                    'size_id' => $item['pizzaSizeId'],
                    'quantity' => $item['quantity'],
                    'total_price' => $item['quantity']*($this->getPizzaPrice($item)),
    
            ]);
        }
       \DB::commit();

   }
  

}

