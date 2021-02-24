<?php session_start(); 
if (isset($_POST['submit']) && ! empty($_POST['submit'])) {
  $_SESSION['tc_ref']=$_POST['tc_ref'];
  $_SESSION['at_ref']=$_POST['at_ref'];
  $_SESSION['page_ref']=$_POST['page_ref'];

  $_SESSION['tc_appendices']=$_POST['tc_appendices'];
  $_SESSION['at_appendices']=$_POST['at_appendices'];
  $_SESSION['page_appendices']=$_POST['page_appendices'];

  $_SESSION['deadline']=$_POST['deadline'];

  $_SESSION['originator_fname'] = $_POST['originator_fname'];
  $_SESSION['originator_mname'] = $_POST['originator_mname'];
  $_SESSION['originator_lname'] = $_POST['originator_lname'];

  $_SESSION['supervisor_fname'] = $_POST['supervisor_fname'];
  $_SESSION['supervisor_mname'] = $_POST['supervisor_mname'];
  $_SESSION['supervisor_lname'] = $_POST['supervisor_lname'];
}
?>
<html>
    <head>
        <title></title>
    </head>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
            }
    </style>
    <body>
        <form method="POST" action="add.php" name="disp">
        <table class="center" border="1" cellspacing="0" cellpadding="2" style="width: 50%">
            <colgroup>
                <col style="width: 100px">
                <col style="width: 375px">
                <col style="width: 125px">
                <col style="width: 25px">
                <col style="width: 25px">
                <col style="width: 25px">
            </colgroup>
            <thread>
                <tr>
                    <th rowspan="4"><img src="https://d3p2qewzsoh75c.cloudfront.net/uploads/conferences/logo/200/baguio_general_hospital_and_medical_center_department_of_pediatrics_1514408711.jpg" alt="Image" width="100" height="100"></th>
                    <th colspan="5"><span style="font-weight:bold">Republic of the Philippines<br>Department of Health<br>BAGUIO GENERAL HOSPITAL AND MEDICAL CENTER<br>Baguio City</th>
                </tr>
                <tr>
                    <td rowspan="3"><span style="font-weight:bold">Professional Education Training and Research Office</span><br><span style="font-weight:bold">Research Technical Review Notification</span></td>
                    <td>Doc. No.:</td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td>Rev. No.</td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td>Effectivity Date:</td>
                    <td colspan="3"></td>
                </tr>
            </thread>
            </table>
            <br>
            <table class="center" border="1" cellspacing="0" cellpadding="2">
                <colgroup>
                    <col style="width: 225px; background-color: #C5E0B3">
                    <col style="width: 25px">
                    <col style="width: 150px; background-color: #C5E0B3">
                    <col style="width: 25px">
                </colgroup>
                <thread>
                    <tr>
                        <td><span style="font-weight:bold">NAME OF INVESTIGATOR:</span></td>
                        <td colspan="3"><?php echo "<label>".$_SESSION['fname']." ".$_SESSION['mname']." ".$_SESSION['lname']."</label>" ?></td>
                    </tr>
                    <tr>
                        <td><span style="font-weight:bold">TITLE OF RESEARCH:</span></td>
                        <td colspan="3"><?php echo "<label>".$_SESSION['research_title']."<label>" ?></td>
                    </tr>
                    <tr>
                        <td><span style="font-weight:bold">PROTOCOL VERSION:</span></td>
                        <td><?php echo "<label>".$_SESSION['protocol_ver']."<label>" ?></td>
                        <td><span style="font-weight:bold">VERSION DATE:</span></td>
                        <td><?php echo "<label>".$_SESSION['ver_date']."<label>" ?></td>
                    </tr>
                    <tr>
                        <td><span style="font-weight:bold">MEETING DATE:</span></td>
                        <td><?php echo "<label>".$_SESSION['meeting_date']."<label>" ?></td>
                        <td><span style="font-weight:bold">TRB DECISION:</span></b></td>
                        <td><?php echo "<label>".$_SESSION['trb_decision']."<label>" ?></td>
                    </tr>
                    <tr>
                        <td colspan="4">Details of action required from the </b><i>investigator</i></td>
                    </tr>
                </thread>    
            </table>
            <br>
            <table class="center" border="1" cellspacing="0" cellpadding="2"> 
                <tr>
                    <th>SECTION</th>
                    <th>TRB COMMENTS</th>
                    <th>ACTION TAKEN BY PROPONENT</th>
                    <th>PAGE</th>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><?php echo "<label>".$_SESSION['tc_title']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_title']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_title']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Abstract</td>
                    <td><?php echo "<label>".$_SESSION['tc_abs']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_abs']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_abs']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Introduction</td>
                    <td><?php echo "<label>".$_SESSION['tc_intro']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_intro']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_intro']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Review of Related Literature</td>
                    <td><?php echo "<label>".$_SESSION['tc_revOfLit']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_revOfLit']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_revOfLit']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Objectives</td>
                    <td><?php echo "<label>".$_SESSION['tc_obj']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_obj']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_obj']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Signifiance of the Study</td>
                    <td><?php echo "<label>".$_SESSION['tc_sigOfTheStudy']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_sigOfTheStudy']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_sigOfTheStudy']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Scope and Delimitation</td>
                    <td><?php echo "<label>".$_SESSION['tc_scopeDelim']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_scopeDelim']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_scopeDelim']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Limitation of the Study</td>
                    <td><?php echo "<label>".$_SESSION['tc_limitOfStudy']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_limitOfStudy']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_limitOfStudy']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Conceptual Framework</td>
                    <td><?php echo "<label>".$_SESSION['tc_conFWork']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_conFWork']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_conFWork']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Operational Definition</td>
                    <td><?php echo "<label>".$_SESSION['tc_opDefinition']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_opDefinition']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_opDefinition']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Study Design</td>
                    <td><?php echo "<label>".$_SESSION['tc_studyDesign']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_studyDesign']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_studyDesign']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Population of the Study</td>
                    <td><?php echo "<label>".$_SESSION['tc_popOfStudy']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_popOfStudy']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_popOfStudy']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Materials and Methods</td>
                    <td><?php echo "<label>".$_SESSION['tc_matMethods']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_matMethods']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_matMethods']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Safety and Efficacy (for Clinical Trials)</td>
                    <td><?php echo "<label>".$_SESSION['tc_safetyEfficacy']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_safetyEfficacy']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_safetyEfficacy']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Algorithm of the Study</td>
                    <td><?php echo "<label>".$_SESSION['tc_algOfStudy']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_algOfStudy']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_algOfStudy']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Statistical Analysis</td>
                    <td><?php echo "<label>".$_SESSION['tc_statAnalysis']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_statAnalysis']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_statAnalysis']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Dummy Tables</td>
                    <td><?php echo "<label>".$_SESSION['tc_dummyTables']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_dummyTables']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_dummyTables']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Ethical Considerations</td>
                    <td><?php echo "<label>".$_SESSION['tc_ethicalCon']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_ethicalCon']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_ethicalCon']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Budget</td>
                    <td><?php echo "<label>".$_SESSION['tc_budget']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_budget']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_budget']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Timetable</td>
                    <td><?php echo "<label>".$_SESSION['tc_timetable']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_timetable']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_timetable']."<label>" ?></td>
                </tr>
                <tr>
                    <td>References</td>
                    <td><?php echo "<label>".$_SESSION['tc_ref']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_ref']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_ref']."<label>" ?></td>
                </tr>
                <tr>
                    <td>Appendices</td>
                    <td><?php echo "<label>".$_SESSION['tc_appendices']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['at_appendices']."<label>" ?></td>
                    <td><?php echo "<label>".$_SESSION['page_appendices']."<label>" ?></td>
                </tr>
                <tr>
                    <td colspan="4"><br><b>Deadline for Submission:</b>
                        <?php
                            echo "<label>".$_SESSION['deadline']."<label>";
                            ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <?php
                            echo "<label><b>ORIGINATOR: </b>".$_SESSION['originator_fname']." ".$_SESSION['originator_mname']." ".$_SESSION['originator_lname']."<label>";
                            ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <?php
                            echo "<label><b>SUPERVISOR: </b>".$_SESSION['supervisor_fname']." ".$_SESSION['supervisor_mname']." ".$_SESSION['supervisor_lname']."<label>";
                            ?>
                    </td>
                </tr>
            </table>
            <div class="row">
        <input type="submit" name="submit" value="Submit" style="width: 23%">
        <input type="button" value="Back" onclick="history.go(-1)" style="width: 23%;background-color: red; color: white">
      </div>
        </form>
    </body>
</html>