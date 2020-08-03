<?php

    require "json/Json.php";

    $confirmed = $json['confirmed']['value'];
    $deaths = $json['deaths']['value'];
    $recovered = $json['recovered']['value'];

    $active = $confirmed - $deaths - $recovered;
    $closed = $deaths + $recovered;

    $mild = $active / 100 * 96;
    $critical = $active / 100 * 4;

    $rPercentage = number_format($recovered / $closed * 100, 2, '.', '');
    $dPercentage = number_format($deaths / $closed * 100, 2, '.', '');
            
    $api = "https://covid19.mathdro.id/api/confirmed";
    $fgc = file_get_contents($api);
    $json = json_decode($fgc, true);
    $table_data = "";

    for ($i = 0; $i < 11; $i++) {
        $country = $json["$i"]['countryRegion'];
        $state = $json["$i"]['provinceState'];
        $total_cases = $json["$i"]['confirmed'];
        $total_deaths = $json["$i"]['deaths'];
        $total_recovered = $json["$i"]['recovered'];
        $total_active = $json["$i"]['active'];

        if ($country === $state) {
            $state = "";
        }

        $table_data .= 
        "<tr>
            <td class='tr-title'>$country</td>
            <td>$state</td>
            <td>$total_cases</td>
            <td>$total_deaths</td>
            <td>$total_recovered</td>
            <td>$total_active</td>
        </tr>
        ";
    }

        $table_data .="
        <tr>
            <td>World</td>
            <td></td>
            <td>$confirmed</td>
            <td>$deaths</td>
            <td>$recovered</td>
            <td>$active</td>
        </tr> 
        ";

    include "lib/views/Frontpage.php";

?>