<?php
    function generateTriangle(int $altura) {
        $triangulo = '';
        for ($i = 0; $i < $altura; $i++) {
            $espacios = str_repeat(' ', $altura - $i - 1);
            $asteriscos = str_repeat('*', 2 * $i + 1);
            $triangulo += $espacios + $asteriscos + "\n";
        }
    
        return $triangulo;
    }