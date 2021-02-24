<?php
session_start();

if (isset($_POST['submit']) && ! empty($_POST['submit'])) {
  $_SESSION['tc_sigOfTheStudy']=$_POST['tc_sigOfTheStudy'];
  $_SESSION['at_sigOfTheStudy']=$_POST['at_sigOfTheStudy'];
  $_SESSION['page_sigOfTheStudy']=$_POST['page_sigOfTheStudy'];

  $_SESSION['tc_scopeDelim']=$_POST['tc_scopeDelim'];
  $_SESSION['at_scopeDelim']=$_POST['at_scopeDelim'];
  $_SESSION['page_scopeDelim']=$_POST['page_scopeDelim'];

  $_SESSION['tc_limitOfStudy']=$_POST['tc_limitOfStudy'];
  $_SESSION['at_limitOfStudy']=$_POST['at_limitOfStudy'];
  $_SESSION['page_limitOfStudy']=$_POST['page_limitOfStudy'];

  $_SESSION['tc_conFWork']=$_POST['tc_conFWork'];
  $_SESSION['at_conFWork']=$_POST['at_conFWork'];
  $_SESSION['page_conFWork']=$_POST['page_conFWork'];

  $_SESSION['tc_opDefinition']=$_POST['tc_opDefinition'];
  $_SESSION['at_opDefinition']=$_POST['at_opDefinition'];
  $_SESSION['page_opDefinition']=$_POST['page_opDefinition'];
}
?>

<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <form method="POST" action="form5.php" name="form4">
    <div class="container">
      <div style="text-align: center;"><h2>Section</h2></div>
      <div>Note: Type "none" if theres no comments or actions taken.</div>
      <hr style>
      <div class="row">
        <div class="col-25">
          <h2>Study Design</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>TRB Comments:</label>
          </div>
          <div class="col-75">
            <textarea name="tc_studyDesign" placeholder="Enter comments"required></textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>Actions Taken by Proponents:</label>
          </div>
          <div class="col-75">
            <textarea name="at_studyDesign" placeholder="Enter actions taken"required></textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>Page:</label>
          </div>
          <div class="col-75" style="width:10%">
            <input type="number" name="page_studyDesign"  >
          </div>
      </div>
    
    <hr>
    
      <div class="row">
        <div class="col-25">
          <h2>Population of the Study</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_popOfStudy" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_popOfStudy" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_popOfStudy"  >
        </div>
      </div>
    
    <hr>
    
      <div class="row">
        <div class="col-25">
          <h2>Materials and Methods</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_matMethods" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_matMethods" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_matMethods" >
        </div>
      </div>
    
    <hr>
    
      <div class="row">
        <div class="col-25">
          <h2>Safety and Efficacy (for Clinical Trials)</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_safetyEfficacy" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_safetyEfficacy" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_safetyEfficacy" >
        </div>
      </div>
    
    <hr>
    
      <div class="row">
        <div class="col-25">
          <h2>Algorithm of the Study</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_algOfStudy" placeholder="Enter comments"required></textarea>
          </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label >Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_algOfStudy" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_algOfStudy" >
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