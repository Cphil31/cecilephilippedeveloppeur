console.log("affichage date");
var maintenant=new Date();
var jour=maintenant.getDate();
var mois=maintenant.getMonth()+1;
var an=maintenant.getFullYear();
$('.date').html(jour + '/' + mois + '/' + an);