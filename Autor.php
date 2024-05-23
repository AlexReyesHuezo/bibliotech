<?php
  class Autor extends Cliente {
    protected $librosEscritos = [];
    protected $nacionalidad;
    protected $fechaNacimiento;

    public function __construct($id, $nombre, $apellido, $nacionalidad, $fechaNacimiento) {
      parent::__construct($id, $nombre, $apellido);
      $this->nacionalidad = $nacionalidad;
      $this->fechaNacimiento = $fechaNacimiento;
    }

    public function obtenerNacionalidad() {
      return $this->nacionalidad;
    }

    public function obtenerFechaNacimiento() {
      return $this->fechaNacimiento;
    }

    public function agregarLibroEscrito($libro) {
      $this->librosEscritos[] = $libro;
    }

    public function obtenerLibrosEscritos() {
      return $this->librosEscritos;
    }
  }
?>