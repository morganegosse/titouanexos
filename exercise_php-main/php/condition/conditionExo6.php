<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#conditionExo6">
        Exercise 6
    </button>
      
      <div class="modal fade" id="conditionExo6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">condition exo 6</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : Le gérant voit maintenant arriver des clients réguliers
                qui viennent faire le plein et veut mettre en palce un systeme de
                fidélité. Pour ce système il faut entrez un mot de passe pour ajoutez
                les points sur son compte. Votre objectif vérifiez que le mot de passe
                corresponde, il faut bien entendu vérifiez que le mot de passe saisis ne soit pas vide.
              </p>
              <h4>résultat</h4>
              <?php
              
            $motdepasse='bunjour'; /*si utilisateur se trope dans son mot de passe*/
            $motdepassevalide="bonjour";

            /*si le champs différent de vide = nos actions */
            if($motdepasse != ''){ 

               if($motdepasse===$motdepassevalide){
                 echo"validé";
               }else{
                 echo"le mot de passe ne correspont pas";
               }
            }
            
          


              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
