    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loopExo2">
        Exercise 2
    </button>
      
      <div class="modal fade" id="loopExo2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">exo 2</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : les clients sont content de pouvoir profiter d'une reduction
                mais une fois la reduction appliquer on aimerais pour prevenir les clients 
                que la reduction est deja passer afficher les infos necessaires pour qu'ils sachent combien sont passer 
                avant eux. Votre objectif est de faire une boucle affichant les informations necessaires au bon fonctionnement
                du systeme
              </p>
              <h4>résultat</h4>
              <?php

              /* BOUCLE WHILE */
                
                $saisie = 12; /* numero gagant */ 
                $nbclient = 10; /*le numero du client */ 
                $nbclientpasse = 20;
                $previus;

                while ($nbclient!=$nbclientpasse) { 
                  if ($nbclient === $saisie) {
                  echo 'vous avez gagner';
                  }elseif($nbclient<$saisie){
                    echo'vous avez perdu n°'.$nbclient;
                  }elseif($nbclient>$saisie){
                    $previus=$nbclient-1;
                    echo'vous avez perdu n°'.$nbclient.' le client passé avant ets le numero'.$previus;  /* le . s'appelle la concatenation*/                  
                  }
                    $nbclient++;
                }                              
                
                




              ?> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>