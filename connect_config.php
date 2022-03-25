<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=ligocki_sklep user=ligocki_sklep password=sklep") or die ('Błąd połączenia: ' . pg_last_error());
$pepper = "w1isvFdxMDdmjOlvxpecGw";
?>