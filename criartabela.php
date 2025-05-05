<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Aula de PDO</title>
</head>

<body>

    <?php

        require_once "config.php";

        try {
            $conexao = new PDO("mysql:host=$servidor; dbname=$db", $usuario, $senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            $sql = "CREATE TABLE livro(
                        id int AUTO_INCREMENT,
                        nome varchar(30) NOT NULL,
                        autor varchar(30) NOT NULL,
                        editora varchar(50),
                        PRIMARY KEY(id)
                    )";
            
            $conexao->exec($sql);
            echo "Tabela criada com sucesso !";
        
        } catch (PDOException $e) {
            echo "A Tabela não pode ser criada" . $e->getMessage();
        }

      $conexao = null;
      
    ?>

</body>
</html>