<?php
  class Usuario extends Cliente {
    protected $biblioteca;
    public function __construct($id, $nombre, $apellido) {
      parent::__construct($id, $nombre, $apellido);
    }
    // En esta función se puede buscar un libro por título, autor o categoría.
    // Los parámetros autor y categoría son opcionales.
    public function buscarLibro($biblioteca, $titulo = null, $autor = null, $categoria = null) {
      $librosEncontrados = [];
      $libros = $biblioteca->obtenerLibros();

      foreach ($libros as $libro) {
        if ($titulo != null && $libro->obtenerTitulo() == $titulo) {
          $librosEncontrados[] = $libro;
        } else if ($autor != null && $libro->obtenerNombreAutor() == $autor) {
          $librosEncontrados[] = $libro;
        } else if ($categoria != null && $libro->obtenerCategoria() == $categoria) {
          $librosEncontrados[] = $libro;
        } else {
          $librosEncontrados[] = $libro;
        }
      }
      return $librosEncontrados;
    }
  }
?>