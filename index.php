<?php
require_once 'database/config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = []; // Inicializar com um array vazio

$lista = $usuarioDao->findAll();
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
    <td><?= $user->getId();?></td>
    <td><?= $user->getNome();?></td>
    <td><?= $user->getEmail();?></td>
    
    <td>
        <a href="editar.php?id=<?= $user->getId(); ?>">[ Editar ]</a>
        <a href="deletar.php?id=<?= $user->getId(); ?>">[ Deletar ]</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
