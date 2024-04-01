<?php

if (isset($_FILES['arquivo'])) {
    
    $arquivo = $_FILES['arquivo'];

    if ($arquivo['error']) {
       die("Falha no upload!");

    }else {
        
        if ($arquivo['size'] > 10000000) {
    
            die("Arquivo muito grande!");
    
        }else {
            
            $pasta = "arquivos/";
            $nomeDoArquivo = $arquivo['name'];
            $novoNomeDoArquivo = uniqid();
            $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

            if ( $extensao !="php" and $extensao != "pdf" and $extensao != "docx") {
                
                echo "Não aceitamos esse tipo de arquivo!";

            }else {
                
                $deu_certo = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeDoArquivo . "." . $extensao);

                if ($deu_certo) {
                    
                    echo "Arquivo enviado com sucesso! Para acessá-lo <p><a target=\"_blank\" href=\"arquivos/ $novoNomeDoArquivo . $extensao\">Clique aqui!</a></p>";
                }else {
                    
                    echo "<p>Tudo deu arrado!</p>";
                }
            }
        }
    }
}
/*if (file_exists(var_dump(__DIR__ . $pasta . $nomeDoArquivo))) {
                
    echo "Já existe este arquivo!";

    file_exists: verifica se um arquivo já existe.

    __DIR__: pega o local atual.
}*/


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload.</title>

</head>

<body>

<h1>Upload de arquivos.</h1>

<form enctype="multipart/form-data" action="" method="post">

<label for="arqui">Informe o arquivo.</label><br><br>

<input type="file" name="arquivo" id="arqui"><br><br>

<input type="submit" value="Enviar">

</form>
    
</body>

</html>