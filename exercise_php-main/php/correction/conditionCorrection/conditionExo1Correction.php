<section id="sectionCondition">
    <h2>condition</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#conditionExo1">
        Exercise 1
    </button>
      
      <div class="modal fade" id="conditionExo1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">condition exo 1</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : Une station essence veut avoir un systeme de paiement automatique et ne plus faire 
                venir les utilisateurs à la caisse pour qu'il reparte plus rapidement. Pour le moment
                elle ne permet que de payer par espece. votre objectif est de vérifier le choix
                de l'utilisateurs si il a choisit de payer par espece ou par carte.
              </p>
              <h4>résultat</h4>
              <?php
              /*
              Si le moyen de paiement est par espece -> true
              sinon -> false
              */
                $payment = false;
                if ($payment === true) {
                  echo 'Le moyen de paiement choisis est par espece';
                }else{
                  echo'le moyen de paiement choisis est par carte';
                }
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>