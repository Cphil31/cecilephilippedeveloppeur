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
	$(".acceuil").transition('fly right','1000ms');
});


$(".formationMenu").click(function(){
	
	
	$(".acceuil").transition('hide');
	$(".experiences").transition('hide');
	$(".competences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".rightload").transition('hide');
	$(".form").transition('hide');
	$(".contactezmoi").transition('hide');
	$(".segment").transition('hide');
	$(".formations").transition('swing down','1000ms');
	});

$(".competenceMenu").click(function(){
	$(".acceuil").transition('hide');
	$(".formations").transition('hide');
	$(".experiences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".rightload").transition('hide');
	$(".form").transition('hide');
	$(".contactezmoi").transition('hide');
	$("formulaire").hide();
	$(".segment").transition('hide');
	$(".apple").transition('swing down','1000ms');
	$(".windows").transition('swing down','1000ms');
	$(".linux").transition('swing down','1000ms');
	$(".html5").transition('swing down','1000ms');
	$(".css3").transition('swing down','1000ms');
	$(".competences").transition('swing down','1000ms');
	});

$(".experienceMenu").click(function(){
	$(".acceuil").transition('hide');
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".rightload").transition('hide');
	$(".form").transition('hide');
	$(".segment").transition('hide');
	$(".contactezmoi").transition('hide');
	$(".experiences").transition('swing down','1000ms');
});

$(".loisirMenu").click(function(){
	
	$(".acceuil").transition('hide');
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".experiences").transition('hide');
	$(".rightload").transition('hide');
	$(".form").transition('hide');
	$(".contactezmoi").transition('hide');
	$(".loisirs").transition('swing down','1000ms');
	$(".sport").transition('swing down','1000ms');
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
	$(".segment").transition('swing down','1000ms');
	$(".contactezmoi").transition('swing down','1000ms');
	$(".form").transition('swing down','1000ms');
	$(".download").transition('swing down','1000ms');
		});

