<h1>Carga datos</h1>
<?php

echo "<h2>Nombre:".$_POST["nombre"]."</h2>";

?>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..."  alt="card image cap">
  <div class="card-body">
    <h5 class="card-title">Nombre</h5>
    <p class="card-text"><?=$_POST["nombre"]?></p>
  </div>
</div>