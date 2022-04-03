<?php

namespace App\Models;

use CodeIgniter\Model;

class FoodModel extends Model
{
    protected $table = 'foods';

    public function getFood()
    {
         return $this->db->table('foods')
         ->join('categories','categories.id=foods.category_id')
         ->get();  
    }
    public function edit($id)
    {

        return $this->db->table('foods')
         ->where('foods.id', $id)
         ->join('categories','categories.id=foods.category_id')
         ->get(); 
    }
}