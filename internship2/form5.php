<?php
session_start();

if (isset($_POST['submit']) && ! empty($_POST['submit'])) {
  $_SESSION['tc_studyDesign']=$_POST['tc_studyDesign'];
  $_SESSION['at_studyDesign']=$_POST['at_studyDesign'];
  $_SESSION['page_studyDesign']=$_POST['page_studyDesign'];

  $_SESSION['tc_popOfStudy']=$_POST['tc_popOfStudy'];
  $_SESSION['at_popOfStudy']=$_POST['at_popOfStudy'];
  $_SESSION['page_popOfStudy']=$_POST['page_popOfStudy'];

  $_SESSION['tc_matMethods']=$_POST['tc_matMethods'];
  $_SESSION['at_matMethods']=$_POST['at_matMethods'];
  $_SESSION['page_matMethods']=$_POST['page_matMethods'];

  $_SESSION['tc_safetyEfficacy']=$_POST['tc_safetyEfficacy'];
  $_SESSION['at_safetyEfficacy']=$_POST['at_safetyEfficacy'];
  $_SESSION['page_safetyEfficacy']=$_POST['page_safetyEfficacy'];
  
  $_SESSION['tc_algOfStudy']=$_POST['tc_algOfStudy'];
  $_SESSION['at_algOfStudy']=$_POST['at_algOfStudy'];
  $_SESSION['page_algOfStudy']=$_POST['page_algOfStudy'];
}
?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <form method="POST" action="form6.php" name="form5">
    <div class="container">
      <div style="text-align: center;"><h2>Section</h2></div>
      <div>Note: Type "none" if theres no comments or actions taken.</div>
      <hr style>
      <div class="row">
        <div class="col-25">
          <h2>Statistical Analysis</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>TRB Comments:</label>
          </div>
          <div class="col-75">
            <textarea name="tc_statAnalysis" placeholder="Enter comments"required></textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>Actions Taken by Proponents:</label>
          </div>
          <div class="col-75">
            <textarea name="at_statAnalysis" placeholder="Enter actions taken"required></textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>Page:</label>
          </div>
          <div class="col-75" style="width:10%">
            <input type="number" name="page_statAnalysis" >
          </div>
      </div>
    
    <hr>
      <div class="row">
        <div class="col-25">
          <h2>Dummy Tables</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_dummyTables" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_dummyTables" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_dummyTables" >
        </div>
      </div>
      <hr style="width: 100%">
      <div class="row">
        <div class="col-25">
          <h2>Ethical Considerations</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_ethicalCon" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_ethicalCon" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_ethicalCon" >
        </div>
      </div>
      <hr style="width: 100%">
      <div class="row">
        <div class="col-25">
          <h2>Budget</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_budget" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_budget" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_budget" >
        </div>
      </div>
      <hr style="width: 100%">
      <div class="row">
        <div class="col-25">
          <h2>Timetable</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_timetable" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_timetable" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_timetable" >
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