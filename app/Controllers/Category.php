<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class Category extends BaseController
{

    protected $categorymodel;
    public function __construct()
    {      
        $this->categorymodel = new categoryModel();   
        
    }

   
   
    public function index()
    {   
        $category = $this->categorymodel->get();

        $response = [];
        foreach ($category->getResult() as $k) {
            $response[] = json_encode([
                'message' => 'data successfully retrieved',
                'data' => [
                    'id' => $k->id,
                    'name' => $k->category_food,
                ]
            ]);
        }

        echo "<pre>"; print_r($response); die;
    }

    public function create_update($id)
    {
        $category = $this->categorymodel->find($id);
        
        $response[] = [
            'message' => 'data succesfully created / updated',
            'data' => [
                'id' => $category['id'],
                'name' => $category['category_food'],
                'status' => 'Active'
            ]
        ];

        echo "<pre>"; print_r($response); die;
    }

    public function delete($id)
    {
        $category = $this->categorymodel->find($id);
        
        $response[] = [
            'message' => 'data successfully deleted',
            'data' => [
                'id' => $category['id'],
            ]
        ];

        echo "<pre>"; print_r($response); die;
    

    }

    
}
