<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loopExo4">
        Exercise 4
    </button>
      
      <div class="modal fade" id="loopExo4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">exo 4</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Consigne : le gerant Arrive a lire plus clairement votre code 
                c'est excellent ! mais il a remarquer que plusieurs clients partait
                sans payer, il a decider de les blacklister en mettant leur nom sur
                un cahier. Il vous demandent desormais lorsque il met la carte dans le lecteur
                de verifier l'identitée et de bloquer sa carte pour que la police puisse arriver
              </p>
              <h4>résultat</h4>
              <?php
                 
              /* TABLEAU */

             /* $list = array();*/
              $cartname = "luc";
              $list = ["marion" , "yuna" , "natasha" , "luc" , "camille"] ; /* comme tjs par 0 doncil y a 4 prenoms */
                foreach ($list as $prenom) {  /* as c'est un alias qui permet de renommer un element d'une autre maniere*/
                  if ($prenom===$cartname) {
                    echo 'blacklist';
                  }else{
                    echo'give me the beef'; /* pas obligatoire de mettre le else*/
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
