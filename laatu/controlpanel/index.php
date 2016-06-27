<!DOCTYPE html>
<html>
<head>
  <style>
  .otettu, .otettu a { color: #999; }
  li a { color: #000; text-decoration: none; }
  </style>
</head>
<body>
<?php
$lista = simplexml_load_file('C:/xampp/htdocs/laatu/esimiehet.xml');
$lista1 = simplexml_load_file('C:/xampp/htdocs/laatu/vastaukset.xml');
echo "<h1>$lista->nimi</h1>";

$n = 0;
echo '<ul>';
foreach ($lista->esimiehet->children() as $asia) {

  // tarkistetaan onko tuotteella otettu="on" -atribuutti

  echo "<li>".$asia."
          <a href=\"poistaTuote.php?n=".$n++."\">poista</a>
        </li>";
}
echo '</ul>';
?>

<form method="get" action="lisaaTuote.php">
  <input type="text" name="esimies" placeholder="lisää tuote" />
  <input type="submit" value="Lisää" />
</form>
<?php
foreach ($lista1->vastaukset->children() as $asia1) {

  // tarkistetaan onko tuotteella otettu="on" -atribuutti

  echo "<ul>".$asia1."</ul>";
}
?>

</body>
</html>
