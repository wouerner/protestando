<h1 class=""><a href="#"><?php echo $protest->name; ?></a></h1>
<a href="/protest/edit?id=<?php echo $protest->id ?>">Editar</a>
<a href="/auth/show?id=<?php echo $protest->userId ?>"><?php echo $protest->username ?></a>
<h2>100</h2>
<?php var_dump($total);?>
<form method="post" action="/protestant/create">
    <button class="btn" type="submit">Protestar(<?php echo $total->total?>)</button>

    <input name="protestId" type="hidden" value="<?php echo $protest->id ?>">
</form>

<p><?php echo $protest->local; ?></p>
<p><?php echo $protest->description; ?></p>
