<?php
    function generateTriangle(int $altura): string {
        if ($altura < 0) {
            return '';
        }
        $triangulo = '';
        for ($i = 0; $i < $altura; $i++) {
            $espacios = str_repeat('&nbsp;', $altura - $i - 1);
            $asteriscos = str_repeat('*', 2 * $i + 1);
            $triangulo .= '<p>' . $espacios . $asteriscos . '</p>';
        }
        
        return $triangulo;
    }