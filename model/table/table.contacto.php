<?php

class contacto {

    private $id;
    private $foto;
    private $nombre;
    private $apellido;
    private $telefono;
    private $correo;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    
 
    public function getId() {
        return $this->id;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getCreated_at() {
        return $this->created_at;
    }

    public function getUpdated_at() {
        return $this->updated_at;
    }

    public function getDeleted_at() {
        return $this->deleted_at;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    public function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }

    public function setDeleted_at($deleted_at) {
        $this->deleted_at = $deleted_at;
    }



}