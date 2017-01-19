

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">

<div class="overlay"></div>
		<div class="container1">	
		<div class="col-md-12">
		
		<section>
		<button class="round-button" type="button"  id="toggle-button"  aria-label="open/close navigation"></button>
	</section>
	<div id="log">
	<?php include("formulaire_connexion.php"); ?>
		</div>
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
		</div>	
		</div>
		
	</header>
	
	
	<script>
	

 $(document).ready(function(){
    $("#toggle-button").focus(function(){
        $("#log").toggle();
    });
});
 


</script>



