<section id="sectionCondition">
    <h2>loop</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loopExo1">
        Exercise 1
    </button>
      
      <div class="modal fade" id="loopExo1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">exo 1</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : la station essence est désormais opérationnelle !
                mais le gérant aimerais mettre en place un systeme de 1 reduction par jour
                dont le principe est que le gerant entre un nombre (exemple 50 pour le client n°50)
                et tant que le client n'est pas le n°50 alors on applique pas la reduction
              </p>
              <h4>résultat</h4>
              <?php

              /* BOUCLE WHILE */


                $saisie = 12; /* numero gagant */ 
                $nbclient = 1; /*le numero du client */ 

                
                while ($nbclient != $saisie ) { 
                  // /* nbclient différent de la saisie (nombre gagnant)*/
                  // if ($nbclient === $saisie) {
                  //   echo 'vous avez gagner / ';
                  // }else{
                  //   /* le . est le liens entre la phrase ecrit et le numero du client*/
                  //   /* le . permet de lier du texte et des variables*/ 
                  //} 
                 
                    echo 'vous avez perdu n°'.$nbclient.' mais re-tenter votre chance la prochaine fois / <br>'; 
                    $nbclient ++; 
                    /* pour rajouter +1 et atteindre le resultat voulu c'ets a dire dans ce caslà le numero gagnant*/
                }
                echo 'vous avez gagner / ';
                
                
            
              ?> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>