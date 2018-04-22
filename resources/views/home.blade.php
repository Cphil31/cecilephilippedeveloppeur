@extends('layouts.layout_home2')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

  <div class="space"></div>
  <!-- <hr> -->
  <div class="row">
        
        <div class="col-1 date"></div>
        <div class="col"></div>
        <div class="col-1 clock"></div>

   </div>
  
  <div class="row">
    <div class="col"></div>
    <div class="col-10 cecile"><a href="/" style="color: white;">CECILE &nbsp;&nbsp;Philippe</a></div>
    <div class="col"></div>
  </div>

  <div class="row">
    <div class="col"></div>
    <div class="col-10 dev">Développeur &nbsp;&nbsp;web</div>
   
    <div class="col"></div>
  </div>
  
    
      </div>
      <div class="col"></div>
    </div>
  
  <div class="back2">
    
    <!-- MENU -->
   <div class="row">
     <div class="col"></div>
     <div class="col-8">
       
      <nav class="navbar">
            
                        <a class="formationMenu navbar-link">Formations</a>
                                  
                        <a id="menu" class="competenceMenu ">Compétences</a>
                    
                        <a id="menu" class="experienceMenu ">Expériences</a>
                    
                        <a id="menu" class="loisirMenu ">Loisirs</a>
                     
                        <a id="menu" class="contactMenu ">Contact</a>
           
      </nav>
     </div>
     <div class="col"></div>
   </div>

    <!-- ACCEUIL -->

    <div class="acceuil">
      

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

     <!--          <p class="periode">
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
             </div> -->
           
</div>
<!-- FORMATIONS -->

<div class="formations">  
  
  <div class="row ">
    <div class="col"></div>
    <div class="col-2 datef">2016-2017</div>
    <div class="col-4 simplon">Formation de Web Développeur à l'école 
         <a href="https://simplon.co/occitanie/" style="color:white;" target="_blank">Simplon Occitanie</a>
    </div>
    <div class="col-1 toulouse">Toulouse</div>
    <div class="col"></div>
  </div>
<div class="front">
  
  

  <div class="row">
      <div class="col"></div>
      <div class="col-6">
         <div ><a  href="https://github.com/SimplonTlse02/prez/blob/master/prezpromo2.pdf"  style="color:white;font-size: 2em;" target="_blank"> programme de formation</a></div>
      </div>
      <div class="col"></div> 
  </div>
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

    <div class="competences">
<div class="row">
  <div class="col"></div>
  <div class="col-3 iconc">
        <i class="windows icon" style=" font-size:3em;"></i>
        <i class="apple icon" style=" font-size:3em;"></i>
        <i class="linux icon" style=" font-size:3em;"></i>
    </div>
  <div class="col"></div>
</div>

<div class="row">
  <div class="col"></div>
  <div class="col-7 compLanguages">
    <div>Langages de programmation : PHP,SQL,JavaScript,Css3,Html5</div>
    <div>Programmes: SublimText,Node.js,Express.js, Analyse cahier des charges</div>
    <div>
            CMS et Framework (<a href="http://getbootstrap.com/" style="color:white;"target="_blank"><U>Bootstrap</U></a>, <a href="http://foundation.zurb.com/"style="color:white;" target="_blank"><U>Foundation</U></a>, <a href="http://semantic-ui.com/" style="color:white;" target="_blank"><U>Semantic</U></a>)
    </div>
  </div>
  <div class="col"></div>
</div>

          
          
      </div>
   
   
<!-- LOISIRS -->
<div class="loisirs">
  
    <div class="dj">DJ pour hôtels,clubs,mariages et soirées privées (2005-2012)</div>
    <div class="sport">Poker,Guitare,Belote,Jeux vidéos,Informatique</div>
    <div class="sport">Sports : basket,footing</div>
</div>

<!-- CONTACT -->


<!-- FORMULAIRE -->
<div class="formulaire">
  
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

</div>

  <div class="footer">
          <div class="row">
           <div class="col-1"></div>  
            <div class="col- suivezmoi">Suivez-moi sur :</div>
            <div class="col- icon">
                <a href="https://github.com/Cphil31/cecilephilippedeveloppeur" target="_blank"><i class="github icon" style="color:white"></i></a>
                <a  href="https://www.linkedin.com/in/philippe-cecile-a579b212b/" target="_blank"><i class="linkedin square icon" style="color:white"></i></a>
                <a href="mailto:cecilephilippe31@gmail.com" ><i class="mail outline icon" style="margin-left:auto;margin-right:auto; color:white;"></i></a> 
                <a href="https://gitlab.com/Cecile_philippe" target="_blank"><i class="gitlab icon" style="color:white"></i></a>
                <a href="https://twitter.com/phil31971" target="_blank"><i class="twitter square icon" style="color:white"></i></a>
                <a  href="https://www.facebook.com/DonSanacho" target="_blank"><i class="facebook icon" style="color:white;"></i></a>
                <a href="https://www.instagram.com/donsanacho" target="_blank"><i class="instagram icon" style="color:white"></i></a>
                <a href="https://www.mixcloud.com/vito-sanacho/" target="_blank"><i class="mixcloud icon" style="color:white"></i></a>
              </div>
              <div class="col"></div>
                <div class=".col source" >Source image :</div>
                <div  class=".col picsum">
                  <a   href="https://picsum.photos/images" style="color:white;" target="_blank"> picsum photo</a>
                </div>  
            <div class="col-1"></div>     
             
           </div>
      </div>


 

@endsection