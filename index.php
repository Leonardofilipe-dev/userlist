<?php
require_once 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM login");

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<a href="adicionar.php">Adicionar novo usuário</a>

<table border="1" width="100%">
<tr>
<th>ID</th>
<th>NOME</th>
<th>EMAIL</th>
<th>AÇÕES</th>
</tr>

<?php foreach($lista as $user): ?>
<tr>
    <td><?= $user['id']; ?></td>
    <td><?= $user['nome']; ?></td>
    <td><?= $user['email']; ?></td>
    
    <td>
        <a href="editar.php?id=<?= $user['id']; ?>">[ Editar ]</a>
        <a href="deletar.php?id=<?= $user['id']; ?>">[ Deletar ]</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
