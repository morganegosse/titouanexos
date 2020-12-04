<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loopExo3">
        Exercise 3
    </button>
      
      <div class="modal fade" id="loopExo3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">exo 3</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : Votre systeme fonctionne bien ! le gerant est content 
                mais malheureusement il est aller voir dans le code. Il a eu du mal
                a lire le code car le $i se retrouve partout ! a vous de le simplifier
                au maximum
              </p>
              <h4>résultat</h4>
              <?php
                $tranche = 20;
                $client = 33;
                $previous = 1;
                $reduction = 10;
                for ($i=0; $i <= $client; $i++) {
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
                }
              ?> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>