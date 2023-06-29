<?php

require_once '../../../config.php';
require_once '../../../src/actions/user.php';
require_once '../../modules/messages.php';
require_once '../partials/header.php';

$users = readUserAction($conn);

?>

<div class="container">
    <div class="row">
        <a href="../../.."><h1>Usuários</h1></a>
        <a href="./create.php" class="btn btn-success text-white">Novo</a>
    </div>

    <div class="row flex-center">
		<?php if(isset($_GET['message'])) echo(printMessage($_GET['message'])); ?>
	</div>

    <table class="table-users">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>

        <?php foreach($users as $row): ?>
        
        <tr>
            <td class="user-name"><?=htmlspecialchars($row['name'])?></td>
            <td class="user-email"><?=htmlspecialchars($row['email'])?></td>
            <td class="user-phone"><?=htmlspecialchars($row['phone'])?></td>
            <td>
                <a href="./edit.php?id=<?=$row['id']?>" class="btn btn-primary text-white">Editar</a>
            </td>
            <td>
                <a href="./delete.php?id=<?=$row['id']?>" class="btn btn-danger text-white">Deletar</a>
            </td>
        </tr>    
        <?php endforeach; ?>
    </table>
</div>
<?php '../partials/header.php'; ?>


