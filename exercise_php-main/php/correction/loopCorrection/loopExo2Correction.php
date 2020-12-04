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
                $tranche = 50;
                $client = 52;
                $i = 0;
                $previous = 1;
                $reduction = 10;
                do{
                    if ($i === 0) {
                        echo "aucun client";
                        echo "</br>";
                      }elseif($i > $tranche){
                          $previous = $i - $previous;
                        echo"La reduction est deja passer pour aujourd'hui! il y a deja eu ".$previous." personne avant vous et vous etes le n°".$i;
                        echo "</br>";
                        $previous = 1;
                      }elseif($i === $tranche){
                        echo"Bravo vous etes le client n°".$i." et vous avez une promotion de ".$reduction."%";
                        echo "</br>";
                      }
                      else{
                        echo"c'est rater pour aujourd'hui! vous etes le client n° ".$i;
                        echo "</br>";
                      }
                      $i++;
                }while($i <= $client)
              ?> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>