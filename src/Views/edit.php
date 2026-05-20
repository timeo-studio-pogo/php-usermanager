<?php

/**  @var array $user */
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier</title>
</head>

<body>
  <form>
    <div class="mb-3">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" id="nom" name="nom" placeholder="<?php $_GET("nom")  ?>" value="<?php $_POST("nom") ?> ">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Est admin ?</label>
    </div>
    <button type="submit" class="btn btn-primary">Validé</button>
  </form>

</body>

</html>