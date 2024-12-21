<?php

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "app_teste");

$db = @mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die("Erro de conexão com o banco!");


?>