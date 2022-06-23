<?php
namespace App\repositories
use App\models\cartsmodel
class products extends productmodel
{
    public static function getALL()
    {
        if(arraay_key_exist??('search',$_GET))

    }
    $ search= $_GET['search'];



$data = Products::table();
if(isset($search))
{
    $data = $data->where('name','like','%'.$search.'%');

}
$data = $data->get();
return $data
}