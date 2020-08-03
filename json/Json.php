<?php
    $api = "https://covid19.mathdro.id/api/";
    $fgc = file_get_contents($api);
    $json = json_decode($fgc, true);
?>