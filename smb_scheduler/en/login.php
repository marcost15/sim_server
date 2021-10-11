<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Sim Bank Scheduler Server</title>
</head>
<body>
<center>
	<h1><?=_('Sim Bank Scheduler Server')?></h1>
  <p></p>
  <form name="login" method="post" action="dologin.php" onSubmit="return CheckForm();">
    <table width="500" height="241" border="0" cellpadding="0" cellspacing="0">
      <tr align="center">
        <td colspan="2" bgcolor="#8080C0"><?=_('Administrator Logon Screen')?></td>
      </tr>
      <tr bgcolor="#CCCCFF">
        <td width="137" align="center"><?=_('UserName')?></td>
        <td width="363"><input name="username" type="text" id="username" autofocus="true"></td>
      </tr>
      <tr bgcolor="#D9D9FF">
        <td align="center"><?=_('Password')?></td>
        <td><input name="password" type="password" id="yd631_pws" autocomplete="off"></td>
      </tr>
      <tr align="center" bgcolor="#CCCCFF">
        <td colspan="2"><input type="submit" name="Submit" value="<?=_('Sign in')?>">
          <input type="reset" name="submit" value="<?=_('Cancel')?>">

        </td>
      </tr>
    </table>
	<input type="hidden" name="lan" value="3">
  </form>
  <p></p>
</center>
<script type=text/javascript>
function CheckForm(){
	if(document.login.username.value == ""){
		alert("<?=_('input username!')?>");
		document.login.username.focus();
		return false;
	}
	if(document.login.password.value == "")  {
		alert("<?=_('input password!')?>");
		document.login.password.focus();
		return false;
	}
}
</script>
</body>
</html>
