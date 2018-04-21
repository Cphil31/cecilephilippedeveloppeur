@extends('layouts.layout_home2')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

  <div class="space"></div>
  <!-- <hr> -->
  <div class="row">
        <div class="col"></div>
        <div class="col- date"></div>
        <div class="col-3"></div>
        <div class="col- clock"></div>
        <div class="col"></div>
   </div>
  
  <div class="row">
    <div class="col"></div>
    <div class="col-10 cecile">CECILE &nbsp;&nbsp;Philippe</div>
    <div class="col"></div>
  </div>

  <div class="row">
    <div class="col"></div>
    <div class="col-10 dev" dev>Développeur &nbsp;&nbsp;web</div>
   
    <div class="col"></div>
  </div>
  
    
      </div>
      <div class="col"></div>
    </div>
  
  <div class="back2">
    
    <!-- MENU -->
    <div class="row">
      <div class="col-2"></div>
      <div class="col">
         <div class="ui five item inverted menu" style="background-color:red;font-size: 2em;">
          <a id="menu" class="formationMenu item">Formations</a>
          <a id="menu" class="competenceMenu item">Compétences</a>
          <a id="menu" class="experienceMenu item">Expériences</a>
          <a id="menu" class="loisirMenu item">Loisirs</a>
          <a id="menu" class="contactMenu item">Contact</a>
        </div>
      </div>
      <div class="col-2"></div>
    </div>

    <!-- ACCEUIL -->

    
    <!-- <div class="acceuil">
        Développeur web Junior à la recherche d'opportunités 
      </div> -->

    
<div class="row">
  <div class="col-2"></div>
        <div class="col vous">
          Vous developpez 
        </div >
        <div class="col-2"></div>
</div>

<div class="row">
  <div class="col-2"></div>
  <div class="col-10">
    <div class="sites">
    des sites internet,
    </div>
    <div class="col"></div>
  </div>
</div>

<div class="row">
  <div class="col-2"></div>
    <div class="col-10">
              <div class="applications">        
                des applications mobiles
              </div> 
    </div>
    <div class="col"></div>
</div>

<div class="row">
  <div class="col"></div>
    <div class="col-10">
              <div class="cont">
                CONTACTEZ-MOI
              </div> 
    </div>
    <div class="col"></div>
</div>
  
         

              

              <p class="periode">
                Période de Mise en Situation
              </p>

              <p class="decouvrir">
                découvrir le métier
              </p>

              <p class="verifier">
                vérifier mes compétences
              </p>

              <p class="initier">
                initier une embauche
              </p>
              <div class="cdd">
                CDD ou CDI 
              </div>
              <div class="toulouse">
               TOULOUSE 
             </div>
           
         
     
  

<!-- FORMATIONS -->

<div class="formations">  
  <div class="ui grid">
    <div class="two wide column"></div>
    <div class="three wide column">2016-2017</div>
    <div class="seven wide column">Formation de Web Développeur à l'école 
      <span class="simplon"> 
         <a href="https://simplon.co/occitanie/" style="color:white;" target="_blank">Simplon Occitanie</a>
      </span>
    </div>
    <div class="two wide column">Toulouse</div>
  </div>

  <div class="ui grid">
    <div class="two wide column"></div>
    <div class="three wide column"></div>
    <div class="seven wide column">
      <h4>Front-end : HTML, CSS, Javascript</h4>
      <h4>Back-end : PHP,SQL</h4>
      <h4>Méthodes Agile</h4>
      <h4>Développement mobile</h4>
      <h4><a class="simplon" href="https://github.com/SimplonTlse02/prez/blob/master/prezpromo2.pdf"  style="color:white;" target="_blank">Voir le programme de formation</a></h4>
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
            <i class="windows icon" style="margin-left:auto;margin-right:auto; font-size:3em;"></i>
            <i class="apple icon" style="margin-left:auto;margin-right:auto; font-size:3em;"></i>
            <i class="linux icon" style="margin-left:auto;margin-right:auto; font-size:3em;"></i>
            
          </div>
        </li>
        <li>Langages de programmation : PHP,SQL,JavaScript,Css3,Html5</li>
        <li>Progammes: SublimText,Node.js,Express.js, Analyse cahier des charges</li>
        <li>CMS et Framework (<a href="http://getbootstrap.com/" style="color:white;"target="_blank"><U>Bootstrap</U></a>, <a href="http://foundation.zurb.com/"style="color:white;" target="_blank"><U>Foundation</U></a>, <a href="http://semantic-ui.com/" style="color:white;" target="_blank"><U>Semantic</U></a>)</li>
      </ul>   
    </div>
    <div class="two wide column"></div>
  </div>
</div>
<!-- LOISIRS -->

<div class="loisirs">DJ pour hôtels,clubs,mariages et soirées privées (2005-2012)</div>
<div class="sport">Poker,Guitare,Belote,Jeux vidéos,Informatique</div>
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
            <input type="text" name="nom" requipired="required">
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
          <textarea name="text" cols="10" rows="2"></textarea>
        </div>

        <div class="required field"> 
          <button class="ui button btn-block send" type="submit" style="background-color: red ; color:white;" >Envoyez</button>
        </div>
      </form>

    </div>

    <div class="four wide column"></div>
  </div>
</div>

  <div class="footer">
      <div class="row">
          <div class="col-10 suivezmoi">Suivez-moi sur :</div>
      </div>
         <div class="row">   
              <div class="col-9 icon">
                <a href="https://github.com/Cphil31/cecilephilippedeveloppeur" target="_blank"><i class="github icon" style="color:white"></i></a>
                <a  href="https://www.linkedin.com/in/philippe-cecile-a579b212b/" target="_blank"><i class="linkedin square icon" style="color:white"></i></a>
                <a href="mailto:cecilephilippe31@gmail.com" ><i class="mail outline icon" style="margin-left:auto;margin-right:auto; color:white;"></i></a> 
                <a href="https://gitlab.com/Cecile_philippe" target="_blank"><i class="gitlab icon" style="color:white"></i></a>
                <a href="https://twitter.com/phil31971" target="_blank"><i class="twitter square icon" style="color:white"></i></a>
                <a  href="https://www.facebook.com/DonSanacho" target="_blank"><i class="facebook icon" style="color:white;"></i></a>
                <a href="https://www.instagram.com/donsanacho" target="_blank"><i class="instagram icon" style="color:white"></i></a>
                <a href="https://www.mixcloud.com/vito-sanacho/" target="_blank"><i class="mixcloud icon" style="color:white"></i></a>
              </div>
        </div>

            <div class="row">
                <div class=" col-10 source" >Source image :</div>
            </div> 

            <div class="row">
                <div  class="col-10 picsum">
                  <a   href="https://picsum.photos/images" style="color:white;" target="_blank"> picsum photo</a>
                </div>
            </div>
      </div>
<div class="row">
  
</div>
  

 

@endsection