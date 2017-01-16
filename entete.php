

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
		<?php 
		if(($_SESSION==null)){
	echo '
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form class="login" method="post" action="connexion.php" >
                <input type="text" placeholder="Pseudo" name="Username" />
                <input type="password" placeholder="Mots de Passe" name="Password" />
                <input type="submit" value="Sign In" class="btn btn-success btn-sm" name="connexion" />
               
                </form>
            </div>
        </div>
    </div>
	}';}
?>
	</div>						 

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-3 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
						
							<h1>Projet 52 Photos</h1>
							<h2>P/52 35mm</h2>
							<h2> Alix / Jimmy / Maël</h2>
							
						</div>
					</div>
				</div>
			</div>
			<div class="container">
		</div>
		</div>
	</header>
