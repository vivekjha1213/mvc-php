<?php include('header.php') ?>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title mb-4">Select Data / Read Data</h2>
          <form action="." method="GET">
            <input type="hidden" name="action" value="select">
            <div class="form-group">
              <label for="city">City Name:</label>
              <input type="text" id="city" name="city" class="form-control" required>
            </div>
            <button class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title mb-4">Insert Data / Create Data</h2>
          <form action="." method="POST">
            <input type="hidden" name="action" value="insert">
            <div class="form-group">
              <label for="newcity">City Name:</label>
              <input type="text" id="newcity" name="city" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="countrycode">Country Code:</label>
              <input type="text" id="countrycode" name="countrycode" class="form-control" maxlength="3" required>
            </div>
            <div class="form-group">
              <label for="district">District:</label>
              <input type="text" id="district" name="district" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="population">Population:</label>
              <input type="text" id="population" name="population" class="form-control" required>
            </div>
            <button class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php include('status.php') ?>
</div>

<?php include('footer.php') ?>
