{include file="cabecera.tpl"}
<header id="header" class="">
	{include file="menu_nav.tpl"}
	<ul class="nav nav-tabs">
		<li class="nav-item"><a class="nav-link active" href="cdr.php?type=sim&name=&order=asc&order_key=name">{gt 'Refresh'}</a></li>
		<li class="nav-item"><a class="nav-link" href="cdr.php?type=sim&order=asc&order_key=name">{gt 'SIM CDR'}</a></li>
		<li class="nav-item"><a class="nav-link" href="cdr.php?type=line&order=asc&order_key=name">{gt 'LINE CDR'}</a></li>

	</ul>
</header><!-- /header -->
<main>
<div class="row">
	<div class="col">
		{$frm}
	</div>
</div>
<div class="row">
	<div class="col">
<div class="mitabla">
<table class="content-table" id="tablacdr">
	<thead>
	<tr>
		<th>{gt 'SIM'}</th>
		<th>{gt ASR}</th>
		<th>{gt ACD}</th>
		<th>{gt "Call Time"}</th>
		<th>{gt "Call Count"}</th>
		<th>{gt "Total Count"}</th>
	</tr>
</thead>
<tfoot>
	<tr>
		<th>{gt 'SIM'}</th>
		<th>{gt 'ASR'}</th>
		<th>{gt 'ACD'}</th>
		<th>{gt 'Call Time'}</th>
		<th>{gt 'Call Count'}</th>
		<th>{gt 'Total Count'}</th>
	</tr>
</tfoot>
<tbody>
	{foreach $d as $fila}
	<tr>
		<td>{$fila.name}</td>
		<td>{($fila.callcount * 100 / $fila.totalcallcount)|string_format:"%.1f"}%</td>
		<td>{$fila.acd}</td>
		<td>{$fila.calltime}</td>
		<td>{$fila.callcount}</td>
		<td>{$fila.totalcallcount}</td>
	</tr>
	{/foreach}
</tbody>
</table>
</div>

	</div>
</div>
</main>
{include file="pie.tpl"}
