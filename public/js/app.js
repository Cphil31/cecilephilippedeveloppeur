$(".formations").hide();
$(".experiences").hide();
$(".competences").hide();
$(".loisirs").hide();
$(".sport").hide();
$(".download").hide();
$(".icon").hide();
$(".titre").transition('hide');
$(".titre").transition('fly right','2000ms');
$(".menu").transition('hide');
$(".menu").transition('fly left','2000ms');



$(".acceuilMenu").click(function(){
	// $(".menu").transition('shake');
});


$(".formationMenu").click(function(){
	// // $(".menu").transition('shake');
	// $(".titre").transition('fly left','2000ms');
	$(".experiences").transition('hide');
	$(".competences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".icon").transition('hide');
	$(".download").transition('hide');
	$(".formations").transition('drop','1000ms');
	});

$(".competenceMenu").click(function(){
	// $(".menu").transition('shake');
	$(".formations").transition('hide');
	$(".experiences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".icon").transition('hide');
	$(".download").transition('hide');
	$(".competences").transition('drop','1000ms');
	});

$(".experienceMenu").click(function(){
	// $(".menu").transition('shake');
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".icon").transition('hide');
	$(".download").transition('hide');
	$(".experiences").transition('drop','1000ms');
});

$(".loisirMenu").click(function(){
	// $(".menu").transition('shake');
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".experiences").transition('hide');
	$(".icon").transition('hide');
	$(".download").transition('hide');
	$(".loisirs").transition('drop','1000ms');
	$(".sport").transition('drop','1000ms');
	});


$(".contactMenu").click(function(){
	// $(".menu").transition('shake');
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".experiences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".download").transition('drop','1000ms');
	$(".icon").transition('drop','1000ms');
		});


console.log("hello world");