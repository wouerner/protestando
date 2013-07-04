<table class="table">
    <thead>
        <th>total</th>
        <th>Nome</th>
        <th>descrição</th>
        <th>local</th>
        <th>imagem</th>
    </thead>
<?php foreach($protests as $protest): ?>
<tr>
    <td>100</td>
    <td><a href="/protest/show?id=<?php echo $protest->id ?>"><?php echo $protest->name; ?></a></td>
    <td><?php echo $protest->description; ?> </td>
    <td><?php echo $protest->local; ?> </td>
    <td><?php echo $protest->image; ?> </td>
    <td><a href="/protest/edit?id=<?php echo $protest->id ?>">Editar</a></td>
</tr>
<?php endforeach;?>
</table>
