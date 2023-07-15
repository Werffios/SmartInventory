
# Smart Inventory
Sistema de inventario para la gestión de activos, proyecto desarrollado como requisito para la asignatura de Ingeniería de Software II.

Como plataforma de gestión integral de inventarios, nuestra solución SMART INVENTORY está diseñada específicamente para satisfacer las necesidades de las universidades en cuanto a la gestión de activos. Con nuestra plataforma, los administradores, profesores y personal de apoyo de la universidad podrán llevar un control completo y actualizado de todos los activos de la institución, desde equipos de laboratorio hasta mobiliario y otros bienes.

Nuestro sistema de inventarios web es fácil de usar y accesible desde cualquier lugar con conexión a internet, lo que permitirá a los usuarios realizar un seguimiento eficiente de los activos y su estado en tiempo real. Además, nuestra solución ofrecerá una amplia gama de herramientas y funciones para que los usuarios gestionen sus tareas de manera más eficiente.

> Asi se ve la interfaz de visitante, donde se pueden consultar activos, categorias, ubicaciones y gestionar datos del perfil, también posee acceso a la vista de administrador siempre que el rol lo permita.
![Dashboard de visitante](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/DashboardVisitante.png)

> Asi se ve la interfaz de visitante en blanco (modo white)
![Dashboard de visitante en blanco](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/DashboardVisitanteWhite.png)

> Asi se ve la interfaz de administrador.
![Dashboard de administrador](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/DashboardAdmin.png)

> Asi se ve la interfaz de administrador en blanco (modo white)
![Dashboard de administrador en blanco](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/DashboardAdminWhite.png)

> Asi se ve la interfaz de administrador para gestionar activos.
![Gestion de activos](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/ActivosAdmin.png)

> Asi se ve la interfaz de administrador para editar activos.
![Editar activos](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/EditActivo.png)

> Asi se ve la interfaz de administrador para ver detalles de activos.
![Detalles de activos](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/ViewActivo.png)

> Asi se ve la interfaz de administrador para gestionar roles
![Gestion de roles](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/ControlRoles.png)

> Asi se ve la interfaz de ingreso para el administrador.
![Login de administrador](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/LoginAdmin.png)

> Asi se ve la interfaz de ingreso para el visitante.
![Login de visitante](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/LoginVisitante.png)

> Asi se ve la interfaz de registro para el visitante.
![Registro de visitante](https://raw.githubusercontent.com/Werffios/SmartInventory-April/master/images/RegisterVisitante.png)

## Technologies Used:
* PHP 8.2.2 
* Laravel 10 
* Tailwind 
* AlpineJS 
* Livewire

## Para clonar el repositorio y probarlo en su propio sistemas, siga los siguientes pasos:
> Nota: Asegúrese de tener instalado PHP y Composer en tu computadora, se recomienda usar la versión 8.2.2 y versión 2.0.11 respectivamente.

1. Abre una terminal o línea de comandos en tu computadora.
2. Abre una terminal o línea de comandos en tu computadora.
3. Navega hasta el directorio donde deseas clonar el proyecto de Laravel. Puedes utilizar el comando `cd` para cambiar de directorio. 
4. Clona el repositorio en tu computadora.
    ```bash
    git clone https://github.com/Werffios/SmartInventory-April.git
    ```
5. Navega al directorio recién clonado.
    ```bash
    cd SmartInventory-April
    ```
6. Instala las dependencias del proyecto.
    ```bash
    composer install
    ```
7. Crea un archivo `.env` en la raíz del proyecto. Puedes copiar el archivo `.env.example` y renombrarlo a `.env` o puedes crearlo manualmente.
8. Genera una nueva clave para la aplicación.
    ```bash
    php artisan key:generate
    ```
9. Crea una base de datos para el proyecto.
10. En el archivo `.env` modifica las variables de entorno `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD` con los datos de tu base de datos.
11. Ejecuta las migraciones y los seeders para crear y poblar las tablas de la base de datos.
    ```bash
    php artisan migrate --seed
    ```
12. Inicia el servidor de desarrollo de Laravel.
    ```bash
    php artisan serve
    ```
13. Inicia el servidor de NPM.
    ```bash
    npm run dev
    ```
14. Abre la aplicación en tu navegador. La URL por defecto es `http://localhost:8000` para invitado
 y`http://localhost:8000/admin` para admin.

<p align="center"><a href="https://github.com/Werffios/" target="_blank">
<img style="padding: 1px; border-radius: 50%; border: 2px solid #ccc; border-color: #ccc;" src="https://avatars.githubusercontent.com/u/74946697?v=4" width="200" alt="Autor: Nicolás Suárez"></a></p>

<div align="center">
  <img src="https://github-readme-stats.vercel.app/api?username=werffios&&show_icons=true&theme=radical" alt="Pramod's Github Stats">
</div>
<br>
<div align="center">
  <img src="https://github-readme-stats.vercel.app/api/top-langs/?username=werffios&layout=compact&theme=radical" alt="Pramod's Github Stats">
</div>
