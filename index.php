<?php include 'header.tpl.php'; 

?>
	<article id="content" class="content column-full">
		<h1>login</h1>
	

		<form class="login" action='login.php'>
		<input class="login-email" name=$_POST["email"] type="email" placeholder="E-mail">
		<input class="login-pass" name=$_POST["senha"] type="password" placeholder="Senha">
		<input class="button" type="submit" value="logar">
		</form>
		

	</article><!-- #content -->
<?php include 'footer.tpl.php';	?>
