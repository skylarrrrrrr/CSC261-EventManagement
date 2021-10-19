<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>View Tables</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div style="float: right; margin-top: 30px;">
  <?php if(isset($_SESSION['username'])) { ?>
  <a href="logout.php">Logout of your User Account</a>
  <?php } else { ?>
  <a href="login.php">Login to your User Account</a>
  <?php } ?>
</div>
<div class="header-container" style="margin-top: 10px">
  <h2>Welcome</h2>
</div>

<div class="accordion" id="accordionExample" style="margin-top: 30px;">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Avaliable Space
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT * FROM Avaliable_Space");
          ?>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Event ID</th>
                <th scope="col">Spot ID</th>
                <?php if(isset($_SESSION['username'])) { ?>
                  <th scope="col" colspan="2"><em>Modify</em></th>
                <?php } ?>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['Event_ID']; ?></td>
              <td><?php echo $row['Spot_ID']; ?></td>
              <?php if(isset($_SESSION['username'])) { ?>
                  <td><a href="as-edit.php?id=<?php echo $row['Event_ID']; ?>">Edit</a></td>
                  <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["Event_ID"]; ?>?')" href="as-delete.php?id=<?php echo $row['Event_ID']; ?>">Delete</a></td>
              <?php } ?>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
          <br>
            <?php if(isset($_SESSION['username'])) { ?>
            <a href="as-new.php">Add a new record</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

<!-- Second Table -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Available Spot
        </button>
      </h5>
    </div>
  
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT * FROM Avaliable_Spot");
          ?>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Spot ID</th>
                <th scope="col">Space ID</th>
                <th scope="col">Date</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <?php if(isset($_SESSION['username'])) { ?>
                  <th scope="col" colspan="2"><em>Modify</em></th>
                <?php } ?>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['Spot_ID']; ?></td>
              <td><?php echo $row['Space_ID']; ?></td>
              <td><?php echo $row['Date']; ?></td>
              <td><?php echo $row['Start']; ?></td>
              <td><?php echo $row['End']; ?></td>
              <?php if(isset($_SESSION['username'])) { ?>
                <td><a href="asp-edit.php?id=<?php echo $row['Spot_ID']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["Spot_ID"]; ?>?')" href="asp-delete.php?id=<?php echo $row['Spot_ID']; ?>">Delete</a></td>
              <?php } ?>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
          <br>
            <?php if(isset($_SESSION['username'])) { ?>
            <a href="asp-new.php">Add a new record</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<!-- Third Card -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Event Registration Details
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
          <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT * FROM Com_register");
          ?>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Event ID</th>
                <th scope="col">Registration Time</th>
                <?php if(isset($_SESSION['username'])) { ?>
                  <th scope="col" colspan="2"><em>Modify</em></th>
                <?php } ?>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['S_ID']; ?></td>
              <td><?php echo $row['Event_ID']; ?></td>
              <td><?php echo $row['RegisterTime']; ?></td>
              <?php if(isset($_SESSION['username'])) { ?>
                  <td><a href="cr-edit.php?id=<?php echo $row['ReservationID']; ?>">Edit</a></td>
                  <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["ReservationID"]; ?>?')" href="cr-delete.php?id=<?php echo $row['ReservationID']; ?>">Delete</a></td>
              <?php } ?>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
          <br>
            <?php if(isset($_SESSION['username'])) { ?>
            <a href="cr-new.php">Add a new record</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<!-- Fourth Card -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Approved Events
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT * FROM EventsApproved");
          ?>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Event ID</th>
                <th scope="col">Event Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Cost</th>
                <th scope="col">Audience Type</th>
                <th scope="col">Supervisor ID</th>
                <?php if(isset($_SESSION['username'])) { ?>
                  <th scope="col" colspan="2"><em>Modify</em></th>
                <?php } ?>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['E_ID']; ?></td>
              <td><?php echo $row['E_Name']; ?></td>
              <td><?php echo $row['Contact']; ?></td>
              <td><?php echo $row['Cost']; ?></td>
              <td><?php echo $row['Audience']; ?></td>
              <td><?php echo $row['Mgr_ID']; ?></td>
              <?php if(isset($_SESSION['username'])) { ?>
                <td><a href="ae-edit.php?id=<?php echo $row['E_ID']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["E_ID"]; ?>?')" href="ae-delete.php?id=<?php echo $row['E_ID']; ?>">Delete</a></td>
              <?php } ?>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
          <br>
            <?php if(isset($_SESSION['username'])) { ?>
            <a href="ae-new.php">Add a new record</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<!-- Fifth Card -->
  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Event Types
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT * FROM EventType");
          ?>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Type</th>
                <th scope="col">Event ID</th>
                <?php if(isset($_SESSION['username'])) { ?>
                  <th scope="col" colspan="2"><em>Modify</em></th>
                <?php } ?>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['E_type']; ?></td>
              <td><?php echo $row['Event_ID']; ?></td>
              <?php if(isset($_SESSION['username'])) { ?>
                <td><a href="et-edit.php?id=<?php echo $row['Event_ID']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["Event_ID"]; ?>?')" href="et-delete.php?id=<?php echo $row['Event_ID']; ?>">Delete</a></td>
              <?php } ?>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
          <br>
            <?php if(isset($_SESSION['username'])) { ?>
            <a href="et-new.php">Add a new record</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Organizations List
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT * FROM Organization");
          ?>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Organization ID</th>
                <th scope="col">Name</th>
                <th scope="col">Leader Name</th>
                <?php if(isset($_SESSION['username'])) { ?>
                  <th scope="col" colspan="2"><em>Modify</em></th>
                <?php } ?>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['O_ID']; ?></td>
              <td><?php echo $row['O_Name']; ?></td>
              <td><?php echo $row['LeaderName']; ?></td>
              <?php if(isset($_SESSION['username'])) { ?>
                <td><a href="o-edit.php?id=<?php echo $row['O_ID']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["O_ID"]; ?>?')" href="o-delete.php?id=<?php echo $row['O_ID']; ?>">Delete</a></td>
              <?php } ?>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
          <br>
            <?php if(isset($_SESSION['username'])) { ?>
            <a href="o-new.php">Add a new record</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<!-- Seventh Card -->
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          Organizations Sponsored Events List
        </button>
      </h5>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT * FROM Organize");
          ?>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Organization ID</th>
                <th scope="col">Event ID</th>
                <?php if(isset($_SESSION['username'])) { ?>
                  <th scope="col" colspan="2"><em>Modify</em></th>
                <?php } ?>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['O_ID']; ?></td>
              <td><?php echo $row['Event_ID']; ?></td>
              <?php if(isset($_SESSION['username'])) { ?>
                <td><a href="oz-edit.php?id=<?php echo $row['Event_ID']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["Event_ID"]; ?>?')" href="oz-delete.php?id=<?php echo $row['Event_ID']; ?>">Delete</a></td>
              <?php } ?>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
          <br>
            <?php if(isset($_SESSION['username'])) { ?>
            <a href="oz-new.php">Add a new record</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<!-- Eighth Card -->
  <div class="card">
    <div class="card-header" id="headingEight">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
          Participants List
        </button>
      </h5>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      <div class="card-body">
        <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT * FROM Participants");
          ?>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Student ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Initial</th>
                <th scope="col">Last Name</th>
                <th scope="col">Sex</th>
                <th scope="col">Year</th>
                <th scope="col">Email</th>
                <?php if(isset($_SESSION['username'])) { ?>
                  <th scope="col" colspan="2"><em>Modify</em></th>
                <?php } ?>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['StudentID']; ?></td>
              <td><?php echo $row['Fname']; ?></td>
              <td><?php echo $row['Minit']; ?></td>
              <td><?php echo $row['Lname']; ?></td>
              <td><?php echo $row['Sex']; ?></td>
              <td><?php echo $row['Year']; ?></td>
              <td><?php echo $row['Email']; ?></td>
              <?php if(isset($_SESSION['username'])) { ?>
                <td><a href="p-edit.php?id=<?php echo $row['StudentID']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["StudentID"]; ?>?')" href="p-delete.php?id=<?php echo $row['StudentID']; ?>">Delete</a></td>
              <?php } ?>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
          <br>
            <?php if(isset($_SESSION['username'])) { ?>
            <a href="p-new.php">Add a new record</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<!-- Nineth Card -->
  <div class="card">
    <div class="card-header" id="headingNine">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
          Spaces List
        </button>
      </h5>
    </div>
    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
      <div class="card-body">
        <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT * FROM Space");
          ?>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Space ID</th>
                <th scope="col">Campus</th>
                <th scope="col">Building</th>
                <th scope="col">Room</th>
                <th scope="col">Maxi Occupation</th>
                <?php if(isset($_SESSION['username'])) { ?>
                  <th scope="col" colspan="2"><em>Modify</em></th>
                <?php } ?>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['Space_ID']; ?></td>
              <td><?php echo $row['Campus']; ?></td>
              <td><?php echo $row['Building']; ?></td>
              <td><?php echo $row['Room']; ?></td>
              <td><?php echo $row['MaxiOccupation']; ?></td>
              <?php if(isset($_SESSION['username'])) { ?>
                <td><a href="sp-edit.php?id=<?php echo $row['Space_ID']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["Space_ID"]; ?>?')" href="sp-delete.php?id=<?php echo $row['Space_ID']; ?>">Delete</a></td>
              <?php } ?>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
          <br>
            <?php if(isset($_SESSION['username'])) { ?>
            <a href="sp-new.php">Add a new record</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<!-- Tenth Card -->
  <div class="card">
    <div class="card-header" id="headingTen">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
          Supervisors List
        </button>
      </h5>
    </div>
    <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
      <div class="card-body">
        <?php
          // connect to the database
          include('connect-db.php');
          // get results from database
          $result = mysqli_query($connection, "SELECT * FROM Users");
          ?>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">University ID</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Email</th>
                <?php if(isset($_SESSION['username'])) { ?>
                  <th scope="col" colspan="2"><em>Modify</em></th>
                <?php } ?>
              </tr>
            </thead>
          <?php
          // loop through results of database query, displaying them in the table
            while($row = mysqli_fetch_array( $result )) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['U_ID']; ?></td>
              <td><?php echo $row['Name']; ?></td>
              <td><?php echo $row['U_Department']; ?></td>
              <td><?php echo $row['Email']; ?></td>
              <?php if(isset($_SESSION['username'])) { ?>
                <td><a href="u-edit.php?id=<?php echo $row['U_ID']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete ID: <?php echo $row["U_ID"]; ?>?')" href="u-delete.php?id=<?php echo $row['U_ID']; ?>">Delete</a></td>
              <?php } ?>
            </tr>
          </tbody>
          <?php
        // close the loop
          }
        ?>
        </table>

        <div>
          <br>
            <?php if(isset($_SESSION['username'])) { ?>
            <a href="u-new.php">Add a new record</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

</div>

 <p style="margin-top: 10px;">Click <a href="index.php">Here</a> to go back to index page</p>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>


