<?php
namespace clases;
class Alumno extends Miembro{
    public array $asignaturas;
    public bool $cursoAbonado;
    public int $edad;

    public function __construct($id,$nombre,$apellidos,$email,$edad){
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad=$edad;
        $this->cursoAbonado=false;
        $this->asignaturas=[];
    }

    public function abonarCurso(){
        $this->cursoAbonado=true;
    }
    
    public function matricularEnAsignatura($asig){
        $err=false;
        for($i=0;$i<sizeof($this->asignaturas);$i++){
            if($this->asignaturas[$i]==$asig){
                $err=true;
                break;
            }
        }
        if(!$err){
            $this->asignaturas[]=$asig;
        }
        return $this->asignaturas;
    }

    public function bajaEnAsignatura($asig){
        array_diff($this->asignaturas,$asig);
    }
    
    public static function crearAlumnosDeMuestra(): array{
        $alumnosMuestra=[];
        $alumno1 = new Alumno(1, "Laura", "Martinez", "laura.martinez@email.com", 22);
        $alumnosMuestra[] = $alumno1;
        $alumno2 = new Alumno(2, "Sergio", "Lopez", "sergio.lopez@email.com", 25);
        $alumnosMuestra[] = $alumno2;
        $alumno3 = new Alumno(3, "Carlos", "Garcia", "carlos.garcia@email.com", 24);
        $alumnosMuestra[] = $alumno3;
        $alumno4 = new Alumno(4, "Marta", "Sanchez", "marta.sanchez@email.com", 23);
        $alumnosMuestra[] = $alumno4;
        $alumno5 = new Alumno(5, "Alba", "Fernandez", "alba.fernandez@email.com", 21);
        $alumnosMuestra[] = $alumno5;
        $alumno6 = new Alumno(6, "David", "Rodriguez", "david.rodriguez@email.com", 26);
        $alumnosMuestra[] = $alumno6;
        $alumno7 = new Alumno(7, "Laura", "Martinez", "lucia.jimenez@email.com", 20);
        $alumnosMuestra[] = $alumno7;
        $alumno8 = new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22);
        $alumnosMuestra[] = $alumno8;
        $alumno9 = new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23);
        $alumnosMuestra[] = $alumno9;     
        $alumno10 = new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24);
        $alumnosMuestra[] = $alumno10;
        return $alumnosMuestra;
    }
 

}
?>