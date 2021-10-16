<?php
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
