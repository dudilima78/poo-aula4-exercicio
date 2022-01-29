<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require('./inc/Config.inc.php');

        $aluno = new Aluno ('João','888-00');
        echo $aluno->verDados();
        echo "<hr>";

        $turma = new Turma ('João','888-00','2º ano','2001');
        echo $turma->verDadosTurma();
        echo "<hr>";

        $pagamento = new Pagamento ('João','888-00','R$ 500','Adimplente');
        echo $pagamento->verDadosPagamento();
        echo "<hr>";
    ?>
</body>
</html>