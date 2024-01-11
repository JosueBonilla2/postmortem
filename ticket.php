<?php

use Dompdf\Dompdf;

session_start();

// $nombre_usuario = $_SESSION['nombre_usuario'];
// echo "Bienvenido, $nombre_usuario";

require('C:\xampp\htdocs\postmortem\dompdf\vendor\autoload.php');

$dompdf = new Dompdf();

$html = '<html>
    <head><
        <title>EJEMPLO PDF</title>        
    </head>
        <body>
            <h1>Josue Bonilla Cardenas</h1>
            <p>Ejemplo de PDF</p>
        </body>
    </html>';

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$nombre_archivo = 'ticket.pdf';
$dompdf->stream($nombre_archivo);

?>
