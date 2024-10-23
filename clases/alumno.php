<?php
namespace clases;
class Alumno extends Miembro{
    private array $asignaturas;
    private bool $cursoAbonado;
    private int $edad;

    public function __construct($id,$nombre,$apellidos,$email,$edad){
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad=$edad;
        $this->cursoAbonado=false;
        $this->asignaturas=[];
    }

    public function abonarCurso(){
        $this->cursoAbonado=true;
    }
    
    public function matricularseEnAsignatura($asig){
        $err=false;
        for($i=0;$i<sizeof($this->asignaturas);$i++){
            if($this->asignaturas[$i]==$asig){
                $err=true;
            }
        }
        if(!$err){
            $this->asignaturas+=$asig;
        }
    }

    public function bajaEnAsignatura($asig){
        array_diff($this->asignaturas,$asig);
    }
    
    public static function crearAlumnosDeMuestra(){
        $alumnosDeMuestra = [];
        $alumno1 = new Alumno(1, 'Laura', 'Martinez', 'laura.martinez@email.com',22);
        $alumnosDeMuestra += $alumno1;
        $alumno2 = new Alumno(2, 'Sergio', 'López', 'sergio.lopez@email.com',25);
        $alumnosDeMuestra += $alumno2;
        $alumno3 = new Alumno(3, 'Carlos', 'García', 'carlos.garcia@email.com',22);
        $alumnosDeMuestra += $alumno3;
        $alumno4 = new Alumno(4, 'Marta', 'Sánchez', 'marta.sanchez@email.com',23);
        $alumnosDeMuestra += $alumno4;
        $alumno5 = new Alumno(5, 'Alba', 'Fernández', 'alba.fernandez@email.com',22);
        $alumnosDeMuestra += $alumno5;
        $alumno6 = new Alumno(6, 'David', 'Rodríguez', 'david.rodriguez@email.com',26);
        $alumnosDeMuestra += $alumno6;
        $alumno7 = new Alumno(7, 'Lucía', 'Jiménez', 'lucia.jimenez@email.com',20);
        $alumnosDeMuestra += $alumno7;
        $alumno8 = new Alumno(8, 'Jorge', 'Pérez', 'jorge.perez@email.com',22);
        $alumnosDeMuestra += $alumno8;
        $alumno9 = new Alumno(9, 'Elena', 'Romero', 'elena.romero@email.com',23);
        $alumnosDeMuestra += $alumno9;
        $alumno10 = new Alumno(10, 'Pablo', 'Torres', 'pablo.torres@email.com',24);
        $alumnosDeMuestra += $alumno10;
        return $alumnosDeMuestra;
    }
 

}
?>