<?php
include("DB.php");

$departamento = (isset($_POST['departamento'])) ? $_POST['departamento'] : '';
$provincia = (isset($_POST['provincia'])) ? $_POST['provincia'] : '';
$distrito = (isset($_POST['distrito'])) ? $_POST['distrito'] : '';
$dni = (isset($_POST['dni'])) ? $_POST['dni'] : '';
$tipo_ayuda = (isset($_POST['helpType'])) ? $_POST['helpType'] : '';
$calificacion_ayuda = (isset($_POST['question1'])) ? $_POST['question1'] : '';
$llego_estimado = (isset($_POST['question2'])) ? $_POST['question2'] : '';
$nivel_emergencia = (isset($_POST['question3'])) ? $_POST['question3'] : '';
$necesidad = (isset($_POST['question4'])) ? $_POST['question4'] : '';
$problema = (isset($_POST['question5'])) ? $_POST['question5'] : '';
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : '';

switch ($accion) {
    case 'Enviar':
        $senSQL = $conexion->prepare("INSERT INTO satisfaccion_encuesta (departamento, provincia, distrito, dni, tipo_ayuda, calificacion_ayuda, llego_estimado, nivel_emergencia, necesidad, problema ) VALUES (:departamento, :provincia, :distrito, :dni, :tipo_ayuda, :calificacion_ayuda, :llego_estimado, :nivel_emergencia, :necesidad, :problema);");
        $senSQL->bindParam(':departamento', $departamento);
        $senSQL->bindParam(':provincia', $provincia);
        $senSQL->bindParam(':distrito', $distrito);
        $senSQL->bindParam(':dni', $dni);
        $senSQL->bindParam(':tipo_ayuda', $tipo_ayuda);
        $senSQL->bindParam(':calificacion_ayuda', $calificacion_ayuda);
        $senSQL->bindParam(':llego_estimado', $llego_estimado);
        $senSQL->bindParam(':nivel_emergencia', $nivel_emergencia);
        $senSQL->bindParam(':necesidad', $necesidad);
        $senSQL->bindParam(':problema', $problema);
        $senSQL->execute();
        break;
}


$senSQL = $conexion->prepare("SELECT * FROM satisfaccion_encuesta");
$senSQL->execute();
$listaMapa = $senSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include('mapa.html')?>


