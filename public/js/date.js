function aujourdhui(){

var maintenant=new Date();
var jour=maintenant.getDate();
var mois=maintenant.getMonth()+1;
var an=maintenant.getFullYear();

if (jour.length <2);
{
	jour=jour;
}
if (mois.length<2);
{
	mois="0"+mois;
}
$('.date').html(jour + '/' +  mois + '/' + an);

};

aujourdhui();