{include file="cabecera.tpl"}
<header id="header" class="">
	{include file="menu_nav.tpl"}
	<ul class="nav nav-tabs">
		<li class="nav-item"><a class="nav-link active" href="user_password.php?">{gt 'Modify myself'}</a></li>
		<li class="nav-item"><a class="nav-link" href="user_password.php?">{gt 'Add administrator'}</a></li>
		<li class="nav-item"><a class="nav-link" href="user_password.php?">{gt 'Modify others'}</a></li>
	</ul>

</header><!-- /header -->
<main>
<div class="row">
	<div class="col-sm-4 offset-sm-4">
{$frm}
	</div>
</div>
</main>
{include file="pie.tpl"}
