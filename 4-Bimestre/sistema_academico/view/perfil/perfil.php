<?php
include_once(__DIR__ . "/../login/validar.php");

include_once(__DIR__ . "/../../controller/LoginController.php");

//Carregar o objeto referente ao usuário logado
$loginCont = new LoginController();
$usuario = $loginCont->getUsuarioLogado();

if(($_FILES['foto'])){
    print_r($_FILES['foto']);
};

if(!$usuario) {
    echo "Usuário não encontrado!";
    exit;
}

$msgErro = "";
//TODO - Receber os dados do formulário


//Inclusão do header e do Menu
include_once(__DIR__ . "/../include/header.php");
include_once(__DIR__ . "/../include/menu.php");


?>

<h3 class="text-center">
    Perfil
</h3>

<div class="row mt-2">
    <div class="col-12 mb-2">
        <span class="fw-bold">Nome:</span>
        <span><?= $usuario->getNome() ?></span>
    </div>

    <div class="col-12 mb-2">
        <span class="fw-bold">Login:</span>
        <span><?= $usuario->getLogin() ?></span>
    </div>

    <div class="col-12 mb-2">
        <div class="fw-bold">Foto:</div>
        <?php if($usuario->getImgPerfil()): ?>
            <img src="<?= URL_ARQUIVOS . '/' . $usuario->getImgPerfil() ?>"
                height="200px">
        <?php else: ?>
            <img src="<?= URL_BASE ?>/img/perfil_nulo.jpg"
                height="200px">    
        <?php endif; ?>
    </div>

</div>
    
<div class="row mt-5">
    
    <div class="col-6">
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <labelfor="">Foto de perfil</label>
                <input type="file" name="foto" class="form-control" accept="image/*">
              
            </div>
            <div class="margin-3">
                <button class="btn btn-success">Gravar</button>
            </div>
        </form>
    </div>

    <div class="col-6">
        <?php if($msgErro): ?>
            <div class="alert alert-danger">
                <?= $msgErro ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php  
require_once(__DIR__ . "/../include/footer.php");
?>