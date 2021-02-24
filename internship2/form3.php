<?php
session_start();

if (isset($_POST['submit']) && ! empty($_POST['submit'])) {
  $_SESSION['tc_title']=$_POST['tc_title'];
  $_SESSION['at_title']=$_POST['at_title'];
  $_SESSION['page_title']=$_POST['page_title'];

  $_SESSION['tc_abs']=$_POST['tc_abs'];
  $_SESSION['at_abs']=$_POST['at_abs'];
  $_SESSION['page_abs']=$_POST['page_abs'];

  $_SESSION['tc_intro']=$_POST['tc_intro'];
  $_SESSION['at_intro']=$_POST['at_intro'];
  $_SESSION['page_intro']=$_POST['page_intro'];

  $_SESSION['tc_revOfLit']=$_POST['tc_revOfLit'];
  $_SESSION['at_revOfLit']=$_POST['at_revOfLit'];
  $_SESSION['page_revOfLit']=$_POST['page_revOfLit'];
  
  $_SESSION['tc_obj']=$_POST['tc_obj'];
  $_SESSION['at_obj']=$_POST['at_obj'];
  $_SESSION['page_obj']=$_POST['page_obj'];
}
?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <form method="POST" action="form4.php" name="form3">
    <div class="container">
      <div style="text-align: center;"><h2>Section</h2></div>
      <div>Note: Type "none" if theres no comments or actions taken.</div>
      <div class="row">
        <div class="col-25">
          <h2>Significance of the Study</h2>
        </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>TRB Comments:</label>
          </div>
          <div class="col-75">
            <textarea name="tc_sigOfTheStudy" placeholder="Enter comments"required></textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>Actions Taken by Proponents:</label>
          </div>
          <div class="col-75">
            <textarea name="at_sigOfTheStudy" placeholder="Enter actions taken"required></textarea>
          </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label>Page:</label>
          </div>
          <div class="col-75" style="width:10%">
            <input type="number" name="page_sigOfTheStudy">
          </div>
      </div>

    <hr>
    
      <div class="row">
        <div class="col-25">
          <h2>Scope and Delimitation</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_scopeDelim" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_scopeDelim" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_scopeDelim" >
        </div>
      </div>

    <hr>
    
      <div class="row">
        <div class="col-25">
          <h2>Limitations of the Study</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_limitOfStudy" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_limitOfStudy" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_limitOfStudy" >
        </div>
      </div>

    <hr>
    
      <div class="row">
        <div class="col-25">
          <h2>Conceptual Framework</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_conFWork" placeholder="Enter comments"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_conFWork" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_conFWork" >
        </div>
      </div>

    <hr>
    
      <div class="row">
        <div class="col-25">
          <h2>Operational Definition</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>TRB Comments:</label>
        </div>
        <div class="col-75">
          <textarea name="tc_opDefinition" placeholder="Enter comments"required></textarea>
          </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label >Actions Taken by Proponents:</label>
        </div>
        <div class="col-75">
          <textarea name="at_opDefinition" placeholder="Enter actions taken"required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label>Page:</label>
        </div>
        <div class="col-75" style="width:10%">
          <input type="number" name="page_opDefinition">
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