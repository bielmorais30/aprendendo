<?php

include("conexao.php");

$query_pega_posts = "SELECT * FROM posts";
$result_pega_posts = mysqli_query($db, $query_pega_posts);

$dados = [];
$rows = mysqli_num_rows($result_pega_posts);
if($rows){
    while($row = $result_pega_posts->fetch_assoc()){
        $dados[] = $row;
    }
}

header('Content-Type: application/json');
echo json_encode($dados);

mysqli_close($db);
?>