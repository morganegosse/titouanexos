<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loopExo5">
        Exercise 5
    </button>
      
      <div class="modal fade" id="loopExo5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">exo 5</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : Excellent votre systeme rempli toutes les conditions 
                il ne reste plus qu'a l'assembler ! voici les différentes étapes à faire dans l'ordre
                pour que tout fonctionne :
              </p>
              <ol>
                  <li>Permettre au gerant de modifier le montant de la reduction</li>
                  <li>Permettre au gerant de definir un numero de client beneficiant de la reduction</li>
                  <li>Ajouter +1 a chaque fois qu'un client passe pour pouvoir atteindre le numero gagnant</li>
                  <li>Prevenir les clients de leur numero si la reduction n'est pas passer</li>
                  <li>Prevenir le client qui beneficie de la reduction</li>
                  <li>Prevenir les clients si la reduction est deja passer du nombre de client passer avant et du leur</li>
                  <li>Verifier si le client n'est pas sur une blacklist </li>
                  <li>Prevenir le client qu'il a la carte bloquer si il est sur blacklist</li>
                  <li>Prevenir le client si il ne l'est pas et qu'il peut payer</li>
              </ol>
              <h4>résultat</h4>
              <?php
                 $reduction = 10;
                 $tranche = 20; /* le numero du client gagnant*/ 
                 $client = 25;/*le nombres de clients total */
                 $previous = 1;
                 $list = ["alex", "mattheo", "oceane", "fairy"];
                 $cardName = "oceane";
                  /* $i ets le nbr de client*/
                 //permet de savoir quand l'utilisateur peut etre blacklister a mis la carte
                 $numeroClientList = 20;

                 function clientCheck(int $i, int $tranche, int $reduction, int $previous){  
                    /*  'int' nbr entier,apporter une précision pour ien sécuriser sa demande  */
                     $text = ""; /*  */
                    if ($i === 0) { /* i 0 client  */
                        $text .= "aucun client";
                        $text .= "</br>";
                         /* par lisibiliter titi à préférer metre la balise 'br' ici met ça revient au meme que de mettre  la suite de 'auucn client'*/ 
                        return $text; /* 'return' stop ma fonction comme 'break' mais retourne une information ! obligé de metre return pour fermer ma fonction*/ 
                    }elseif($i > $tranche){
                            $previous = $i - $previous;
                        $text .= "La reduction est deja passer pour aujourd'hui! il y a deja eu ".$previous." personne avant vous et vous etes le n°".$i;
                        $text .=  "</br>";
                        return $text;
                    }elseif($i === $tranche){
                        $text .= "Bravo vous etes le client n°".$i." et vous avez une promotion de ".$reduction."%";
                        $text .= "</br>";
                        return $text;
                    }else{
                        $text .= "c'est rater pour aujourd'hui! vous etes le client n° ".$i;
                        $text .= "</br>";
                        return $text;
                    }
                 }
 /* connaitre le nombre declient qui passe*/ /* ; veux dire tant que et le deuxieme ; veux dire alors*/
                 for ($i=0; $i <= $client; $i++) {
                   //on verifie si le client dont le nom a verifier est le client qui passe
                     if($numeroClientList === $i){       /* bloc rouge*/
                       //on check les noms du tableau
                         foreach ($list as $name) {      /* bloc vert*/
                           //si il est blacklister
                            if ($name === $cardName && $numeroClientList === $i) {
                              echo "vous etes blacklister vous ne pouvez pas payer et profitez de la reduction";
                              //augmenter la tranche pour permettre de decaler le numero beneficiant de la reduction
                              $tranche++;
                              break;
                            }
                        } // fin foreach
                     }else {
                         echo clientCheck($i, $tranche, $reduction, $previous);
                     }
                  } //fin for
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
</section>