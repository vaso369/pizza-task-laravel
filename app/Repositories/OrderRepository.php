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
   public function getUserOrders(){
        $data = [];
        $orders=$this->model->select('id','address','phone','additional_info','price_eur','price_usd','payment','status')->where('user_id',1)->get();

       foreach($orders as $order){

           $order_pizzas= $order->order_lines()->select('pizza_id','size_id','quantity','total_price')->get();

           foreach($order_pizzas as $order_pizza){
               
            $pizza = Pizza::findOrFail($order_pizza->pizza_id);
            $pizzaSize=$pizza->sizes()->select('size')->where('size_id',$order_pizza->size_id)->first();
           $data[] = ['pizza_name'=>$pizza->name,'size'=>$pizzaSize->size,'quantity'=>$order_pizza->quantity,'price_eur'=>$order_pizza->total_price,'price_usd'=>$this->converter->convert($order_pizza->total_price)];
            $order->items = $data;
           }
           $data= [];
       }
       return $orders;
   }
   public function getPizzaPrice($item){
        $pizza=Pizza::findOrFail($item['pizzaId']);
        $pizzaPrice= $pizza->sizes()->select('price')->where('size_id',$item['pizzaSizeId'])->findOrFail($item['pizzaSizeId']);
        return $pizzaPrice->price;
   }
   public function makeOrder($request){
return $request;
       $price=0;
       
       foreach($request->items as $item){
        $unitPrice= $this->getPizzaPrice($item);
          $price+=($unitPrice)*$item['quantity'];
       }
       if($price < 15){
           $price+=5;
       }
       $priceUSD = $this->converter->convert($price);

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
   public function convertPrice($request){

      $priceConvert=0;
      
      if($request->currency==='eur'){
          $priceConvert=$this->converter->convert($request->price,'USD','EUR');
      }
      else{
        $priceConvert=$this->converter->convert($request->price);
      }
      return response(['price'=>$priceConvert,'currency'=>$request->currency]);
   }
  

}

