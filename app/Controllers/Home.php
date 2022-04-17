<?php

namespace App\Controllers;
use App\Models\CategoryModel;
class Home extends BaseController
{
    public function index()
    {
        $categoryModel=new CategoryModel();
        $data['categories'] = $categoryModel->where('parent_id', NULL)
        ->findAll();
        echo view('partials/header');
        echo view('categories/index', $data);
        echo view('partials/footer');
    }
    public function get_sups($parent_id){
        $categoryModel=new CategoryModel();
        $data['categories'] = $categoryModel->where('parent_id', $parent_id)
        ->findAll();
        $data['parent']=$categoryModel->find($parent_id);
       // dd($data);
        echo view('categories/childs', $data);
    }
}
