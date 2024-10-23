<?php
namespace Clases;
class Profesor extends Miembro{
    private bool $titular;
    private $asignatura;

    public function __construct($id,$nombre,$apellidos,$email, $asignatura){
        parent::__construct($id,$nombre,$apellidos,$email);
        $this->titular = false;
        $this->asignatura = $asignatura;
    }

    public function hacerTitular(){
        $this->titular = true;
    }

    public static function crearProfesoresDeMuestra(){
        $profesoresDeMuestra = [];
        $profesor1= new Profesor(1,"Steve","Wozniak","steve@apple.com","DWES");
        $profesoresDeMuestra+=$profesor1;
        $profesor2= new Profesor(2,"Ada","Lovelace","ada@gmail.com","");
        $profesoresDeMuestra+=$profesor2;
        $profesor3= new Profesor(3,"Taylor","Otwell","taylor@laravel.com","DWEC");
        $profesoresDeMuestra+=$profesor3;
        $profesor4= new Profesor(4,"Rasmus","Lerdoff","rasmus@php.com","DAW");
        $profesoresDeMuestra+=$profesor4;
        return $profesoresDeMuestra;

    }

}


?>