<table class="table table-bordered table-striped">
    <thead>
        <th><i class="icon-user icon-white"></i><i class="icon-flag icon-white"></i></th>
        <th>Nome</th>
        <th>Criador</th>
        <th>local</th>
        <?php if ($this->ion_auth->is_admin()):?>
            <th>Ações</th>
        <?php endif;?>
    </thead>
<?php foreach($protests as $protest): ?>
<tr>
    <td><a class="" href="#">100</a></td>
    <td><a href="/protest/show?id=<?php echo $protest->id ?>"><?php echo $protest->name; ?></a></td>
    <td><a href="/auth/show?id=<?php echo $protest->userId ?>"><?php echo $protest->username ?></a></td>
    <td><?php echo $protest->local; ?> </td>
        <?php if ($this->ion_auth->is_admin()):?>
            <td><a href="/protest/edit?id=<?php echo $protest->id ?>">Editar</a></td>
        <?php endif;?>
</tr>
<?php endforeach;?>
</table>
