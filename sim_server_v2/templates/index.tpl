{include file="cabecera.tpl"}
<div class="text-center">
	<form class="form-signin" action="index_proc.php" method="post">
		<img id="logo" class="logo" src="img/logo.svg" alt="{$name}">
		<h1 class="h3 mb-3 font-weight-normal">{gt Login}</h1>

		<label for="zone" class="sr-only">{gt Time Zone}</label>
		<select name="zone" id="zone"
		class="form-control"
		>
			{html_options values=$zonas output=$zonas selected=$zona}
		</select>

		<label for="login" class="sr-only">{gt User}</label>
		<input 	id="login" name="login"
					class="form-control" placeholder="{gt User}"
					type="text"
					required autofocus>
		<label for="password" class="sr-only">Password</label>
		<input id="password" name="password"
					class="form-control"
					type="password"
					title="8 caracteres mínimo"
					{literal}pattern=".{3,}"{/literal}
					placeholder="{gt Password}" required>
		<div class="checkbox mb-3">
			<!-- label>
			<input type="checkbox" value="olvido"> Olvidé la contraseña.
		</label -->
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">{gt Ingresar}</button>
	<p class="mt-5 mb-3 text-muted">---------</p>
	</form>
</div>
</body>
</html>
