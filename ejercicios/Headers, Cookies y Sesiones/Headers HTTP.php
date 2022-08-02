

<?php
    //Redirigir a una pagina
    //header("Location: https://jairogarciarincon.com");

    /*indicar al navegador que queremos que almacene la información de
     nuestro sitio web solo durante un tiempo determinado; 2 ejemplos:
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Thu, 31 May 1984 04:35:00 GMT"); //poniendo una fecha pasada, nos aseguramos de que nunca almacene la página en la caché
    $date = gmdate("D, j M Y H:i:s", time() + 2592000); // 30 días desde ahora
    header("Expires: " . $data . " UTC");
?>