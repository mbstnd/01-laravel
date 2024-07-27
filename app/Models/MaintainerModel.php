<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class MaintainerModel
{
    private $id;
    private $nombre;
    private $fechaInicio;
    private $estado;
    private $responsable;
    private $monto;

    public function __construct($id, $nombre, $fechaInicio, $estado, $responsable, $monto)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fechaInicio = $fechaInicio;
        $this->estado = $estado;
        $this->responsable = $responsable;
        $this->monto = $monto;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function getResponsable() {
        return $this->responsable;
    }

    public function getMonto() {
        return $this->monto;
    }

    // Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    public function setFechaInicio($fechaInicio){
        $this->fechaInicio = $fechaInicio;
    }

    public function setEstado ($estado) {
        $this->estado = $estado;
    }

    public function setResponsable($responsable){
        $this->responsable = $responsable;
    }

    public function setMonto($monto){
        $this->monto = $monto;
    }
}

