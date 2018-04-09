console.log("affichage date");
var maintenant=new Date();
var jour=maintenant.getDate();
var mois=maintenant.getMonth()+1;
var an=maintenant.getFullYear();
if (jour.length < 2 );
{
	jour="0"+jour;
}
if (mois.length < 2 );
{
	mois="0"+mois;
}

$('.date').html(jour + '/' + mois + '/' + an);