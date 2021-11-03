{* Smarty *}
{include file="cabecera.tpl"}
<header id="header" class="">
	{include file="menu_nav.tpl" titulo="Alerta"}
</header><!-- /header -->
<main>
	<div class="container text-center">
{* Comienzo ----------------------------------------- *}
<div class="jumbotron">
    <p class="display-4">Alerta</p>
    <div class="alert alert-danger">{$texto}</div>
    <a href="{$destino}" class="btn btn-link">Aceptar</a>
</div>

{* Final -------------------------------------------- *}
	</div>
</main>
{include file="pie.tpl"}
