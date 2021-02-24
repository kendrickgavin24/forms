<?php session_start(); session_destroy(); session_start(); ?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <form method="POST" action="form2.php" name="form1">
    <div class="container">
      <div class="row">
        <h2 align="center" style=" width: 100%">Professional Education Training and Research Office<br>Research Technical Review Notification</h2>
      </div>
      <hr style="width: 100%">
      <div class="row">
        <div class="col-25">
          <label>Name of Investigator:</label>
        </div>
        <div class="col-75" style="width: 25%">
          <input type="text" id="fname" name="fname" placeholder="First name" required>
        </div>
        <div class="col-75" style="width: 25%">
          <input type="text" id="mname" name="mname" placeholder="Middle name" required>
        </div>
        <div class="col-75" style="width: 25%">
          <input type="text" id="lname" name="lname" placeholder="Last name" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="research_title">Title of Research:</label>
        </div>
        <div class="col-75">
          <input type="text" id="research_title" name="research_title" placeholder="Enter research title" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="protocol_ver">Protocol Version:</label>
        </div>
        <div class="col-75">
          <input type="number" id="protocol_ver" name="protocol_ver" placeholder="Enter protocol number" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="ver_date">Version Date:</label>
        </div>
        <div class="col-75">
          <input type="date" id="ver_date" name="ver_date" placeholder="Enter version date" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="meeting_date">Meeting Date:</label>
        </div>
        <div class="col-75">
          <input type="date" id="meeting_date" name="meeting_date" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="trb_decision">TRB Decision</label>
        </div>
        <div class="col-75">
        <select id="trb_decision" name="trb_decision" required>
          <option value="">-SELECT-</option>
          <option value="Approved">Approved</option>
          <option value="For Modification">For Modification</option>
          <option value="Disapproved">Disapproved</option>
        </select>
        </div>
      </div>
      <hr style="width: 100%">
      <div class="row">
        <br>
        <input type="submit" name="submit" id="submit" value="Next" style="width: 23%">
      </div>
    </div>
  </form>
</body>
</html>