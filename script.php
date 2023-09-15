<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>script</title>
</head>
<body>
    <h1>Dados do Formulário</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $idade = $_POST["idade"];
        $email = $_POST["email"];
        $area = $_POST["área"];
        $puc = $_POST["puc"];
        $semestres = $_POST["semestres"];

        echo "<p>Nome: $nome</p>";
        echo "<p>Sobrenome: $sobrenome</p>";
        echo "<p>Idade: $idade</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Área de conhecimento: $area</p>";
        echo "<p>PUC: $puc</p>";
        
        if (!empty($semestres)) {
            echo "<p>Semestres cursados:</p>";
            echo "<ul>";
            foreach ($semestres as $semestre) {
                echo "<li>$semestre</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
