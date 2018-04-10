
function aujourdhui(){

	var maintenant=new Date();
	var jour=maintenant.getDate();
	var mois=maintenant.getMonth()+1;
	var an=maintenant.getFullYear();
	if (jour>=10)
	{
		$('.date').html(jour+'/'+mois+'/'+an);
	}
	else{
		$('.date').html("0"+jour+'/'+mois+'/'+an);
	}
	if (mois>=10)
	{
		$('.date').html(jour+'/'+mois+'/'+an);
	}
	else{
		$('.date').html(jour+'/'+"0"+mois +'/'+an);
	}
};

aujourdhui();