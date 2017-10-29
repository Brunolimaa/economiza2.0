<?php
/* Carrega a classe DOMPdf */

foreach($prod as $p){
    $html[] = $p['nome'];
}

$json = json_encode($html);



/* Cria a instância */
$dompdf = new DOMPDF();

/* Carrega seu HTML */
$dompdf->load_html($json);

/* Renderiza */
$dompdf->render();

/* Exibe */
$dompdf->stream(
    "saida.pdf", /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);
?>


