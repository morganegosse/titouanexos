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

              /* BOUCLE FOR */
               
               /* $i remplace $nbclient de l'exercice précédant */
               $saisie = 12; /* numero gagant */ 
               $nbclientpasse = 20;
               $previus;

               for ($i=0; $i<$nbclientpasse; $i++) { 
                if ($i === $saisie) {
                  echo 'vous avez gagner';
                  }elseif($i<$saisie){
                    echo'vous avez perdu n°'.$i;
                  }elseif($i>$saisie){
                    $previus=$i-1;
                    echo'vous avez perdu n°'.$i.' le client passé avant ets le numero'.$previus;  /* le . s'appelle la concatenation*/                  
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