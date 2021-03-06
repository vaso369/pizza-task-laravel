<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;



class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            [
                'name' => 'Capricciosa',
                'description' => 'Pizza capricciosa is a style of pizza  prepared with mozzarella cheese,Italian baked ham, mushroom, artichoke and tomato.',
                'image_path'=>'https://images.unsplash.com/photo-1574071318508-1cdbab80d002?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80','image_thumb_path'=>'https://images.unsplash.com/photo-1574071318508-1cdbab80d002?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=80',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Margarita',
                'description' => 'Pizza Margherita is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt and extra-virgin olive oil.',
                'image_path'=>'https://images.unsplash.com/photo-1574126154517-d1e0d89ef734?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80','image_thumb_path'=>'https://images.unsplash.com/photo-1574126154517-d1e0d89ef734?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=80',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Pepperoni',
                'description' => 'Pepperoni is an American variety of salami, made from a cured mixture of pork and beef seasoned with paprika or other chili pepper.',
                'image_path'=>'https://images.unsplash.com/photo-1581873372796-635b67ca2008?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80','image_thumb_path'=>'https://images.unsplash.com/photo-1581873372796-635b67ca2008?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=80',
                'created_at'=>Carbon::now()
            ]
            ,
            [
                'name' => 'Diavola',
                'description' => 'Diavola is a variety of Italian pizza that is traditionally topped with tomato sauce, mozzarella cheese, spicy salami, and hot chili peppers. ',
                'image_path'=>'https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80','image_thumb_path'=>'https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Neapolitan',
                'description' => 'Neapolitan-style pizza typically consists of a thin and soft crust—if it is cooked properly at a high temperature, the crust will bubble up and be charred in spots.',
                'image_path'=>'https://images.unsplash.com/photo-1474600056930-615c3d706456?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80','image_thumb_path'=>'https://images.unsplash.com/photo-1474600056930-615c3d706456?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Quattro Stagioni',
                'description' => 'In this version, artichokes stand for spring, pungent olives represent summer, woodsy mushrooms hint at autumn, and prosciutto makes a statement for winter.',
                'image_path'=>'https://images.unsplash.com/photo-1564128442383-9201fcc740eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80','image_thumb_path'=>'https://images.unsplash.com/photo-1564128442383-9201fcc740eb?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Greek',
                'description' => ' Greek pizza is a style of pizza crust and preparation where the pizza is proofed and cooked in a metal pan rather stretched to order and baked on the floor of the pizza oven.',
                'image_path'=>'https://images.unsplash.com/photo-1458642849426-cfb724f15ef7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80','image_thumb_path'=>'https://images.unsplash.com/photo-1458642849426-cfb724f15ef7?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'created_at'=>Carbon::now()
            ],
            [
                'name' => 'Sicilian',
                'description' => ' It is often topped with onions, anchovies, tomatoes, herbs and strong cheese such as caciocavallo and toma.',
                'image_path'=>'https://images.unsplash.com/photo-1542282811-943ef1a977c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80','image_thumb_path'=>'https://images.unsplash.com/photo-1542282811-943ef1a977c3?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80',
                'created_at'=>Carbon::now()
            ]
        ]);
    }
}
