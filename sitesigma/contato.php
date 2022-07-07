<?php
// include dos dados, head e header
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>
<?php
if (isset( $_POST['txtNome'] ) ) {
    $nome = strtoupper ($_POST['txtNome']);
    echo $nome; 
}
echo '<br>';

if (isset( $_POST['txtemail'] ) ) {
    $email = ($_POST['txtemail']);
    echo $email;
}
echo '<br>';

if (isset( $_POST['txtcel'] ) ){
    $telefone = strtoupper ($_POST['txtcel']);
    echo $telefone;
}
echo '<br>';

if (isset( $_POST['txtmsg'] ) ){
    $mensagem = ($_POST['txtmsg']);
    echo $mensagem;
}
?>
<h1 class="m-1">Contato</h1>

<form action="./contato.php" class="m-3" method="post">
    <label for="txtNome">Nome Completo</label>
    </br>
    <input type="text" name="txtNome" id="txtNome">
    </br>
    <label for="txtNome">E-mail</label>
    </br>
    <input type="text" name="txtemail" id="txtemail">
    </br>
    <label for="txtNome">Telefone</label>
    </br>
    <input type="text" name="txtcel" id="txtcel">
    </br>
    <label for="txtmsg">Mensagem</label>
    </br>
    <input type="text" name="txtmsg" id="txtmsg">
    </br>
    <input type="submit" value="Cadastrar">
</form>
<?php
// include do footer
include_once './includes/_footer.php';
?>