<header>
  <div class="container-fluid">
    <h1>LaGuardia Community College</h1>
    <!-- select group started -->
    <div class="row">
      <div class="col-sm-12 select-group">
        <div class="row">
          <div class="col-sm-3">
              <label>Project ID: </label>
            <select onchange="showData(this.value)">
              <option value="n">Select Project ID</option>
              <?php
                $sql = mysqli_query($op->getConn(), "SELECT Proj_ID FROM tbl_project GROUP BY Proj_ID");
                while ($row = $sql->fetch_assoc()){
                  echo "<option value='".$row['Proj_ID']."'>" . $row['Proj_ID'] . "</option>";
                }
              ?>
            </select>
          </div>
          <div class="col-sm-3">
              <label>Project Name: </label>
            <select disabled>
              <option value="new">Select Project Name</option>
            </select>
          </div>
          <div class="col-sm-3">
              <label>Project Building: </label>
            <select disabled>
              <option value="new">Select Project Building</option>
            </select>
          </div>
          <div class="col-sm-3">
              <label>Project Status: </label>
            <select disabled>
              <option value="new">Select Project Status</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <!-- select group ended -->
  </div>
</header>