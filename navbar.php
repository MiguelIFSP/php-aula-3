<?php
$pg_atual = isset($pg_atual) ? $pg_atual : 'home';
?>
<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Matemática</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if($pg_atual == 'home') echo 'active'; ?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($pg_atual == 'soma') echo 'active'; ?>" aria-current="page" href="recebe_numeros_soma.php">Soma</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($pg_atual == 'subtracao') echo 'active'; ?>" aria-current="page" href="recebe_numeros_subtracao.php">Subtração</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($pg_atual == 'multiplicacao') echo 'active'; ?>" aria-current="page" href="recebe_numeros_multiplicacao.php">Multiplicação</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($pg_atual == 'divisao') echo 'active'; ?>" aria-current="page" href="recebe_numeros_divisao.php">Divisão</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($pg_atual == 'resultado') echo 'active'; ?>" aria-current="page" href="#">Resultado</a>
        </li>
      </ul>
    </div>
  </div>
</nav>