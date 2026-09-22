<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Digite o nome do aluno: </label>
        <input type="text" name="nomeAluno">
        <br><br>

        <label>Digite a primeira nota: </label>
        <input type="number" name="nota1" required>
        <br><br>
        
        <label>Digite a segunda nota: </label>
        <input type="number" name="nota2" required>
        <br><br>

        <label>Digite a terceira nota: </label>
        <input type="number" name="nota3" required>
        <br><br>

        <label>Digite a quarta nota: </label>
        <input type="number" name="nota4" required>
        <br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nomeAluno = $_POST["nomeAluno"];
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $nota3 = $_POST["nota3"];
            $nota4 = $_POST["nota4"];

            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

            $nomesNotas = (fopen("nomeNotas.txt","w"));
            fwrite($nomesNotas,sprintf("%s;%.2f;%.2f;%.2f;%.2f;%.2f", $nomeAluno, $nota1, $nota2, $nota3, $nota4, $media));
            fclose($nomesNotas);
                
            sprintf("%-30s %5.2f %5.2f %5.2f %5.2f %5.2f",$nomeAluno, $nota1, $nota2, $nota3, $nota4, $media);
        }
    ?>
</body>
</html>