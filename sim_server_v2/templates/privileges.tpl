{include file="cabecera.tpl"}
<header id="header" class="">
	{include file="menu_nav.tpl"}
</header><!-- /header -->
<main>
	<div class="container">
		<div class="row">
			<div class="col">
<table class="content-table">
	<thead>
	<tr>
		<th>{gt Module}</th>
		{foreach $p as $nivel}
		<th>{$nivel}</th>
		{/foreach}
	</tr>
</thead>
<tbody>
		{foreach $m as $modulo}
	<tr>
		<td>{$modulo}</td>
			{foreach $p as $nivel}
			<td label="{$nivel}"><input type="checkbox" name="{$modulo}@{$nivel}" id="{$modulo}@{$nivel}"></td>
			{/foreach}
	</tr>
		{/foreach}
</tbody>
</table>

			</div>
		</div>
	</div>
</main>
{include file="pie.tpl"}
