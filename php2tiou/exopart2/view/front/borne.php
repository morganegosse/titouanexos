<?php
ob_start();
// avec ob start permet de stocker temporerement du html 
?>
    <div id="borne">
        <div id="amount">
            <div id="price" class="d-flex flex-row align-items-center">
                <h2 class="text-capitalize">price</h2>
                <p>2€</p>
            </div>

            <div id="litre" class="d-flex flex-row align-items-center">
                <h2 class="text-capitalize">litres</h2>
                <p>2</p>
            </div>

            <div id="priceLitre" class="d-flex flex-row align-items-center w-100 justify-content-start">
                <h2 class="text-capitalize">price 1L</h2>
                <p>2€</p>
            </div>
        </div>
        <form action="#" method="post" class="d-flex flex-row justify-content-around">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="clientFuel" id="clientFuel" value="1" >
                <label class="form-check-label" for="clientFuel-1">
                    essence 1
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="clientFuel" id="clientFuel" value="2" >
                <label class="form-check-label" for="clientFuel-2">
                    essence 2
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="clientFuel" id="clientFuel" value="3" >
                <label class="form-check-label" for="clientFuel-3">
                    essence 3
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="clientFuel" id="clientFuel" value="4" >
                <label class="form-check-label" for="clientFuel-4">
                    essence 4
                </label>
            </div>

            <div id="clientFormSubmit">
                <input type="submit" name="cardMethod" class="btn btn-primary text-capitalize" value="card">
                <input type="submit" name="moneyMethod" class="btn btn-primary text-capitalize" value="money">
            </div>
        </form>
    </div>
    <?php
    $content = ob_get_clean();
    // $content sera = à tout mon html qui entre get star et get clean; get clean permet de supprimer a la fin tout ce qu'il a stocker.c'est stocker dans $content.
        // ram = donnée enregistrer de maniere éphemere sur mon ordi.
        // ob : c'est un tampon de donnée qui va etre stocker et ob get clean sert à le recupérer et le supprimer ensuite pour libérer d el'espace 
        ?>