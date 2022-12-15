<div class="row">
  <div class="col">
    <h1> Novo Roteiro </h1>
  </div>
  <div class="col-auto">
    <a href="<?php path('itinerary/index') ?>" class="btn btn-secondary">Voltar para a Lista</a>
  </div>
</div>

<?php if ($error) { ?>
  <p class="small text-danger"> <?php echo $error ?> </p>
<?php } ?>

<?php partial('itinerary/form', $vars) ?>
