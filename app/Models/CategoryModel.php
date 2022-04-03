<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['category_food'];

    public function edit($id)
    {

        return $this->db->table('categories')
         ->where('id', $id)
         ->get(); 
    }
}