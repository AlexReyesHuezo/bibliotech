<?php
  class Cliente {
    protected $id;
    protected $nombre;
    protected $apellido;

    public function __construct($id, $nombre, $apellido) {
      $this->id = $id;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
    }

    public function obtenerId() {
      return $this->id;
    }

    public function ponerNombreCompleto($nombre, $apellido) {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
    }

    public function obtenerNombreCompleto() {
      return $this->nombre . " " . $this->apellido;
    }
  }
?>