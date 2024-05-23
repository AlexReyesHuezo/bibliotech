# Bibliotech
*Sistema CRUD* para gestionar libros de una biblioteca.

## Descripción del sitema
Sistema bibliotecario que de manera general permite que los libros sean agregados, buscados y eliminados. De manera específica a cada libro permite gestionar la información de los autores, las categorías y otra información relevante.

**Funcionalidades específicas del sistema**
- Los usuarios pueden buscar libros por título,a utor o categoría.
- Los usuarios pueden solicitar el préstamo de un libro y actualizar su estado a prestado.

## Diagramas de clases
- Biblioteca
- Libro
- Cliente
- Autor
- Usuario

```mermaid
---
Bibliotech
---

classDiagram
  class Biblioteca
  Biblioteca *-- Libro
  Biblioteca *-- Cliente
  Biblioteca: #string nombre
  Biblioteca: #string direccion
  Biblioteca: #string telefono
  Biblioteca: #string horario
  Biblioteca: +obtenerNombre()
  Biblioteca: +obtenerDireccion()
  Biblioteca: +obtenerTelefono()
  Biblioteca: +obtenerHorario()
  Biblioteca: +obtenerHorarioFinde()
  Biblioteca: +agregarLibro(libro)
  Biblioteca: +obtenerLibros()
  Biblioteca: +eliminarLibro(titulo)
  Biblioteca: +prestarLibro(titulo)

  class Libro
  Libro: #string titulo
  Libro: #array nombreAutor
  Libro: #string descripcion
  Libro: #string categoria
  Libro: #bool disponibilidad
  Libro: +ponerTitulo(titulo)
  Libro: +obtenerTitulo()
  Libro: +ponerNombreAutor()
  Libro: +ponerDescripcion(descripcion)
  Libro: +obtenerDescripcion()
  Libro: +ponerCategoria(categoria)
  Libro: +obtenerCategoria()
  Libro: +ponerDisponibilidad(disponibilidad)
  Libro: +obtenerDisponibilidad()

  class Cliente
  Cliente <|-- Usuario
  Cliente <|-- Autor
  Cliente: #int id
  Cliente: #string nombre
  Cliente: #string apellido
  Cliente: +obtenerId()
  Cliente: +ponerNombreCompleto(nombre, apellido)
  Cliente: +obtenerNombreCompleto()

  class Autor
  Autor: #string nacionalidad
  Autor: #string fechaNacimiento
  Autor: +obtenerNacionalidad()
  Autor: +obtenerFechaNacimiento()
  Autor: +agregarLibroEscrito(libro)
  Autor: +obtenerLibrosEscritos()

  class Usuario
  Usuario: +buscarLibro(titulo, autor, categoria)
```
