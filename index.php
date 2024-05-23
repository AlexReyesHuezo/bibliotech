<?php
  // Requerir los archivos necesarios
  require_once 'Biblioteca.php';
  require_once 'Cliente.php';
  require_once 'Libro.php';
  require_once 'Autor.php';
  require_once 'Usuario.php';

  // Crear una biblioteca
  $biblioteca = new Biblioteca(
    "Biblioteca del Oeste Tecnológico",
    "Calle 123, Ciudad de México",
    "555-555-5555",
    "Lunes a viernes de 9:00 a 18:00",
    "Sábados y domingos de 10:00 a 14:00"
  );

  // Crear libros
  $libro1 = new Libro(
    "Internet de las cosas",
    "Luis Joyanes Aguilar",
    "IoT es un nuevo ecosistema tecnológico y social, espina dorsal de la industria 4.0, vislumbra un futuro hiperconectado: 5G, IA, Big Data, ciudades inteligente, robots, ciberseguridad, etc.",
    "Tecnología",
    true
  );

  $libro2 = new Libro(
    "Elon Musk",
    "Ashlee Vance",
    "Elon Musk es el empresario que está revolucionando la industria energetica, aeroespacial e informática. Con Tesla, SpaceX y X, Musk está liderando la carrera hacia un futuro sostenible.",
    "Biografía",
    true
  );

  $libro3 = new Libro(
    "El código Da Vinci",
    "Dan Brown",
    "El código Da Vinci es un thriller que combina historia, arte, códigos y símbolos. Resolviendo un misterio que ha desconcertado a la humanidad por siglos.",
    "Ficción",
    true
  );

  $libro4 = new Libro(
    "Ten peor coche que tu vecino",
    "Luis Pita",
    "La libertad financiera se mide en los años que podrías vivir sin trabajar o dejar de percibir ingresos. Este libro te enseña a ahorrar, invertir y a no caer en la trampa del consumismo.",
    "Finanzas",
    true
  );

  $libro5 = new Libro(
    "Cartas del Diablo a su sobrino",
    "C. S. Lewis",
    "Una irónica y astuta representación de la vida y las debilidades humanas desde el punto de vista de Escrutopo y sus correspondencias con el alto rango 'Nuestro Padre de abajo'.",
    "Sátira",
    true,
  );

  $libro6 = new Libro(
    "Sherlock Holmes",
    "Sir Arthur Conan Doyle",
    "El detective más famoso de la historia, Sherlock Holmes, resuelve los casos más misteriosos y complicados con su fiel amigo el Dr. Watson. Lo puedes encontrar en la calle Baker Street 221B.",
    "Ficción",
    false
  );

  // obtener la disponibilidad de un libro
  echo $libro6->obtenerDisponibilidad() . PHP_EOL;
  echo $libro5->obtenerDisponibilidad() . PHP_EOL;

  // Agregar libros a la biblioteca
  $biblioteca->agregarLibro($libro1);
  $biblioteca->agregarLibro($libro2);
  $biblioteca->agregarLibro($libro3);
  $biblioteca->agregarLibro($libro4);
  $biblioteca->agregarLibro($libro5);
  $biblioteca->agregarLibro($libro6);

  // Obtener listado de libros de la biblioteca
  $biblioteca->obtenerLibros();

  // Eliminar un libro de la biblioteca
  echo $biblioteca->eliminarLibro("El código Da Vinci") . PHP_EOL;

  // Obtener listado de libros de la biblioteca
  $biblioteca->obtenerLibros();

  // Prestar un libro de la biblioteca
  echo $biblioteca->prestarLibro("Elon Musk") . PHP_EOL;

  // Prestar un libro que no forma parte de la biblioteca
  echo $biblioteca->prestarLibro("Enola Holmes") . PHP_EOL;

  // Crear cliente
  $cliente = new Cliente(
    1,
    "Alexander",
    "Reyes"
  );

  // Obtener el ID del cliente
  echo "ID del cliente: " . $cliente->obtenerId() . PHP_EOL;

  // Obtener nombre completo del cliente
  echo "Nombre completo del cliente: " . $cliente->obtenerNombreCompleto() . PHP_EOL;

  // Crear un autor
  $autor1 = new Autor(
    1,
    "Luis Joyanes",
    "Aguilar",
    "Española",
    "1946-09-21"
  );

  $autor2 = new Autor(
    2,
    "Ashlee",
    "Vance",
    "Estadounidense",
    "1977-07-09"
  );

  $autor3 = new Autor(
    3,
    "Dan",
    "Brown",
    "Estadounidense",
    "1964-06-22"
  );

  $autor4 = new Autor(
    4,
    "Luis",
    "Pita",
    "Española",
    "1975-12-12"
  );

  $autor5 = new Autor(
    5,
    "C. S.",
    "Lewis",
    "Irlandesa",
    "1898-11-29"
  );

  

  // Agregar libros escritos por el autor
  $autor1->agregarLibroEscrito($libro1);
  $autor2->agregarLibroEscrito($libro2);
  $autor3->agregarLibroEscrito($libro3);
  $autor4->agregarLibroEscrito($libro4);
  $autor5->agregarLibroEscrito($libro5);

  // Crear un usuario
  $usuario = new Usuario(
    1,
    "Alexander",
    "Reyes",
  );

  // Buscar un libro por título
  $librosEncontrados = $usuario->buscarLibro($biblioteca, "Elon Musk");

  // Buscar libros por autor
  $librosEncontrados = $usuario->buscarLibro($biblioteca, null, "Luis");

  // Buscar libros por categoría
  $librosEncontrados = $usuario->buscarLibro($biblioteca, null, null, "Ficción");

  // Mostrar los libros encontrados
  foreach ($librosEncontrados as $libro) {
    echo $libro->obtenerTitulo() . PHP_EOL;
  }
?>