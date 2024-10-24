<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $libros = [  
            "libro1" => [  
                "titulo" => "PHP para Principiantes",  
                "autor" => "Carlos Ruiz",  
                "precio" => 19.99,  
                "categoria" => "Desarrollo web"  
            ],  
            "libro2" => [  
                "titulo" => "JavaScript Avanzado",  
                "autor" => "Laura García",  
                "precio" => 25.99,  
                "categoria" => "Desarrollo web"  
            ],  
            "libro3" => [  
                "titulo" => "Algoritmos en Python",  
                "autor" => "Miguel Fernández",  
                "precio" => 29.99,  
                "categoria" => "Algoritmos"  
            ]  
        ];

        $dewLibro = array_filter($libros, function($libros){
            return $libros['categoria']='Desarrollo web' ;
        });

    ?>
    <h2>Información de todos los libros</h2>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th style="padding: 8px;">Título</th>
            <th style="padding: 8px;">Autor</th>
            <th style="padding: 8px;">Precio</th>
            <th style="padding: 8px;">Categoría</th>
        </tr>
        <?php foreach ($libros as $libro) :?>
            <tr>
                <td style="padding: 8px;"><?= $libro['titulo']?></td>
                <td style="padding: 8px;"><?= $libro['autor']?></td>
                <td style="padding: 8px;"><?= $libro['precio']?></td>
                <td style="padding: 8px;"><?= $libro['categoria']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <h2>Libro de la categoría 'Desarrollo web'</h2>
    <ol>
        <?php foreach ($dewLibro as $libro) : ?>
            <li>
                    <?= $libro['titulo'] ?>
            </li>
        <?php endforeach; ?>
    </ol>

</body>
</html>