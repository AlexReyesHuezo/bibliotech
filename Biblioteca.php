<?php
class Biblioteca {
  protected $nombre;
  protected $direccion;
  protected $telefono;
  protected $horario;
  protected $horarioFinde;
  private $libros = [];

  public function __construct($nombre, $direccion, $telefono, $horario, $horarioFinde) {
    $this->nombre = $nombre;
    $this->direccion = $direccion;
    $this->telefono = $telefono;
    $this->horario = $horario;
    $this->horarioFinde = $horarioFinde;
  }

  public function obtenerNombre() {
    return $this->nombre;
  }

  public function obtenerDireccion() {
    return $this->direccion;
  }

  public function obtenerTelefono() {
    return $this->telefono;
  }

  public function obtenerHorario() {
    return $this->horario;
  }

  public function obtenerHorarioFinde() {
    return $this->horarioFinde;
  }

  public function agregarLibro($libro) {
    $this->libros[] = $libro;
  }

  /* public function obtenerLibros() {
    $i = 1;
    foreach ($this->libros as $libro) {
      echo $i . ". " . $libro->obtenerTitulo() . PHP_EOL;
      $i++;
    }
  } */

  public function obtenerLibros() {
    return $this->libros;
  }

  public function eliminarLibro($titulo) {
    foreach ($this->libros as $key => $libro) {
      if ($libro->obtenerTitulo() == $titulo) {
        unset($this->libros[$key]);
        return "El libro " . $titulo . " ha sido eliminado.";
      }
    }
    return "El libro " . $titulo . " no se encuentra en la biblioteca.";
  }

  public function prestarLibro($titulo) {
    foreach ($this->libros as $libro) {
      if ($libro->obtenerTitulo() == $titulo) {
        if ($libro->obtenerDisponibilidad() == true) {
          $libro->ponerDisponibilidad(false);
          return "El libro " . $titulo . " ha sido prestado.";
        } else {
          return "El libro " . $titulo . " no está disponible.";
        }
      }
    }
    return "El libro " . $titulo . " no se encuentra en la biblioteca.";
  }
}
?>