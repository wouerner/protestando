<h1 class=""><a href="#"><?php echo $protest->name; ?></a></h1>
<a href="/protest/edit?id=<?php echo $protest->id ?>">Editar</a>
<a href="/auth/show?id=<?php echo $protest->userId ?>"><?php echo $protest->username ?></a>
<h2>100</h2>
<a class="btn" href="/protestant/protest">Protestar</a>
<p><?php echo $protest->local; ?></p>
<p><?php echo $protest->description; ?></p>
