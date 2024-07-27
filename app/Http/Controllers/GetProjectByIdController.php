<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetProjectByIdController extends Controller
{
    function getById ($_id){
        $id = $_id;
        if ($id == NULL){
        // Retorna todo
        }else{
            // Retorna solo el Valor del Id.
        }


    }
}
