<?php
session_start();

if (isset($_POST['submit']) && ! empty($_POST['submit'])) {
  $_SESSION['tc_statAnalysis']=$_POST['tc_statAnalysis'];
  $_SESSION['at_statAnalysis']=$_POST['at_statAnalysis'];
  $_SESSION['page_statAnalysis']=$_POST['page_statAnalysis'];

  $_SESSION['tc_dummyTables']=$_POST['tc_dummyTables'];
  $_SESSION['at_dummyTables']=$_POST['at_dummyTables'];
  $_SESSION['page_dummyTables']=$_POST['page_dummyTables'];

  $_SESSION['tc_ethicalCon']=$_POST['tc_ethicalCon'];
  $_SESSION['at_ethicalCon']=$_POST['at_ethicalCon'];
  $_SESSION['page_ethicalCon']=$_POST['page_ethicalCon'];

  $_SESSION['tc_budget']=$_POST['tc_budget'];
  $_SESSION['at_budget']=$_POST['at_budget'];
  $_SESSION['page_budget']=$_POST['page_budget'];
  
  $_SESSION['tc_timetable']=$_POST['tc_timetable'];
  $_SESSION['at_timetable']=$_POST['at_timetable'];
  $_SESSION['page_timetable']=$_POST['page_timetable'];
}
?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <form method="POST" action="disp.php" name="form6">
    <div class="container">
      <div style="text-align: center;"><h2>Section</h2></div>
      <div>Note: Type "none" if theres no comments or actions taken.</div>
      <hr style>
      <div class="row">
        <div class="col-25">
          <h2>References</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_ref" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_ref" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_ref" >
        </div>
      </div>
      <hr style="width: 100%">
      <div class="row">
        <div class="col-25">
          <h2>Appendices</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_appendices" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_appendices" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_appendices" >
        </div>
      </div>
      <hr style="width: 100%">
      <div class="row">
          <div class="col-25" style="width: 35%">
            <label>Deadline for Submission:</label>
          </div>
          <div class="col-75" style="width: 35%">
            <input type="date" name="deadline" required>
          </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>ORIGINATOR:</label>
        </div>
        <div class="col-75" style="width: 25%">
          <input type="text" id="originator_fname" name="originator_fname" placeholder="First name" required>
        </div>
        <div class="col-75" style="width: 25%">
          <input type="text" id="originator_mname" name="originator_mname" placeholder="Middle name" required>
        </div>
        <div class="col-75" style="width: 25%">
          <input type="text" id="originator_lname" name="originator_lname" placeholder="Last name" required>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>SUPERVISOR:</label>
        </div>
        <div class="col-75" style="width: 25%">
          <input type="text" id="supervisor_fname" name="supervisor_fname" placeholder="First name" required>
        </div>
        <div class="col-75" style="width: 25%">
          <input type="text" id="supervisor_mname" name="supervisor_mname" placeholder="Middle name" required>
        </div>
        <div class="col-75" style="width: 25%">
          <input type="text" id="supervisor_lname" name="supervisor_lname" placeholder="Last name" required>
        </div>
      </div>
      <hr style="width:100%">
      <div class="row">
        <input type="submit" name="submit" value="Submit" style="width: 23%">
        <input type="button" value="Back" onclick="history.go(-1)" style="width: 23%;background-color: red; color: white">
      </div>
    </div>
  </form>
</body>
</html>