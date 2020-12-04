<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#conditionExo3">
        Exercise 3
    </button>
      
      <div class="modal fade" id="conditionExo3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">condition exo 3</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : la station est très contente de ce système de choix d'essence
                ça leur permet d'ajuster leur prix plus facilement mais le gérant est dans l'optique
                de rajouter dans le futur des essences et voudrait une solution plus optimisé et plus lisible
                pour ses choix d'essence. n'oubliez pas aucune essence ne doit êtr eun choix par defaut !
              </p>
              <h4>résultat</h4>
              <?php
              /*
              On verifie le choix de l'essence en fonction de la valeur
              */
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
              ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>