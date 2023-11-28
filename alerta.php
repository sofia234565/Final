<?php
include("DB.php");

$nombres = (isset($_POST['nombrePersona'])) ? $_POST['nombrePersona'] : '';
$dni = (isset($_POST['dniPersona'])) ? $_POST['dniPersona'] : '';
$telefono = (isset($_POST['telefonoPersona'])) ? $_POST['telefonoPersona'] : '';
$desastre = (isset($_POST['tipoDesastrePersona'])) ? $_POST['tipoDesastrePersona'] : '';
$otro_des = (isset($_POST['otroDesastrePersona'])) ? $_POST['otroDesastrePersona'] : '';
$fecha = (isset($_POST['fechaHoraDesastrePersona'])) ? $_POST['fechaHoraDesastrePersona'] : '';
$ubicacion = (isset($_POST['ubicacionDesastrePersona'])) ? $_POST['ubicacionDesastrePersona'] : '';
$urgencia = (isset($_POST['urgenciaPersona'])) ? $_POST['urgenciaPersona'] : '';
$necesidad = (isset($_POST['helpType'])) ? $_POST['helpType'] : '';
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : '';

switch ($accion) {
    case 'Alerta':
        $senSQL = $conexion->prepare("INSERT INTO alerta (nombres, dni, telefono, desastre, otro_des, fecha, ubicacion, urgencia, necesidad) VALUES (:nombres, :dni, :telefono, :desastre, :otro_des, :fecha, :ubicacion, :urgencia, :necesidad);");
        $senSQL->bindParam(':nombres', $nombres);
        $senSQL->bindParam(':dni', $dni);
        $senSQL->bindParam(':telefono', $telefono);
        $senSQL->bindParam(':desastre', $desastre);
        $senSQL->bindParam(':otro_des', $otro_des);
        $senSQL->bindParam(':fecha', $fecha);
        $senSQL->bindParam(':ubicacion', $ubicacion);
        $senSQL->bindParam(':urgencia', $urgencia);
        $senSQL->bindParam(':necesidad', $necesidad);
        $senSQL->execute();
        break;
}


$senSQL = $conexion->prepare("SELECT * FROM alerta");
$senSQL->execute();
$listaMapa = $senSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include('mapa.html')?>