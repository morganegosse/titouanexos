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
                $paymentMethod = 1;
                $money = true;
                $member = true;
                $password = 'admin';
                $passwordUser = 'admin';

                /* functoin sert à ecrire une seul fois du code récurant*/ 
                function enoughMoney(bool $money){   /* verifier se le cient a donner le bon montant*/
                    if($money === true){
                        return ' Paiement accepté';
                      
                    }else {
                        return ' Paiement refusé';
                    }
                }

                function correctPassword(string $password, string $passwordUser){
                    if ($password === $passwordUser) {
                        return ' Points ajoutez';
                    }else {
                        return ' Mot de passe incorrect point pas ajouter';
                    }
                }

                switch ($essence) {  /* uniquement quandon connait les valeurs a plus choix*/
                    case 1:
                        echo "l'essence choisi est sp 95 ";
                        break;
                    case 2:
                        echo "l'essence choisi est sp 98 ";
                        break;
                    case 3:
                        echo "l'essence choisi est diesel ";
                        break;
                    case 4:
                        echo "l'essence choisi est eau ";
                        break;
                    default:
                        echo"veuillez choisir dans les chiffres proposés ";
                        break;
                }
                if ($paymentMethod === 1) {  /* if:condition (comparer /verifier une ou pls valeurs pour arriver au resultat) */
                    echo"Methode de paiement choisis par carte ";
                    if ($member === true) {
                        echo correctPassword($password, $passwordUser); 
                        /*echo = verifie que le mot de passe est le mot de passe ets = au mot de passe utilisateur */
                        echo enoughMoney($money); 
                    }else {
                        echo enoughMoney($money);  /* s'il ets pas membre juste vérifier si c'est le bon montant*/
                    }
                }elseif ($paymentMethod === 2) {
                    echo"Methode de paiement choisis par espece ";
                    if ($member === true) {
                        echo correctPassword($password, $passwordUser);
                        echo enoughMoney($money);
                    }else {
                        echo enoughMoney($money);
                    }
                }else {
                    echo "Choisir une méthode de paiement ";
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