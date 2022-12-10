<?php
require_once './config/dataConnection.php';

class Movie extends conexion{

    public function __construct()
    {
$this-> conectar();

    }
    public function insertMovie($nombre, $categoria, $duracion){
        $sql = "INSERT INTO peliculas (nombre, categoria, duracion) VALUES ('$nombre', '$categoria', '$duracion')";
        $result = mysqli_query($this->conectar(), $sql);
        if($result){
            return true;
        }else{
            return false;
        }
     }
public function getMovies(){
$sql = "SELECT * FROM peliculas";
$result = mysqli_query($this->conectar(), $sql);
return $result;

} 

    //Para editar y eliminar necesitamos pasar un parámetro para indicar que elemento vamos a borrar
    public function deleteMovie($idPelicula){
        $sql = "DELETE FROM peliculas WHERE idPelicula = '$idPelicula'";
        $result = mysqli_query($this->conectar(), $sql);

        //Código para hacer efecto de actualización en la página
        if($result){
            Header("Location: index.php");
        }else {
            echo "Hubo un error al intentar eliminar el dato";
        }
    }

}

?>