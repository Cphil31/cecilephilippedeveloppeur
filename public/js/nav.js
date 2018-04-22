function hide (){
$(".formations").transition('hide');
$(".competences").transition('hide');
$(".experiences").transition('hide');
$(".loisirs").transition('hide');
$(".formulaire").transition('hide');

};
hide();

$(".formationMenu").click(function(){
	$(".acceuil").transition('hide');
	hide();
	$(".formations").transition('fly right','1000ms');
});

$(".competenceMenu").click(function(){
	$(".acceuil").transition('hide');
	hide();
	$(".competences").transition('fly right','1000ms');
});

$(".experienceMenu").click(function(){
	$(".acceuil").transition('hide');
	hide();
	$(".experiences").transition('fly right','1000ms');
});

$(".loisirMenu").click(function(){
	$(".acceuil").transition('hide');
	hide();
	$(".loisirs").transition('fly right','1000ms');
});

$(".contactMenu").click(function(){
	$(".acceuil").transition('hide');
	hide();
	$(".formulaire").transition('fly right','1000ms');
});