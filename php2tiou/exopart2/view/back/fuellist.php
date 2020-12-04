<div class="card">
                <div class="card-body">
                    <h3 class="card-title text-capitalize">fuel list</h3>
                    <div class="list-group">
                        <button class="list-group-item list-group-item-action" type="button" data-toggle="collapse"
                                data-target="#fuel-1" aria-expanded="false" aria-controls="fuel-1">
                            essence1
                        </button>
                        <div class="collapse" id="fuel-1">
                            <div class="card card-body">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label for="nameFuel-1">name</label>
                                        <input type="text" class="form-control" id="nameFuel-1" name="nameFuel-1"
                                               placeholder="name" value="1">
                                    </div>
                                    <div class="form-group">
                                        <label for="priceFuel-1">price</label>
                                        <input type="number" class="form-control" id="priceFuel-1"
                                               name="priceFuel-1" min="0"
                                               value="2">
                                    </div>
                                    <input type="submit" class="btn btn-primary" name="fuelUpdate-1" value="Modifier">
                                    <input type="submit" class="btn btn-danger" name="fuelDelete-1" value="Supprimer">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>