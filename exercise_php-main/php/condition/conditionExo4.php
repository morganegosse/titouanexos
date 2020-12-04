<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#conditionExo4">
        Exercise 4
    </button>
      
      <div class="modal fade" id="conditionExo4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">condition exo 4</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : Maintenant que le gérant peux ajouter autant d'essence qu'il 
                souhaite. Or il a remarqué plusieurs fraude avec le paiement car il n'y a aucun
                moyen de vérifier que le bon montant est réglé donc beaucoup parte sans payer.
                Désormais on veut vérifier si le moyen de paiement est soit part carte avec le 
                montant suffisant pour payer ou par espece et que l'argent représente bien le montant demandé
                sinon on ne permet prendre l'essence.
              </p>
              <h4>résultat</h4>
              <?php
              $userChoice=1;
              //si le montant c'est true c'est quil a ben payer si on c'ets false
              $montant=true; 

              if($userChoice===1 && $montant===true){
                echo"vous avez choisit sp 95 ! et payer le bon montant,bonne journée !";
              }elseif($userChoice===1 && $montant===false){
                echo"vous avez choisit sp 95 mais le montant n'est pas correct";
              }elseif($userChoice===2 && $montant===true){
                echo"vous avez choisit sp 8 ! et payer le bon montant,bonne journée !";
              }elseif($userChoice===2 && $montant===false){
                echo"vous avez choisit sp 8 mais le montant n'est pas correct";
              }else{
                echo"veuiller le moyen de paiement";
              }
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>