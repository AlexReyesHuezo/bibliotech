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
  Biblioteca: +getNombre()
  Biblioteca: +getDireccion()
  Biblioteca: +getTelefono()
  Biblioteca: +getHorario()
  Biblioteca: +getHorarioFinde()

  class Libro
  Libro: #string titulo
  Libro: #array nombreAutor
  Libro: #string descripcion
  Libro: #string categoria
  Libro: #bool disponibilidad
  Libro: +setTitulo(titulo)
  Libro: +getTitulo()
  Libro: +setDescripcion(descripcion)
  Libro: +getDescripcion()
  Libro: +setCategoria(categoria)
  Libro: +getCategoria()
  Libro: +setDisponibilidad(disponibilidad)
  Libro: +getDisponibilidad()
  Libro: +prestar(titulo)

  class Cliente
  Cliente <|-- Usuario
  Cliente <|-- Autor
  Cliente: #int id
  Cliente: #string nombre
  Cliente: #string apellido
  Cliente: +setNombreCompleto(nombre, apellido)
  Cliente: +getNombreCompleto()

  class Autor
  Autor: #string nacionalidad
  Autor: #string fechaNacimiento
  Autor: +getNacionalidad()
  Autor: +getFechaNacimiento()

  class Usuario
  Usuario: +buscarLibroPorTitulo(titulo)
  Usuario: +buscarLibroPorAutor(nombreCompleto)
  Usuario: +buscarLibroPorCategoria(categoria)
```
