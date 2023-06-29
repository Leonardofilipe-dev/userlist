<?php
require_once 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM login");

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<a href="adicionar.php">Adicionar novo usuario</a>

<table border="1" width="100%">
<tr>
<th>ID</th>
<th>NOME</th>
<th>EMAIL</th>

</tr>

<?php
foreach($lista as $user):?>
<tr>
    <td><?php echo $user['id'];?></td>
    <td><?php echo $user['nome'];?></td>
    <td><?php echo $user['email'];?></td>
</tr>
<?php endforeach; ?>
</table>