<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $mensaje = "ESTO ES UN METODO GET";
    echo $memsaje;

} else {
  echo "ESTO NO ES METODO GET";
}
?>