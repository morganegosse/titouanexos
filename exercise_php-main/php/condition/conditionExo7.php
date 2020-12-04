<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#conditionExo7">
        Exercise 7
    </button>
      
      <div class="modal fade" id="conditionExo7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">condition exo 7</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : Très content de vos fonctionnalités le gérant veut désormais tout regrouper
                pour parfaire son système et le mettre en place définitivement vous devez donc :
              </p>
              <ol>
                <li>sélectionnez l'essence souhaitez</li>
                <li>sélectionnez le mode de paiement</li>
                <li>Vérifiez si le client a une carte de fidélité</li>
                <li>Faire saisir le mot de passe pour ajoutez les points a sa carte</li>
                <li>Vérifiez qu'il  y a le montant necessaire pour payez</li>
              </ol>
              <h4>résultat</h4>
              <?php
               $essence = 2;
               switch ($essence) {
                   case 1:
                       echo "l'essence choisi est sp 95";
                       break;
                   case 2:
                       echo "l'essence choisi est sp 98";
                       break;
                   case 3:
                       echo "l'essence choisi est diesel";
                       break;
                   case 4:
                       echo "l'essence choisi est eau";
                       break;
                   default:
                       echo"veuillez choisir dans les chiffres proposés";
                       break;
               }
               $payment = false;
                if ($payment === true) {
                  echo 'Le moyen de paiement choisis est par espece';
                }else{
                  echo'le moyen de paiement choisis est par carte';
                }
                $cartefid = true;
                if ($cartefid === true) {
                  echo 'Vous bénéficiez de la carte fidélité';
                }else{
                  echo 'Vous ne bénéficiez pas de la carte fidélité';
                }
                $montant=true; 
               /* || c'est le 'ou' */
               if($userChoice===1 || 2 && $montant===true){
                 echo"vous avez choisit sp 95 ! et payer le bon montant,bonne journée !";
               }elseif($userChoice===1 || 2 && $montant===false){
                 echo"vous avez choisit sp 95 mais le montant n'est pas correct";
               }else{
                 echo"veuiller choisir le moyen de paiement";
               }

              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
</section>