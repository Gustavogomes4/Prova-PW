<?php 

$dir = $_POST{'diretorio'};
if (is_dir($dir)) {
    
}else{
    mkdir("$dir");
}
$nome = $_FILES['userFile']["name"];
$nome_temp = $_FILES['userFile']['tmp_name'];

$par_info = pathinfo("$nome");
$ext = $par_info['extension'];

$extençoes = array("png","jpeg","jpg");
if(in_array($ext, $extençoes)){
    $TXT = move_uploaded_file($nome_temp,$dir."/".$nome.".$ext");
    if($TXT){
        echo "Upload feito com sucesso";
    }else{
        echo "Upload não deu certo Tente enviar imagens nas extençoes png, jpeg ou jpg";
}
} else {
    echo "upload não deu certo enviar imagens nas extençoes png, jpeg ou jpg";
}
echo "<a href=\"galeria.php\"><button> ir para galeria</button></a>";
echo "<a href=\"deletar.php\"><button> apagar </button></a>";