<?php include('header.php') ?>
<div class="container mt-5">
    <?php if ($results) { ?>
        <h2 class="mb-4">Update or Delete Data</h2>
        <div class="row">
            <?php foreach ($results as $result) {
                $id = $result['ID'];
                $city = $result['Name'];
                $countrycode = $result['CountryCode'];
                $district = $result['District'];
                $population = $result['Population'];
            ?>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <form class="update" action="." method="POST">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <div class="form-group">
                                    <label for="city-<?= $id ?>">City Name:</label>
                                    <input type="text" id="city-<?= $id ?>" 
                                        name="city" value="<?= $city ?>" 
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="countrycode-<?= $id ?>">Country Code:</label>
                                    <input type="text" id="countrycode-<?= $id ?>" 
                                        name="countrycode" value="<?= $countrycode ?>" 
                                        class="form-control" maxlength="3" required>
                                </div>
                                <div class="form-group">
                                    <label for="district-<?= $id ?>">District:</label>
                                    <input type="text" id="district-<?= $id ?>" 
                                        name="district" value="<?= $district ?>" 
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="population-<?= $id ?>">Population:</label>
                                    <input type="text" id="population-<?= $id ?>" 
                                        name="population" value="<?= $population ?>" 
                                        class="form-control" required>
                                </div>
                                <button class="btn btn-primary">Update</button>
                            </form>
                            <form class="delete mt-3" action="." method="POST">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else { ?>
        <p class="text-center">Sorry, no results.</p>
    <?php } ?>
    <div class="text-center mt-4">
        <a href="." class="btn btn-secondary">Back to Request Forms</a>
    </div>
</div>
<?php include('status.php') ?>
<?php include('footer.php') ?>
