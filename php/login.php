<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/login.css">
</head>
<body>

    <!-- <div class="container">
        <header style="display: flexbox;" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>
    
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">About</a></li>
          </ul>
    
          <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-primary">Sign-up</button>
          </div>
        </header>
      </div> -->
	
    <div class="container_login">
        <div class="login">
            <p><h2>Login</h2></p>
            <div class="input-log">
                <form action="traitement/traitementLogin.php" method="get">
                    <!-- Name -->
                    
                    <?php if (isset($_GET['indice']) && $_GET['indice'] == 1) { ?>
                        <div class="erreur">Nom inexistant</div>
                    <?php } ?>

                    <p><span class="glyphicon glyphicon-user"></span> 
                    <input class="input2" type="text" name="nom" placeholder="Name" value="admin" required></p>


                    <!-- mdp -->
                    <?php if (isset($_GET['indice']) && $_GET['indice'] == 0) { ?>
                        <div class="erreur2">Mot de passe incorrect</div>
                    <?php } ?>

                    <p><span class="glyphicon glyphicon-lock"></span> 
                        <input class="input2" type="password" name="password" placeholder="Password"  value="admin" required></p>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 footer">
                                    <label><input type="checkbox"> Remember me</label>
                                </div>
                                <div class="col-md-6 col-lg-6 footer">
                                    <a href="mdp.php">Forgot password?</a>
                                </div>
                            </div>
                    <!-- validation -->
                    
                    <p>
                        Administrateur 
                        <input type="radio" value="0" name="AdminOrClient" required>

                        Client
                        <input type="radio" value="1" name="AdminOrClient" required>
                    </p>

                    <p>
                        <input class="ok" type="submit" value="OK">
                    </p>
                </form>
            </div>

            <hr class="trait">
            <div class="insci">
                <p>Don't have an account? 
                <a href="signup.html"> Sign up</a>
                </p>
            </div>
        </div>
    </div>

</body>
</html>