<form action="<?php path('itinerary/create') ?>" method="post">
  <div class="mb-3">
    <label>Título</label>
    <input type="text" name="title" class="form-control" placeholder="Digite aqui o título do roteiro" value="<?php echo $title ?>"> 
  </div>

  <div class="mb-3">
    <label>SubTítulo</label>
    <input type="text" name="subtitle" class="form-control" placeholder="Digite aqui o título do roteiro" value="<?php echo $title ?>"> 
  </div>

  <button class="btn btn-primary">Salvar</button>
</form>