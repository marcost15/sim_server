{* Smarty *}
{include file="cabeceraalert.tpl"}
<header id="header" class="">
	{include file="menu_nav.tpl" titulo="Alerta"}
</header><!-- /header -->
<main>
	<div class="container text-center">
{* Comienzo ----------------------------------------- *}
<div class="jumbotron">
    <p class="display-4">Alerta</p>
    <div class="alert alert-danger">{$text}</div>
    <a href="{$target}" class="btn btn-link">Aceptar</a>
</div>

{* Final -------------------------------------------- *}
	</div>
</main>
{include file="pie.tpl"}
