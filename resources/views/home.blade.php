@extends('layouts.layout_home2')

@section('title', 'Page Title')

@section('sidebar')
@parent

@endsection

@section('content')

<div class="space"></div>
<div class="temps">
  <div class="espDate"></div>
  <div class="date"></div>
  <div class="espDate"></div>
  <div class="clock"></div>
  <div class="espDate"></div>
</div>

<div class="nom">CECILE &nbsp;&nbsp;Philippe</div>

<div class="dev">Développeur &nbsp;&nbsp;web</div>

  <!-- MENU -->

 <!--  <div class="row">
   <div class="col"></div>
   <div class="col"> -->
<div class="espnavbar"></div>

<div class="navbar">
  
      <a id="menu" class="formationMenu ">Formations</a>

      <a id="menu" class="competenceMenu ">Compétences</a>

      <a id="menu" class="experienceMenu ">Expériences</a>

      <a id="menu" class="loisirMenu ">Loisirs</a>

      <a id="menu" class="contactMenu ">Contact</a>
</div>
<div class="espnavbar"></div>
   

 <!--  </div>
  <div class="col"></div>
</div>
 -->

<!-- ACCEUIL -->

<div class="acceuil">



  <div class=" vous">
    Vous developpez 
  </div >
  

  <div class="sites">
    des sites internet,
  </div>
      

  <div class="applications">des applications mobiles</div> 

  <div class="cont">CONTACTEZ-MOI</div> 
    

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

                  <div class="datef">2016-2017</div>
                  <div class="simplon">Formation de Web Développeur à l'école 
                   <a href="https://simplon.co/occitanie/" style="color:white;" target="_blank">Simplon Occitanie</a>
                 </div>
                 <div class="toulouse">Toulouse</div>
                
                 <div class="front">
                     <div class="programme" ><a  href="https://github.com/SimplonTlse02/prez/blob/master/prezpromo2.pdf"  style="color:white;font-size: 2em;" target="_blank"> programme de formation</a></div>
                </div>
                
                    
          </div>


      <!-- EXPERIENCES -->

<!-- COMPETENCES -->

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
        
          <div class=" iconc">
            <i class="windows icon" style=" font-size:3em;"></i>
            <i class="apple icon" style=" font-size:3em;"></i>
            <i class="linux icon" style=" font-size:3em;"></i>
          </div>
          
        </div>

          <div class="compLanguages">
            <div>Langages de programmation : PHP,SQL,JavaScript,Css3,Html5</div>
            <div>Programmes: SublimText,Node.js,Express.js, Analyse cahier des charges</div>
            <div>
              CMS et Framework (<a href="http://getbootstrap.com/" style="color:white;"target="_blank"><U>Bootstrap</U></a>, <a href="http://foundation.zurb.com/"style="color:white;" target="_blank"><U>Foundation</U></a>, <a href="http://semantic-ui.com/" style="color:white;" target="_blank"><U>Semantic</U></a>)
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

       <div class="ui grid">
           <div class="two wide column"></div> 
           <div class="twelve wide column">
             
            <div class="ui form">  

              <form action="/contact" method="POST">
                {{ csrf_field() }}
                <div class="two fields">

                  <div class="field">
                    <label><div class="label" style="color: white;">Nom</div></label>
                    <input type="text" name="nom" requipired="required">
                  </div>

                  <div class="field">
                    <label ><div class="label" style="color: white";>Prénom</div></label>
                    <input type="text" name="prenom" required="required">
                  </div>

                </div>

                <div class="field">
                  <label ><div class="label" style="color: white";>Email</div></label>
                  <input type="text" name="mail" required="required">
                </div>

                <div class="field">
                  <label ><div class="label" style="color: white">Message</div></label>
                  <textarea name="text" cols="10" rows="2"></textarea>
                </div>

                <div class="required field"> 
                  <button class="ui button btn-block send" type="submit" style="background-color: #6f2108 ; color:white;" >Envoyez</button>
                </div>
              </form>
           </div>
           <div class="two wide column"></div> 
       </div>

            </div>   
      </div>

      <div class="footer">
        
         <div class="suivezmoi">Suivez-moi sur :</div>
         <div class="icon">
           
          <a href="https://github.com/Cphil31/cecilephilippedeveloppeur" target="_blank"><i class="github icon" style="color:white"></i></a>
          <a  href="https://www.linkedin.com/in/philippe-cecile-a579b212b/" target="_blank"><i class="linkedin square icon" style="color:white"></i></a>
          <a href="mailto:cecilephilippe31@gmail.com" ><i class="mail outline icon" style="margin-left:auto;margin-right:auto; color:white;"></i></a> 
          <a href="https://gitlab.com/Cecile_philippe" target="_blank"><i class="gitlab icon" style="color:white"></i></a>
          <a href="https://twitter.com/phil31971" target="_blank"><i class="twitter square icon" style="color:white"></i></a>
          <a  href="https://www.facebook.com/DonSanacho" target="_blank"><i class="facebook icon" style="color:white;"></i></a>
          <a href="https://www.instagram.com/donsanacho" target="_blank"><i class="instagram icon" style="color:white"></i></a>
          <a href="https://www.mixcloud.com/vito-sanacho/" target="_blank"><i class="mixcloud icon" style="color:white"></i></a>
         </div>
        
        <div class="source" >Source image :
        <a   class="picsum" href="https://picsum.photos/images" style="color:white;" target="_blank"> picsum photo</a>
        </div>
      </div>
          </div>
  




    @endsection