$(".formations").hide();
$(".experiences").hide();
$(".competences").hide();
$(".loisirs").hide();
$(".sport").hide();
$(".download").hide();
$(".form").hide();
$(".segment").hide();
$(".contactezmoi").hide();
$(".titre").transition('hide');
$(".titre").transition('fly right','3500ms');
$(".menu").transition('hide');
$(".menu").transition('fly left','3500ms');
$(".footer").transition('hide');
$(".gauche").hide();
$(".droite").hide();

$(".developpeur").hide();

// $(".web").hide();
$(".developpeur").show(4000);

$(".gauche").delay(3000).show(2500);
$(".droite").delay(6000).show(3000);
$(".footer").transition('fly rightt','3500ms');

$('.acceuilMenu').click(function(){
	$(".formations").transition('hide');
	$(".experiences").transition('hide');
	$(".competences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".download").transition('hide');
	$(".form").transition('hide');
	$(".contactezmoi").transition('hide');
	$(".segment").transition('hide');
	$(".acceuil").transition('drop','1000ms');
});


$(".formationMenu").click(function(){
	
	
	$(".acceuil").transition('hide');
	// $(".titre").transition('fly left','2000ms');
	$(".experiences").transition('hide');
	$(".competences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".download").transition('hide');
	$(".form").transition('hide');
	$(".contactezmoi").transition('hide');
	$(".segment").transition('hide');
	$(".formations").transition('drop','1000ms');
	});

$(".competenceMenu").click(function(){
	$(".acceuil").transition('hide');
	$(".formations").transition('hide');
	$(".experiences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".download").transition('hide');
	$(".form").transition('hide');
	$(".contactezmoi").transition('hide');
	$("formulaire").hide();
	$(".segment").transition('hide');
	$(".apple").transition('drop','1000ms');
	$(".windows").transition('drop','1000ms');
	$(".linux").transition('drop','1000ms');
	$(".html5").transition('drop','1000ms');
	$(".css3").transition('drop','1000ms');
	$(".competences").transition('drop','1000ms');
	});

$(".experienceMenu").click(function(){
	$(".acceuil").transition('hide');
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".download").transition('hide');
	$(".form").transition('hide');
	$(".segment").transition('hide');
	$(".contactezmoi").transition('hide');
	$(".experiences").transition('drop','1000ms');
});

$(".loisirMenu").click(function(){
	
	$(".acceuil").transition('hide');
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".experiences").transition('hide');
	$(".download").transition('hide');
	$(".form").transition('hide');
	$(".contactezmoi").transition('hide');
	$(".loisirs").transition('drop','1000ms');
	$(".sport").transition('drop','1000ms');
	$(".segment").transition('hide');
	
	});


$(".contactMenu").click(function(){
	
	$(".acceuil").transition('hide');
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".experiences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".spacecomp").transition('hide');
	$(".segment").transition('drop','1000ms');
	$(".contactezmoi").transition('drop','1000ms');
	$(".form").transition('drop','1000ms');
	$(".download").transition('drop','1000ms');
		});

