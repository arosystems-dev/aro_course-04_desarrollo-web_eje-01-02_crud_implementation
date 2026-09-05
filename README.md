# CRUD DE ARTÍCULOS
**TECNOLOGÍAS: Bootstrap · Laravel · MySQL**

## 1. Requisitos

Para ejecutar el proyecto se requiere instalar:

* XAMPP o un entorno equivalente con PHP, Apache y MySQL/MariaDB.
* Git, para clonar el proyecto desde GitHub.
* Composer, para gestionar las dependencias de Laravel.
* Un navegador web.

### Links

* **XAMPP:** https://www.apachefriends.org/
* **Git:** https://git-scm.com/
* **GitHub:** https://github.com/
* **Composer:** https://getcomposer.org/

## 2. Instalar XAMPP

Descargar e instalar XAMPP en el equipo.

Una vez instalado, ejecutar **XAMPP Control Panel** e iniciar los servicios:

* **Apache**
* **MySQL**

## 3. Descargar el proyecto

Obtener el proyecto desde el repositorio correspondiente de GitHub.

### Opción A: Clonar mediante Git

Abrir una terminal y ubicarse en el directorio `htdocs` de XAMPP.

En Windows:

```text
C:\xampp\htdocs
```

Ejecutar:

```bash
git clone https://github.com/arosystems-dev/aro_course-04_desarrollo-web_eje-01-02_crud_implementation.git
```

### Opción B: Descargar como ZIP

Desde GitHub seleccionar:

**Code → Download ZIP**

Descomprimir el proyecto dentro del directorio `htdocs`.

La estructura debe quedar similar a:

```text
xampp/
└── htdocs/
    └── nombre-proyecto/
```

## 4. Instalar las dependencias

Abrir una terminal dentro del directorio del proyecto:

```bash
cd nombre-proyecto
```

Instalar las dependencias de Laravel:

```bash
composer install
```

## 5. Crear y restaurar la base de datos

Abrir **phpMyAdmin**:

`http://localhost/phpmyadmin`

1. Crear una nueva base de datos.
2. Seleccionar la base de datos creada.
3. Seleccionar **Importar**.
4. Elegir el archivo `scriptDB.sql` proporcionado con el proyecto.
5. Ejecutar la importación.

El script de la Base de Datos está ubicado en:

https://github.com/arosystems-dev/aro_course-04_desarrollo-web_eje-01_crud_modeling

## 6. Configurar la conexión a la base de datos

Laravel utiliza el archivo `.env` para almacenar la configuración del entorno local, como la conexión a la base de datos.

El proyecto incluye el archivo `.env.example` como plantilla de configuración.

### 6.1 Crear el archivo `.env`

Dentro del directorio del proyecto, copiar el archivo `.env.example` y crear una copia con el nombre `.env`.

En Windows:

```bash
copy .env.example .env
```

En Linux/macOS:

```bash
cp .env.example .env
```

### 6.2 Generar la clave de la aplicación

Una vez creado el archivo `.env`, ejecutar:

```bash
php artisan key:generate
```

Laravel generará automáticamente una clave y la almacenará en:

```env
APP_KEY=base64:...
```

### 6.3 Configurar la base de datos

Abrir el archivo `.env` y configurar los datos correspondientes a la base de datos creada:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=root
DB_PASSWORD=
```

Cambiar únicamente `nombre_base_datos` por el nombre de la base de datos creada en phpMyAdmin.

Una vez completada esta configuración, el proyecto estará preparado para conectarse a la base de datos.

## 7. Ejecutar el proyecto

Verificar que **Apache** y **MySQL** estén iniciados.

Desde la terminal, dentro del directorio del proyecto, ejecutar:

```bash
php artisan serve
```

Laravel mostrará una dirección similar a:

```text
http://127.0.0.1:8000
```

Abrir dicha dirección en el navegador.

Si la configuración es correcta, el sistema estará disponible para su ejecución.
