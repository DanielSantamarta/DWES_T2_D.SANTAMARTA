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
    <table>
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Precio</th>
            <th>Categoría</th>
        </tr>
        <?php foreach ($libros as $libro) :?>
            <tr>
                <td><?= $libros['titulo']?></td>
                <td><?= $libros['autor']?></td>
                <td><?= $libros['precio']?></td>
                <td><?= $libros['categoria']?></td>
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