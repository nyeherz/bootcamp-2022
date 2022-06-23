<?php
namespase App\repositories;
use App\Models\ProductsModel;

class Products extends ProductsModel
{
    public static function getALL()
    {
        if(array_key_exists('search',$_GET))
      {
        $search = $_GET['search'];
      }  
      $data = Products::table();
      if(isset($search))
      {
        $data = $data->where('name','like','%'.$search.'%');

      }
      $data = $data->get();
      return $data;
    }
}