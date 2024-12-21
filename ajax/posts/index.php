<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <center>
        <h1>Posts</h1>
        <button id="btn_carregar">Carregar</button>
        <div id="posts"></div>
    </center>

    <script type="text/javascript">

        $(document).ready(()=>{
            $("#btn_carregar").click(() => {
                $.ajax({
                    url: "ajax_pega_posts.php",
                    type: "GET",
                    dataType: "json",
                    success: (data) => {
                        let html = "";
                        data.forEach((post) => {
                            html += `
                            <tr>
                                <td>${post.titulo}</td>
                                <td>${post.conteudo}</td>
                                <td>${post.data_criacao}</td>
                            </tr>`
                        })

                        $("#posts").html(html);
                    },
                    error: (xhr, status, error) => {
                        console.error("Erro na requisição: ", error);
                    }

                })
        })
        })    

    </script>
</body>
</html>