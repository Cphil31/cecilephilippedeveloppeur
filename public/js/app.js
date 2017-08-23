$(".formations").hide();
$(".experiences").hide();
$(".competences").hide();
$(".loisirs").hide();
$(".sport").hide();
$(".download").hide();
$(".icon").hide();


$(".formationMenu").click(function(){
	$(".experiences").transition('hide');
	$(".competences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".icon").transition('hide');
	$(".download").transition('hide');
	$(".formations").transition('swing down','2500ms');
	});

$(".competenceMenu").click(function(){
	$(".formations").transition('hide');
	$(".experiences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".icon").transition('hide');
	$(".download").transition('hide');
	$(".competences").transition('swing down','2500ms');
	});

$(".experienceMenu").click(function(){
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".icon").transition('hide');
	$(".download").transition('hide');
	$(".experiences").transition('swing down','2500ms');
});

$(".loisirMenu").click(function(){
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".experiences").transition('hide');
	$(".icon").transition('hide');
	$(".download").transition('hide');
	$(".loisirs").transition('swing down','2500ms');
	$(".sport").transition('swing down','2500ms');
	});


$(".contactMenu").click(function(){
	$(".formations").transition('hide');
	$(".competences").transition('hide');
	$(".experiences").transition('hide');
	$(".loisirs").transition('hide');
	$(".sport").transition('hide');
	$(".download").transition('swing down','2500ms');
	$(".icon").transition('swing down','2500ms');
		});


console.log("hello world");