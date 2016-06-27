<?php
session_start();
$answer1 = $_POST['kysymys1'];
$answer2 = $_POST['kysymys2'];
$answer3 = $_POST['kysymys3'];
$answer4 = $_POST['kysymys4'];
$answer5 = $_POST['kysymys5'];
$nimi= $_SESSION['firstname'];


$lista = simplexml_load_file('C:/xampp/htdocs/laatu/vastaukset.xml');

$uusi1 = $lista->vastaukset->addChild('vastaus1',$nimi . $answer1 . $answer2 . $answer3 . $answer4 . $answer5 );



// Tallennus siistimmin
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($lista->asXML());
$dom->save("C:/xampp/htdocs/laatu/vastaukset.xml");
?>
