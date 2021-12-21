<?php
//$locale = $_GET['locale']??"en_US";
$locale = $CFG['locale'];
putenv("LC_ALL=" . $locale);
setlocale(LC_ALL, $locale);
$domain = "messages";
bindtextdomain($domain, realpath("./locale"));
bind_textdomain_codeset($domain, 'UTF-8');
textdomain($domain);
