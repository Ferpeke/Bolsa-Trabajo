# Bolsa de Trabajo
 Proyecto final de la materia de "Programación web"
 ### Mi aplicación web, esta relacionada a un a bolsa de trabajo. 

  * Inicia con la página principal en la cual se mustra **los 9 trabajos** resientemente con su nombre y algunos datos. Cuando le dan clic a un trabajo en un botón de leer mas pues los     dirije a una nueva vista.
  * En la vista de descripción del trabajao nos dará todos los daros que un reclutador dió sobre el trabajo.
  * Tambien cuenta con un registro de reclutadores los cuales son los que potearean los trabajos, y un **login**.

## Administrador para la gente que agrega empelados nuevos
* Dashboard donde llenarán los datos sobre categorias deacuerdo con los empleos que postearan los **reclutadores**

## Reclutadores
* Registro para reclutadores.
* Dashboard donde llenarán los datos sobre el empleado el cual se poosteará en la pagina principal.
* Categorias de empleados, catalogo de base de datos con categorias de empleados.

## Usuario común
* Mostrar por los ultimos agregados
* Necesitamos una pagina web donde permite buscar empleados
* Debe mandar una lista de los empleos
* Cuando se le de clic a un empleo me manda a una pagiana nueva y me muetre todos los detalles del empleo (horarios, caracteristicas del trabajo,  lugar, jefe y pago).

## Descargarlo y usarlo.
* Esta en mi repositorio de **Github** en [Bolsa-Trabajo](https://github.com/Ferpeke/Bolsa-Trabajo/)
* Una vez descargarlo deberas de contemplar dos cosas muy importantes 
* Debes de tener instalado en tu equipo una herramienta de desarrollo que te permite probar tu desarrollo web basado en PHP en tu propio ordenador como que es el mas pupular [xampp](https://www.apachefriends.org/es/index.html) para sistemas operativos como windows, ubuntu o mac os. 
* Y despues de instalarlo, deberas e crear la base de datos en un Gestor de base de datos, Xampp trae su Gestor de base de datos con esta ruta podras acceder a el [phpmyadmin](http://localhost/phpmyadmin/).
* Una vez instalado, deberas de buscar en la carpeta donde este instalado la herramienta de desarrollo web, comunmente es la carpeta para xampp es **htdocs** y dentro de esta deberas de colocar el archivo comprimido.
* Debes de descomprimirlo y colocaras en tu explorador favorito la ruta como ej. sería algo así "http://localhost/Bolsa-Trabajo/pagina-principal" y deberas de buscar en las carperta una con el nombre de [**schema**](https://github.com/Ferpeke/Bolsa-Trabajo/tree/main/schema) el cual contendrá un archivo en el cual estará el query de la base de datos que la copiaremos y la pegaremos en **phpmyadmin** donde lo ejecutaremos.

# Archivo config.php [config.php](https://github.com/Ferpeke/Bolsa-Trabajo/blob/main/app/config.php)

* Debes de fijarte en el proyecto la carpeta de nombre **app** y dentro buscar el archivo **config** el cual aparece de la siguiente forma:
```
 <?php
  
  define('SERVIDOR', 'http://localhost:8080/Bolsa-Trabajo/');
  
?>

```
si deseas usarlo, puedes cambiar la esctructur la cual es la siguinte
* SERVIDOR -> se puede cambiar  de nombre, el cual tu gustes.
* http://localhost:8080/Bolsa-Trabajo/ -> tambien se puede cambiar siempre y cuando te fije en tus carpetas.en mi caso tiene "**:8080**" el cual indicca el puerto por el cual se comunica mi xampp, te dejo un video para que cheques si es que tu puerto esta ocupado [video](https://www.youtube.com/watch?v=2y9_Gx4nsfA)

```
 <?php
  
  define('nombre que desees', 'http://localhost/Bolsa-Trabajo/');
  
?>

```
# Archivo conexion.php [conexion.php](https://github.com/Ferpeke/Bolsa-Trabajo/blob/main/app/conexion.php)

* Para esto nos motrará algo como lo siguiente:
```
 <?php
  
   function conexion() {
    $conexion = new mysqli('localhost', 'root', 'Nandodrago4', 'bolsa_trabajo', 33061);

    if($conexion->errno){
      echo 'Error en la conexion'. ' '. $conexion->errno;
    } 
    $conexion->set_charset('utf8');
    return $conexion;
    
  }
?>

```
* se pondrá modificar los siguientes campos 
* $conexion -> la variable se podrá camibiar el nombre pero comenzando con **$** 
* y dento los campos de la **mysqli('localhost', 'nombre del administrador', 'contraseña de administrador', 'nombre de la base de datos', numero de puerto sin comillas simple '')**
