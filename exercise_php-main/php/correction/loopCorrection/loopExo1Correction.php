<section id="sectionCondition">
    <h2>loop</h2>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loopExo1">
        Exercise 1
    </button>
      
      <div class="modal fade" id="loopExo1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">exo 1</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : la station essence est désormais opérationnelle !
                mais le gérant aimerais mettre en place un systeme de 1 reduction par jour
                dont le principe est que le gerant entre un nombre (exemple 50 pour le client n°50)
                et tant que le client n'est pas le n°50 alors on applique pas la reduction
              </p>
              <h4>résultat</h4>
              <?php
                $tranche = 50;
                $client = 0;
                $reduction = 10;
                while ($client != $tranche) {
                  if ($client === 0) {
                    echo "aucun client";
                    echo "</br>";
                  }elseif ($client === $tranche) {
                    echo "la obucle passe";
                  }
                  else{
                    echo"le client est le n° ".$client;
                    echo "</br>";
                  }
                  $client++;
                  /*
                  $client = $client +1
                  $client += 1
                  */
                }
                echo"le client est le n° ".$client." et a une promotion de ".$reduction."%";
              ?> 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>