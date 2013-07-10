<div class="span8 offset2">
<h1 class=""><a href="#"><?php echo $protest->name; ?></a>
    <?php if($protest->creator == $this->ion_auth->user()->row()->id ):?>
        <span class="label label-inverse"><a href="/protest/edit?id=<?php echo $protest->id ?>">Editar</a></span>
    <?php endif; ?>
</h1>

<p>Criador do Protesto: <a href="/auth/show?id=<?php echo $protest->userId ?>">
<?php echo $protest->username ?></a></p>

<form method="post" action="/protestant/create">
    <?php if ($protest->isProtestant()):?>
        <button disabled class="btn" type="submit">Protestar(<?php echo $total->total?>)</button>
    <?php else: ?>
        <button class="btn" type="submit">Protestar(<?php echo $total->total?>)</button>
    <?php endif; ?>
    <input name="protestId" type="hidden" value="<?php echo $protest->id ?>">
</form>

<div class="well-mini">
<p>Local:<?php echo $protest->local; ?></p>
</div>
<div class="well">
<p>Descrição: <?php echo $protest->description; ?></p>
</div>

<table>
    <?php foreach($protest->protestants() as $protestant): ?>
        <tr><td><?php echo $protestant->username; ?></td></tr>
    <?php endforeach; ?>
</table>
</div>
