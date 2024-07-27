<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetProjectController extends Controller
{
    public function getAll ($_id){
        $id =$_id;
        if($id == NULL){
            //retorna todo
        }else {
            //retorna solo el valor del ID
        }
    }
}
