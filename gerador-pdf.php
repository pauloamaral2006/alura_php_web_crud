<?php

    require "vendor/autoload.php";

    // reference the Dompdf namespace
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();

    ob_start();
    require 'conteudo-pdf.php';
    $html = ob_get_clean();

    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4');

    // Render the HTML as PDF
    $dompdf->render();
    
    $dompdf->stream("documento.pdf", ["Attachment" => false]);
?>