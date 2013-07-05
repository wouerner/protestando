<table class="table">
    <thead>
        <th>total</th>
        <th>Nome</th>
        <th>descrição</th>
        <th>local</th>
        <th>imagem</th>
    </thead>
<?php foreach($protestants as $protestant): ?>
<tr>
    <td>100</td>
    <td><a href="/protestant/show?id=<?php echo $protestant->id ?>"><?php echo $protestant->name; ?></a></td>
    <td><?php echo $protestant->description; ?> </td>
    <td><?php echo $protestant->local; ?> </td>
    <td><?php echo $protestant->image; ?> </td>
    <td><a href="/protestant/edit?id=<?php echo $protestant->id ?>">Editar</a></td>
</tr>
<?php endforeach;?>
</table>
