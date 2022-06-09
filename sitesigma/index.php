<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET['id'];

?>

<h1>Home</h1>
<?php 
    for($i=0;$i<3;$i++){
        echo($produtos[$id]['nome'].' - ');
        echo($produtos[$id]['preco'].' - ');
        echo($produtos[$id]['descricao'].' - ');
        ?>
        <img src="./content/<?php echo $produtos[$i]['imagem'];?>" width='50px' height='50px'>
        <?php 
        echo '<hr>';
    }
?>

<?php
// include do footer
include_once './includes/_footer.php';
?>