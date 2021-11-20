{include file="cabecera.tpl"}
<header id="header" class="">
	{include file="menu_nav.tpl"}
	<ul class="nav nav-tabs">
		<li class="nav-item"><a class="nav-link active" href="cdr.php?">{gt 'Refresh'}</a></li>
		<li class="nav-item"><a class="nav-link" href="cdr.php?">{gt 'SIM CDR'}</a></li>
		<li class="nav-item"><a class="nav-link" href="cdr.php?">{gt 'LINE CDR'}</a></li>
	</ul>
</header><!-- /header -->
<main>
<div class="row">
	<div class="col">
{$frm}

<div class="mitabla">
<table class="content-table" id="tablacdr">
	<thead>
	<tr>
		<th>{gt line}</th>
		<th>{gt ASR}</th>
		<th>{gt ACD}</th>
		<th>{gt "Call Time"}</th>
		<th>{gt "Call Count"}</th>
	</tr>
</thead>
<tfoot>
	<tr>
		<th>{gt 'line'}</th>
		<th>{gt 'ASR'}</th>
		<th>{gt 'ACD'}</th>
		<th>{gt "Call Time"}</th>
		<th>{gt "Call Count"}</th>
	</tr>
	<tr>
		<th colspan="5">
			<button type="submit" class="btn btn-primary">Guardar</button>
		</th>
	</tr>
</tfoot>
<tbody>
	<tr>
		<td>e dssdfggs</td>
		<td>f dssdfggs</td>
		<td>aa dssdfggs</td>
		<td>bbb dssdfggs</td>
		<td>cdf dssdfggs</td>
	</tr>
	<tr>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
	</tr>
	<tr>
		<td>adssdfggs</td>
		<td>b dssdfggs</td>
		<td>c dssdfggs</td>
		<td>d dssdfggs</td>
		<td>e dssdfggs</td>
	</tr>
	<tr>
		<td>e dssdfggs</td>
		<td>f dssdfggs</td>
		<td>aa dssdfggs</td>
		<td>bbb dssdfggs</td>
		<td>cdf dssdfggs</td>
	</tr>
	<tr>
		<td>dss dfggs</td>
		<td>dssd fggs</td>
		<td>ds sdfggs</td>
		<td>aa dssdfggs</td>
		<td>abc dssdfggs</td>
	</tr>
	<tr>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
	</tr>
	<tr>
		<td>adssdfggs</td>
		<td>b dssdfggs</td>
		<td>c dssdfggs</td>
		<td>d dssdfggs</td>
		<td>e dssdfggs</td>
	</tr>
	<tr>
		<td>e dssdfggs</td>
		<td>f dssdfggs</td>
		<td>aa dssdfggs</td>
		<td>bbb dssdfggs</td>
		<td>cdf dssdfggs</td>
	</tr>
	<tr>
		<td>dss dfggs</td>
		<td>dssd fggs</td>
		<td>ds sdfggs</td>
		<td>aa dssdfggs</td>
		<td>abc dssdfggs</td>
	</tr>
	<tr>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
		<td>dssdfggs</td>
	</tr>
</tbody>
</table>
</div>

	</div>
</div>
</main>
{include file="pie.tpl"}
