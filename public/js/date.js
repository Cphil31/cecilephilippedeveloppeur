console.log("affichage date");
var maintenant=new Date();
var jour=maintenant.getDate();
var mois=maintenant.getMonth()+1;
var an=maintenant.getFullYear();
var heure=maintenant.getHours();
var minute=maintenant.getMinutes();
var seconde=maintenant.getSeconds();


$(document).ready(function() {
    // 
    displayClock();
    setInterval(displayClock, 1000);
});

function displayClock() {
    // Récupérer l'heure actuelle >> instancier l'objet Date
    var today = new Date();
    // Récupérer les heures, les minutes et les secondes
    var hours = today.getHours();
    var minutes = today.getMinutes();
    var seconds = today.getSeconds();
    if(hours < 10) {
        hours = '0' + hours;
    }
    if(minutes < 10){
        minutes = '0' + minutes;
    }
    if(seconds < 10){
        seconds = '0' + seconds;
    }
    // Afficher l'horloge 
    $('.clock').html(hours + ':' + minutes + ':' + seconds);
}