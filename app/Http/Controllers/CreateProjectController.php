<?php

namespace App\Http\Controllers;

use App\Models\MaintainerModel;
use Illuminate\Http\Request;

class CreateProjectController extends Controller
{
    public function nuevoProjecto ($_nuevo){
        //Nuevo objeto

        $id = $_nuevo->getId();
        $nombre = $_nuevo->getNombre();
        $fechaInicio = $_nuevo->getFechaInicio();
        $estado = $_nuevo->getEstado();
        $responsable = $_nuevo->getResponsable();
        $monto = $_nuevo->getMonto();

        // Crea una nueva instancia de MaintainerModel con todos los argumentos necesarios
        $registro = new MaintainerModel($id, $nombre, $fechaInicio, $estado, $responsable, $monto);
        $registro ->setId($_nuevo->getId());

    }
}
