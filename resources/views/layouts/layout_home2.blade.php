
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>cecilephilippedeveloppeur</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/app.css">
  <link rel="stylesheet" media="screen and (max-width: 1280px)" href="../css/petite_resolution.css">
  
</head>
<body>
  <div class="space"></div>
  <!-- <hr> -->
  


  <div class="container">

    <div class="row">
      <div class="col"></div>
      <div class="col-5">
      <div class="titre">CECILE&nbsp;Philippe</div>
        <div class="developpeur">
          Développeur&nbsp;web 
        </div>
        <!-- <div class="developpeurweb">
          Web
        </div> -->
      </div>
      <div class="col"></div>
    </div>
  </div>



  <div class="back2">
    <div class="spaceTitle"></div>
    <!-- MENU -->
    <div class="ui grid">
      <div class="two wide column"></div>
      <div class="twelve wide column">

        <!-- MENU -->
        <div class="ui blue six item inverted menu">
          <a id="menu" class="acceuilMenu item">Accueil</a>
          <a id="menu" class="competenceMenu item">Compétences</a>
          <a id="menu" class="experienceMenu item">Expériences </a>
          <a id="menu" class="formationMenu item">Formations</a>
          <a id="menu" class="loisirMenu item">Loisirs</a>
          <a id="menu" class="contactMenu item">Contact</a>
        </div>
      </div>
    </div>

    <!-- ACCEUIL -->

    <div class="ui grid">
      <div class="two wide column"></div>
      <div class="twelve wide column">
    <!-- <div class="acceuil">
        Développeur web Junior à la recherche d'opportunités 
      </div> -->
      <div class="acceuil">
        <div class="ui grid">
          <div class="six wide column">
            <div class="gauche">

              <div class="homeVous">
                VOUS DEVELOPPEZ
              </div >
              <div class="listeHome">
                des sites internet
              </div>
              <div class="listeHome">        
                des applications mobiles
              </div>  
            </div> 
          </div>

          <div class="five wide column"> 
          </div>
          <div class="five wide column">
            <div class="droite">

              <div class="homeVous">
                CONTACTEZ-MOI
              </div>

              <p class="listeHome">
                Période de Mise en Situation
              </p>

              <p class="listeHome2">
                découvrir le métier
              </p>

              <p class="listeHome2">
                vérifier mes compétences
              </p>

              <p class="listeHome2">
                initier une embauche
              </p>
              <div class="listeHome2_cdd">
                CDD ou CDI 
              </div>
              <div class="listeHome2_cdd">
               TOULOUSE 
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="two wide column"></div>
 </div>
</div>

<!-- FORMATIONS -->

<div class="formations">  
  <div class="ui grid">
    <div class="two wide column"></div>
    <div class="three wide column">2016-2017</div>
    <div class="seven wide column">Formation de Web Développeur à l'école Simplon</div>
    <div class="two wide column">Toulouse</div>
  </div>

  <div class="ui grid">
    <div class="two wide column"></div>
    <div class="three wide column"></div>
    <div class="seven wide column">
      <h4>Front-end : HTML, CSS, Javascript</h4>
      <h4>Back-end : Node.js, PHP</h4>
      <h4>Méthodes Agile</h4>
      <h4>Développement mobile</h4>
      <h4><a href="https://github.com/SimplonTlse02/prez/blob/master/prezpromo2.pdf">Voir le programme de formation</a></h4>
    </div>
    <div class="two wide column"></div>
  </div>

  <div class="textFormation">
    <div>*** Pour recevoir l'intégralité</div>
    <div>de ces informations</div>
    <div>Contactez-moi</div>
  </div>
</div>


<!-- EXPERIENCES -->

<div class="experiences">
  <div>
    *** Pour recevoir l'intégralité de ces informations 
  </div>
  <div>
    Contactez-moi
  </div>
</div>

<!-- COMPETENCES -->
<div class="ui grid">
  <div class="two wide column"></div>
  <div class="twelve wide column">

    <div class="competences">
      <ul> 
        <li>
          <div class="iconComp">
            <i class="apple icon" style="margin-left:auto;margin-right:auto; font-size:3em;"></i>
            <i class="linux icon" style="margin-left:auto;margin-right:auto; font-size:3em;"></i>
            <i class="windows icon" style="margin-left:auto;margin-right:auto; font-size:3em;"></i>
          </div>
        </li>
        <li>Langages de programmation : PHP,SQL,JavaScript,Css3,Html5</li>
        <li>Progammes: SublimText,Node.js,Express.js, Analyse cahier des charges</li>
        <li>CMS et Framework (<a href="http://getbootstrap.com/">Bootstrap</a> ,<a href="http://foundation.zurb.com/">Foundation</a>,<a href="http://semantic-ui.com/">Semantic</a>)</li>
      </ul>   
    </div>
    <div class="two wide column"></div>
  </div>
</div>
<!-- LOISIRS -->

<div class="loisirs">DJ - hôtels,clubs et soirées privées (2005-2012)</div>
<div class="sport">Poker,Belote,Jeux vidéos,Informatique</div>
<div class="sport">Sports : basket,footing</div>

<div class="ui grid">
  <div class="two wide column"></div>
  <div class="twelve wide column">


  </div>
  <div class="two wide column"></div>
</div>

<!-- CONTACT -->


<!-- FORMULAIRE -->

<div class="contactezmoi">Contactez-moi et je vous renvoie mon CV intégral</div>

<div class="ui grid">
  <div class="three wide column"></div>
  <div class="ten wide column">

    <div class="ui form">  

      <form action="/contact" method="POST">
        {{ csrf_field() }}
        <div class="two fields">

          <div class="field">
            <label><div class="label">Nom</div></label>
            <input type="text" name="nom" required="required">
          </div>

          <div class="field">
            <label ><div class="label">Prénom</div></label>
            <input type="text" name="prenom" required="required">
          </div>

        </div>

        <div class="field">
          <label ><div class="label">Email</div></label>
          <input type="text" name="mail" required="required">
        </div>

        <div class="field">
          <label ><div class="label">Message</div></label>
          <textarea name="text" cols="10" rows="3"></textarea>
        </div>

        <div class="required field"> 
          <button class="ui button btn-block" type="submit" >Envoyez</button>
        </div>
      </form>

    </div>

    <div class="four wide column"></div>
  </div>
</div>
<div class="container">
  @yield('content')
</div>
<div class="footer">
  <div class="icon">Suivez-moi sur :
    <a href="https://github.com/Cphil31/cecilephilippedeveloppeur" target="_blank"><i class="github icon" style="color:white"></i></a>
    <a  href="https://www.linkedin.com/in/philippe-cecile-a579b212b/" target="_blank"><i class="linkedin square icon" style="color:white"></i></a>
    <a href="mailto:cecilephilippe31@gmail.com" ><i class="mail outline icon" style="margin-left:auto;margin-right:auto; color:white;"></i></a> 
    <a href="https://gitlab.com/Cecile_philippe" target="_blank"><i class="gitlab icon" style="color:white"></i></a>
    <a href="https://twitter.com/Dev_phil971" target="_blank"><i class="twitter square icon" style="color:white"></i></a>
    <a  href="https://www.facebook.com/DonSanacho" target="_blank"><i class="facebook icon" style="color:white;"></i></a>
    <a href="https://www.instagram.com/donsanacho" target="_blank"><i class="instagram icon" style="color:white"></i></a>
    <a href="https://www.mixcloud.com/vito-sanacho/" target="_blank"><i class="mixcloud icon" style="color:white"></i></a>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>
<script src="../js/app.js"></script>
</body>
</html>