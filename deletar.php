<form action="deletar.php" method="post">
    <p> Escreva o comodo da pasta para ser deletado <input type="text" name="Deletar"></p>
    <?php
    $deletar = $_POST['Deletar'];
    if(is_dir($deletar)){
        $TXT = scandir($deletar);
        array_shift($TXT);
        array_shift($TXT);
        foreach($TXT as $www){
            unlink("$deletar/$www");
        }
        rmdir($deletar);
    }
    ?>
    <button type="submit"> Deletar </button>
</form>