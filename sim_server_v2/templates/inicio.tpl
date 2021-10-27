{include file="cabecera.tpl"}
<header id="header" class="">
	{include file="menu_nav.tpl"}
</header><!-- /header -->
<main>
<div class="container">
<table class="content-table">
	<thead>
		<tr>
			<th colspan="4">{gt 'Server message'}</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="t-r">{gt "PHP Version"}:</td><td><strong>{$sysversion}</strong></td>
			<td class="t-r">{gt "Server message"}:</td><td><strong>{$max_upload}</strong></td>
		</tr>
		<tr>
			<td class="t-r">{gt "Maximum upload limit"}:</td><td><strong>{$sysos}</strong></td>
			<td class="t-r">{gt "Cookie test"}:</td><td><strong>{$ifcookie}</strong></td>
		</tr>
	</tbody>
</table>
</div>
</main>
{include file="pie.tpl"}
