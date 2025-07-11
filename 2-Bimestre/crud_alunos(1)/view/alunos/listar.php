<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require_once(__DIR__."/../../controll/AlunoController.php");
 

    ///chamar control para obter a lista de alunos
    $alunoCont = new AlunoController();

    $lista = $alunoCont->listar();
    print_r($lista);


    ////incluir o header
    include_once (__DIR__ . "/../include/header.php");
?>

    
    <h3>Listagem de Alunos</h3>
    <table border=1="1"> 

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        <th>editar</th>
        <th>excluir</th>
    </tr>

    <!-- Dados -->
    <?php foreach($lista as $aluno): ?>
        
        <tr>
                <td><?= $aluno->getId() ?></td>
                <td><?= $aluno->getId() ?></td>
                <td><?= $aluno->getId() ?></td>
        </tr>    
    
    <?php endforeach ?>

    </table>
<?php
    ////incluir o footer
    include_once (__DIR__ . "/../include/footer.php");
?>
