console.log("affichage date");
var debut = new Date();
 
// le script ici
var i=0
while(i < 1234567)
     i++;
// fin du script
 
var fin = new Date();
tempsMs = fin.getTime() - debut.getTime();
alert("Le script a mis " + tempsMs/1000 + " secondes.");