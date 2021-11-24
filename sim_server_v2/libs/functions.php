<?php

/**
 * return redirect script
 *
 * @param      string   $target  The page target
 * @param      integer  $secs    The seconds
 *
 * @return     string    The script for redirect the page.
 */
function script_redirect($target, $secs){
    return <<<LRDTAB
<script>
function redirect(){
   window.location="{$target}";
}
document.write('---');
setTimeout('redirect()',{$secs}*1000);
</script>
LRDTAB;
}



/**
 * verify for privileges from user on Session
 *
 * @param      <type>  $modulo  The modulo
 */
function modulo($modulo){
    $referer = $_SESSION['referer']??'index.php';
    if(!bd_privileges($modulo)){saltar($referer);}
}

/**
 * Genera listado de las zonas horarias
 * @return {array} Array con zonas horarias y sus nombres para la función de timezone
 */
function generate_timezone_list(){
    static $regions = array(
        DateTimeZone::AFRICA,
        DateTimeZone::AMERICA,
        DateTimeZone::ANTARCTICA,
        DateTimeZone::ASIA,
        DateTimeZone::ATLANTIC,
        DateTimeZone::AUSTRALIA,
        DateTimeZone::EUROPE,
        DateTimeZone::INDIAN,
        DateTimeZone::PACIFIC,
    );

    $timezones = [];
    foreach( $regions as $region ){
        $timezones = array_merge( $timezones, DateTimeZone::listIdentifiers( $region ) );
    }


    foreach( $timezones as $timezone ){
        $tz = new DateTimeZone($timezone);
        $timezone_offsets[$timezone] = $tz->getOffset(new DateTime);
    }

    asort($timezone_offsets);

    $timezone_list = [];
    foreach( $timezone_offsets as $timezone => $offset ) {
        $offset_prefix = $offset < 0 ? '-' : '+';
        $offset_formatted = gmdate( 'H:i', abs($offset) );

        $pretty_offset = "UTC${offset_prefix}${offset_formatted}";

        $timezone_list[$timezone] = "$timezone (${pretty_offset})";
    }

    ksort($timezone_list);
    return $timezone_list;
}

/**
 * Carga la página dada
 * @param  [type] $url Destiny url
 * @return [none]
 */
function saltar($pagina){
    $_SESSION['referer'] = $_SERVER['SCRIPT_NAME'];
    header("Location: $pagina");
    exit();
}

