# 📚 CRUD de Libros con Laravel y Voyager

## 📌 Descripción
Este proyecto es una aplicación web desarrollada con Laravel que implementa un sistema CRUD (Create, Read, Update, Delete) para la gestión de libros.  

Permite:
- 📖 Visualizar libros
- ➕ Agregar nuevos libros
- ✏️ Editar libros existentes
- ❌ Eliminar libros

Además, incluye integración con Voyager como panel administrativo.

---

##  Tecnologías utilizadas
- Laravel 10
- PHP 8
- MySQL
- Voyager (Admin Panel)
- Blade (vistas)

---

##  Instalación

Sigue estos pasos para ejecutar el proyecto en tu computadora:

``bash
# Clonar repositorio
git clone https://github.com/TU-USUARIO/TU-REPO.git

# Entrar al proyecto
cd TU-REPO

# Instalar dependencias
composer install

# Copiar archivo de entorno
cp .env.example .env

# Generar clave
php artisan key:generate

# Configurar base de datos en .env

# Ejecutar migraciones
php artisan migrate

# Levantar servidor
php artisan serve

Base de datos
La tabla principal es:

books
  id
  title
  author
  timestamps
  
Rutas principales
Método	URL	Descripción
GET	/books	Lista de libros
GET	/books/create	Crear libro
POST	/books	Guardar libro
GET	/books/{id}/edit	Editar libro
PUT	/books/{id}	Actualizar libro
DELETE	/books/{id}	Eliminar libro
