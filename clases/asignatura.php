<?php
namespace clases;
class Asignatura {
    private int $id;
    private $nombre;
    private int $creditos;

    public function __construct(int $id,$nombre,int $creditos){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    public function crearAsignaturasDeMuestra(){
        $asignaturasDeMuestra = [];
        $asig1= new Asignatura(1,"DWES",7);
        $asignaturasDeMuestra+=$asig1;
        $asig2= new Asignatura(2,"DWEC",6);
        $asignaturasDeMuestra+=$asig2;
        $asig3= new Asignatura(3,"DIW",4);
        $asignaturasDeMuestra+=$asig3;
        $asig4= new Asignatura(4,"DAW",4);
        $asignaturasDeMuestra+=$asig4;
        return $asignaturasDeMuestra;
    }
    
    public function __toString()
    {
        return "Nombre: ".$this->nombre.", Créditos: ".$this->creditos;
    }
}