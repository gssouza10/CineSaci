<?php

include_once '../../../components/EmBreve/index.php';

function Filme(string $categoria, string $titulo, string $data, string $autor, string $banner, string $sinopse, $elenco, string $lancamento, $plataforma, string $diretor): String {
  $path = '../../../images/';

  return "
    <div class='container'>
      <h1>${categoria}</h1>
      <div class='row content'>

        <div class='col-sm-9 movie-content'>
          <h2>${titulo}</h2>
          <p class='movie-description'>${data} <span>Escrito por ${autor}</span></p>
          <img class='cover-movie' src='${path}${banner}' />
          <h3>Sinopse</h3>
          <p>${sinopse}</p>
          <h3>Elenco</h3>

          <p>
            <ul>
              ${elenco}
            </ul>
          </p>

          <hr>
          <p><strong>Lançamento: </strong>${data}</p>
          <p><strong>Plataforma: </strong>${plataforma}</p>
          <p><strong>Diretor: </strong>${diretor}</p>

      </div>

      " . EmBreve() . "

    </div>
  ";
}

function ListaElenco($lista): String {
  $stringList = "";

  for ($i = 0; $i < count($lista); $i++) {
    $stringList = $stringList . "<li>" . $lista[$i] . "</li>";
  }

  return $stringList;
}

function ListaPlataforma($lista): String {
  $stringList = "";

  for ($i = 0; $i < count($lista); $i++) {
    if ($i == (count($lista) - 1)) {
      $stringList = $stringList . $lista[$i];
    } else {
      $stringList = $stringList . $lista[$i] . ", ";
    }
  }

  return $stringList;
}

?>
