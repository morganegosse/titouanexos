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
                si l'essence utiliser fait partie des possibilités qui ont été fournis
                par le gérant qui sont ci-dessous, attention il ne faut pas choisir une des 3 essences par defaut !
              </p>
              <ul>
                <li>sp 95</li>
                <li>sp 98</li>
                <li>diesel</li>
              </ul>
              <h4>résultat</h4>
              <?php

              $userChoice=2;

              if($userChoice===1){
                echo"vous avez choisit sp 95 ! bonne journée !";
              }elseif($userChoice===2){
                echo "vous avez choisit sp 98 !";
              }elseif($userChoice===3){
                echo"vous avez choisit disele";
              }else{
                echo"choix mauvais";
              }
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>