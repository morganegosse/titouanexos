
        <div class="d-flex flex-row justify-content-around">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-capitalize">param reduction</h3>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="reductionClient">client ayant la reduction</label>
                            <input type="number" class="form-control" id="reductionClient" name="reductionClient"
                                   min="1">
                        </div>
                        <div class="form-group">
                            <label for="tauxReduction">taux de la reduction en %</label>
                            <input type="number" class="form-control" id="tauxReduction" name="tauxReduction" min="0">
                        </div>
                        <input type="submit" class="btn btn-primary text-capitalize" name="reductionSubmit"
                               value="ajouter / modifier"></input>
                    </form>
                </div>
            </div>