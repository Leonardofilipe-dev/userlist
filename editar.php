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


<h1>Editar Usuário</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$info['id'];?>"/>
    <label>Nome:</label>
    <input type="text" name="nome" value="<?=$info['nome'];?>" /><br><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?=$info['email'];?>" />
    <br/><br/>
    <input type="submit" value="Alterar">
</form>
