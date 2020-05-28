<?php

class Usuario
{
    public $nombre;
    public $apellido;
    public $direccion;
    public $email;
    public $password;
    
    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

        public function conseguirTodos() {
        return "Obtiene todos los usuarios (SQL)";
    }
    
}