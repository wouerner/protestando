<form method="post">
  <fieldset>
    <legend>Novo</legend>
    <label>Nome</label>
    <input name="name" type="text" placeholder="Nome" value="<?php echo $protest->name ; ?>">       
    <span class="help-block">Example block-level help text here.</span>
    <label>Local</label>
    <input name="local" type="text" placeholder="Nome" value="<?php echo $protest->local ; ?>">       
    <label>Descrição</label>
    <textarea name="desc" type="text" placeholder="Nome" ><?php echo $protest->description ; ?></textarea>       
    <span class="help-block">Example block-level help text here.</span>
    <label>Imagem:</label>
    <input name="image" type="text" placeholder="Nome">       
    <span class="help-block">Example block-level help text here.</span>

    <button type="submit" class="btn btn-success">Submit</button>
  </fieldset>
</form>

