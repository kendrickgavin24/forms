<?php 
session_start(); 

if (isset($_POST['submit']) && ! empty($_POST['submit'])) {
  $_SESSION['fname'] = $_POST['fname'];
  $_SESSION['mname'] = $_POST['mname'];
  $_SESSION['lname'] = $_POST['lname'];

  $_SESSION['research_title'] = $_POST['research_title'];
  $_SESSION['protocol_ver'] = $_POST['protocol_ver'];
  $_SESSION['ver_date'] = $_POST['ver_date'];
  $_SESSION['meeting_date'] = $_POST['meeting_date'];
  $_SESSION['trb_decision'] = $_POST['trb_decision'];
}
?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <form method="POST" action="form3.php" name="form2">
    <div class="container">
      <div style="text-align: center;"><h2>Section</h2></div>
      <div>Note: Type "none" if theres no comments or actions taken.</div>
      <hr>
      <div class="row">
        <div class="col-25">
          <h2>Title</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>TRB Comments:</label>
          </div>
          <div class="col-75">
            <textarea name="tc_title" placeholder="Enter comments"required></textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>Actions Taken by Proponents:</label>
          </div>
          <div class="col-75">
            <textarea name="at_title" placeholder="Enter actions taken"required></textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>Page:</label>
          </div>
          <div class="col-75" style="width:10%">
            <input type="number" name="page_title">
          </div>
      </div>
      <hr style="width:100%">
    
      <div class="row">
        <div class="col-25">
          <h2>Abstract</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_abs" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_abs" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_abs">
        </div>
      </div>
      <hr style="width:100%">
    
      <div class="row">
        <div class="col-25">
          <h2>Introduction</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_intro" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_intro" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_intro">
        </div>
      </div>
      <hr style="width:100%">
    
      <div class="row">
        <div class="col-25">
          <h2>Review of Related Literature</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_revOfLit" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_revOfLit" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_revOfLit">
        </div>
      </div>
      <hr style="width:100%">
    
      <div class="row">
        <div class="col-25">
          <h2>Objectives</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_obj" placeholder="Enter comments"required></textarea>
          </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label >Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_obj" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_obj">
        </div>
      </div>
      <hr style="width: 100%">
      <div class="row">
        <input type="submit" name="submit" value="Next" style="width: 23%">
        <input type="button" value="Back" onclick="history.go(-1)" style="width: 23%;background-color: red; color: white">
      </div>
    </div>
  </form>
</body>
</html>