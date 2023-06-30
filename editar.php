<?php
require_once 'config.php';

$info = [];

$id = filter_input(INPUT_GET, 'id');
if($id){
    $sql = $pdo->prepare("SELECT * FROM login WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount()>0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);

    } else{
        header("Location: index.php");
        exit;
    }


}else{
    header("Location: index.php");
    exit;
}
?>


<h1>Editar Usuario</h1>
<form method="POST" action="editar_action.php">
    <label>Nome:
    <input type="text" name="name" value="<?=$info['nome'];?>" /><br><br>
    <label>Email:
    <input type="email" name="email" value="<?=$info['email'];?>" />
    <br/><br/>
    <input type="submit" value="Alterar">

</form>