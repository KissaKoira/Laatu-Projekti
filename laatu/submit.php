<?php
$answer1 = $_POST['kysymys1'];


$lista = simplexml_load_file('C:/xampp/htdocs/laatu/vastaukset.xml');

$uusi1 = $lista->vastaukset->addChild('vastaus', $answer1);


// Tallennus siistimmin
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($lista->asXML());
$dom->save("C:/xampp/htdocs/laatu/esimiehet.xml");
?>
