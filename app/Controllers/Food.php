<?php

namespace App\Controllers;

use App\Models\FoodModel;

class Food extends BaseController
{

    protected $foodmodel;
    public function __construct()
    {      
        $this->foodmodel = new FoodModel();   
        
    }

   
    public function index()
    {   
        
        $food = $this->foodmodel->getFood()->getResult();

        $response = [];

        foreach ($food as $k) {
            $response[] = [
                'message' => 'data successfully retrieved',
                'data' => [
                    'id' => $k->id,
                    'category' => [
                        'id' => $k->category_id,
                        'name' => $k->category_food
                    ], 
                    'name' => $k->name,
                    'price' => $k->price
                ]
            ];
        }


        echo "<pre>"; print_r($response); die;
        


    }

    public function create_update($id)
    {
        $food = $this->foodmodel->edit($id)->getResult();
        $response = [];

        foreach ($food as $k) {
            $response[] = [
                'message' => 'data succesfully created / updated',
                'data' => [
                    'id' => $k->id,
                    'category' => [
                        'id' => $k->category_id,
                        'name' => $k->category_food
                    ],
                    'name' => $k->name,
                    'price' => $k->price
                ]
            ];
    
        }
        echo "<pre>"; print_r($response); die;

    }

    public function delete($id)
    {
        $food = $this->foodmodel->find($id);
        
        $response[] = [
            'message' => 'data successfully deleted',
            'data' => [
                'id' => $food['id'],
            ]
        ];

        echo "<pre>"; print_r($response); die;
    

    }



    

    
}
