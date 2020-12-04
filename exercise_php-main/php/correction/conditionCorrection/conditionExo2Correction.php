<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#conditionExo2">
        Exercise 2
    </button>
      
      <div class="modal fade" id="conditionExo2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">condition exo 2</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : La station essence fonctionne desormais mieux mais maintenant on veut savoir
                si l'essence utiliser par l'utilisateur les possibilités d'essence qui ont été fournis
                par le gérant sont ci-dessous, attention il ne faut pas choisir une des 3 essences par defaut !
              </p>
              <ul>
                <li>sp 95</li>
                <li>sp 98</li>
                <li>diesel</li>
              </ul>
              <h4>résultat</h4>
              <?php
              /*
              Si l'essence est sp 95 -> 1
              Sinon si l'essence est sp 98 -> 2
              Sinon l'essence est diesel -> 3
              */
                $essence = 4;
                if ($essence === 1) {
                    echo "l'essence choisi est sp 95";
                }elseif($essence === 2){
                    echo"l'essence choisis est sp 98";
                }elseif($essence === 3){
                    echo"l'essence choisis est diesel";
                }else{
                    echo"veuillez choisir entre 1 et 3";
                }
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>