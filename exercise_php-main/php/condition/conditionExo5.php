<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#conditionExo5">
        Exercise 5
    </button>
      
      <div class="modal fade" id="conditionExo5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">condition exo 5</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : le système assure désormais une bonne sécurité !
                mais il est long à charger le gérant souhaite une optimisation 
                du système pour que ça aille plus vite !
              </p>
              <h4>résultat</h4>
              <?php
               $montant=true; 

               /* || c'est le 'ou' */
               if($userChoice===1 || 2 && $montant===true){
                 echo"vous avez choisit sp 95 ! et payer le bon montant,bonne journée !";
               }elseif($userChoice===1 || 2 && $montant===false){
                 echo"vous avez choisit sp 95 mais le montant n'est pas correct";
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