<?php
  class Libro {
    protected $titulo;
    protected $nombreAutor;
    protected $descripcion;
    protected $categoria;
    protected $disponibilidad;

    public function __construct($titulo, $nombreAutor, $descripcion, $categoria, $disponibilidad) {
      $this->titulo = $titulo;
      $this->nombreAutor = $nombreAutor;
      $this->descripcion = $descripcion;
      $this->categoria = $categoria;
      $this->disponibilidad = $disponibilidad;
    }

    public function ponerTitulo($titulo) {
      $this->titulo = $titulo;
    }

    public function obtenerTitulo() {
      return $this->titulo;
    }

    public function obtenerNombreAutor() {
      return $this->nombreAutor;
    }

    public function ponerDescripcion($descripcion) {
      $this->descripcion = $descripcion;
    }

    public function obtenerDescripcion() {
      return $this->descripcion;
    }

    public function ponerCategoria($categoria) {
      $this->categoria = $categoria;
    }

    public function obtenerCategoria() {
      return $this->categoria;
    }

    public function ponerDisponibilidad($disponibilidad) {
      $this->disponibilidad = $disponibilidad;
    }

    public function obtenerDisponibilidad() {
      if ($this->disponibilidad == true) {
        return "El libro " . $this->titulo . " está disponible.";
      } else {
        return "El libro " . $this->titulo . " no está disponible.";
      }
    }
  }
?>