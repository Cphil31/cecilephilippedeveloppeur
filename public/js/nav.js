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