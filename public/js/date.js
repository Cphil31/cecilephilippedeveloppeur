
function aujourdhui(){

	var maintenant=new Date();
	var jour=maintenant.getDate();
	var mois=maintenant.getMonth()+1;
	var an=maintenant.getFullYear();
	if (jour>9 && mois>9)
	{
		$('.date').html(jour+'/'+mois+'/'+an);
	}
	if (jour>9 && mois<10)
	{
		$('.date').html(jour+'/'+"0"+mois+'/'+an);
	}
	if (jour<10 && mois<10){
		$('.date').html("0"+jour+'/'+"0"+mois+'/'+an);
	}
	if (jour<10 && mois>9){
		$('.date').html("0"+jour+'/'+mois+'/'+an);
	}
};

aujourdhui();