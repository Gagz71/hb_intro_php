<nav class="navbar navbar-dark bg-dark">
	<a class="navbar-brand" href="index.php">Beanies</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="list.php">Liste des produits</a>
			</li>
			<li class="nav-item">
                <?php if(isset($_SESSION['email'])){?>
                 
	                <a class="nav-link" href="logout.php">Me déconnecter</a>
                <?php
                }else{
                ?>
                <a class="nav-link" href="login.php">Me connecter</a>
                <?php
                }
                ?>
				
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Dropdown link
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
