<?php
     include 'includes/header.php';
?>
<form action="" method="POST">
	<div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Mot de passe</label>
		<input type="password" class="form-control" id="exampleInputPassword1" name="password" >
	</div>
	<button type="submit" class="btn btn-primary">Me connecter</button>
    
</form>



<?php
echo $_POST['email'];
echo $_POST['password'];

if(isset($_POST['email'], $_POST['password'])){
	if($_POST['password'] === $expectedPwd){
		$_SESSION['email'] = $_POST['email'];
		header("Location: list.php?connected=1");
	} else {
		echo '<p class="danger">le mot de passe saisi est incorrect. Veuillez réessayer</p> ';
	}
}



?>