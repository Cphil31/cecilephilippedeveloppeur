$(".formations").hide();
$(".experiences").hide();
$(".competences").hide();
$(".loisirs").hide();
$(".sport").hide();
$(".download").hide();
$(".form").hide();
$(".segment").hide();
$(".contactezmoi").hide();
$(".titre").hide();
$(".developpeur").hide();
$(".gauche").hide();
$(".droite").hide();
$(".titre").delay(3500).show(1500);
$(".menu").transition('hide');
$(".menu").transition('fly left','3500ms');
$(".footer").transition('hide');
$(".developpeur").delay(5000).show(2000);
$(".gauche").delay(7000).show(2000);
$(".droite").delay(9000).show(2000);
$(".footer").transition('fly right','3500ms');

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
	$(".acceuil").transition('fly up','1000ms');
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
	$(".formations").transition('fly up','1000ms');
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
	$(".apple").transition('fly up','1000ms');
	$(".windows").transition('fly up','1000ms');
	$(".linux").transition('fly up','1000ms');
	$(".html5").transition('fly up','1000ms');
	$(".css3").transition('fly up','1000ms');
	$(".competences").transition('fly up','1000ms');
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
	$(".experiences").transition('fly up','1000ms');
});

$(".loisirMenu").click(function(){
	
	$(".acceuil").transition('hide');
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".experiences").transition('hide');
	$(".download").transition('hide');
	$(".form").transition('hide');
	$(".contactezmoi").transition('hide');
	$(".loisirs").transition('fly up','1000ms');
	$(".sport").transition('fly up','1000ms');
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
	$(".segment").transition('fly up','1000ms');
	$(".contactezmoi").transition('fly up','1000ms');
	$(".form").transition('fly up','1000ms');
	$(".download").transition('fly up','1000ms');
		});

