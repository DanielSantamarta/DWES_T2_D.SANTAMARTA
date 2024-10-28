<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    use clases\miembro;
    use clases\Alumno;
    use clases\profesor;
    use clases\asignatura;
 
    require("./clases/miembro.php");
    require("./clases/alumno.php");
    require("./clases/profesor.php");
    require("./clases/asignatura.php");
 
    $alumnos=Alumno::crearAlumnosDeMuestra();
    $profesores=profesor::crearProfesoresDeMuestra();
    $asignaturas=asignatura::crearAsignaturasDeMuestra();
 
    $alumnos[0]->matricularEnAsignatura($asignaturas[0]);  
    $alumnos[1]->matricularEnAsignatura($asignaturas[0]);  
    $alumnos[1]->matricularEnAsignatura($asignaturas[1]);  
    $alumnos[2]->matricularEnAsignatura($asignaturas[0]);  
    $alumnos[2]->matricularEnAsignatura($asignaturas[2]);  
    $alumnos[3]->matricularEnAsignatura($asignaturas[0]);  
    $alumnos[4]->matricularEnAsignatura($asignaturas[0]);  
    $alumnos[4]->matricularEnAsignatura($asignaturas[1]);  
    $alumnos[4]->matricularEnAsignatura($asignaturas[2]);  
    $alumnos[5]->matricularEnAsignatura($asignaturas[0]);  
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
    $alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
    $alumnos[7]->matricularEnAsignatura($asignaturas[2]);  
    $alumnos[8]->matricularEnAsignatura($asignaturas[1]);  
    $alumnos[9]->matricularEnAsignatura($asignaturas[0]);
    
    $Alumnos23 = array_filter($alumnos, function($alumnos){
        return $alumnos->edad>=23 ;
    });
    
    $Alumnos2asignaturas = array_filter($alumnos, function($alumnos) {
        return sizeof($alumnos->asignaturas) >= 2;
    });

    $Asignaturas2alumnos = array_filter($asignaturas,function($asignatura){
        return $asignatura;
    });

    $asignatura2alum=[];
    foreach ($alumnos as $alumno){
                    foreach ($alumno->asignaturas as $asignatura){
                        if (!in_array($asignatura, $asignatura2alum)) {
                            $asignatura2alum[] = $asignatura;
                        }
                    }
               
            }
    ?>
    <h1>Alumnos</h1>
    <ul>
    <?php foreach ($alumnos as $alumno){
        echo "<li>$alumno</li>";} ?>    
    </ul>
    <h1>Profesores</h1>
    <ul>
    <?php foreach ($profesores as $profesor){
        echo "<li>$profesor</li>";} ?>    
    </ul>
    <h1>Asignaturas</h1>
    <ul>
    <?php foreach ($asignaturas as $asignatura){
        echo "<li>$asignatura</li>";} ?>    
    </ul>
    <h1>Alumnos<=23</h1>
    <ul>
    <?php foreach ($Alumnos23 as $alumno){
        echo "<li>$alumno</li>";} ?>    
    </ul>
    <h1>Alumnos con al menos dos asignaturas</h1>
    <ul>
    <?php foreach ($Alumnos2asignaturas as $alumno){
        echo "<li>$alumno</li>";} ?>    
    </ul>
    <h1>Asignaturas con algún alumno matriculado</h1>
    <ul>
    <?php foreach ($asignatura2alum as $asignatura){
        echo "<li>$asignatura</li>";} ?>    
    </ul>

</body>
</html>