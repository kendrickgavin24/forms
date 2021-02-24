<?php
session_start();
include_once("config.php");

  if (isset($_POST['submit']) && ! empty($_POST['submit'])) {

    

    $fname = mysqli_real_escape_string($mysqli, $_SESSION['fname']);
    $mname = mysqli_real_escape_string($mysqli, $_SESSION['mname']);
    $lname = mysqli_real_escape_string($mysqli, $_SESSION['lname']);

    $research_title = mysqli_real_escape_string($mysqli, $_SESSION['research_title']);
    $protocol_ver = mysqli_real_escape_string($mysqli, $_SESSION['protocol_ver']);
    $ver_date = mysqli_real_escape_string($mysqli, $_SESSION['ver_date']);
    $meeting_date = mysqli_real_escape_string($mysqli, $_SESSION['meeting_date']);
    $trb_decision  = mysqli_real_escape_string($mysqli, $_SESSION['trb_decision']);

    $tc_title= mysqli_real_escape_string($mysqli, $_SESSION['tc_title']);
    $tc_abs= mysqli_real_escape_string($mysqli, $_SESSION['tc_abs']);
    $tc_intro= mysqli_real_escape_string($mysqli, $_SESSION['tc_intro']);
    $tc_revOfLit= mysqli_real_escape_string($mysqli, $_SESSION['tc_revOfLit']);
    $tc_obj= mysqli_real_escape_string($mysqli, $_SESSION['tc_obj']);
    $tc_sigOfTheStudy= mysqli_real_escape_string($mysqli, $_SESSION['tc_sigOfTheStudy']);
    $tc_scopeDelim= mysqli_real_escape_string($mysqli, $_SESSION['tc_scopeDelim']);
    $tc_limitOfStudy= mysqli_real_escape_string($mysqli, $_SESSION['tc_limitOfStudy']);
    $tc_conFWork= mysqli_real_escape_string($mysqli, $_SESSION['tc_conFWork']);
    $tc_opDefinition= mysqli_real_escape_string($mysqli, $_SESSION['tc_opDefinition']);
    $tc_studyDesign= mysqli_real_escape_string($mysqli, $_SESSION['tc_studyDesign']);
    $tc_popOfStudy= mysqli_real_escape_string($mysqli, $_SESSION['tc_popOfStudy']);
    $tc_matMethods= mysqli_real_escape_string($mysqli, $_SESSION['tc_matMethods']);
    $tc_safetyEfficacy= mysqli_real_escape_string($mysqli, $_SESSION['tc_safetyEfficacy']);
    $tc_algOfStudy= mysqli_real_escape_string($mysqli, $_SESSION['tc_algOfStudy']);
    $tc_statAnalysis= mysqli_real_escape_string($mysqli, $_SESSION['tc_statAnalysis']);
    $tc_dummyTables= mysqli_real_escape_string($mysqli, $_SESSION['tc_dummyTables']);
    $tc_ethicalCon= mysqli_real_escape_string($mysqli, $_SESSION['tc_ethicalCon']);
    $tc_budget= mysqli_real_escape_string($mysqli, $_SESSION['tc_budget']);
    $tc_timetable= mysqli_real_escape_string($mysqli, $_SESSION['tc_timetable']);
    $tc_ref= mysqli_real_escape_string($mysqli, $_SESSION['tc_ref']);
    $tc_appendices= mysqli_real_escape_string($mysqli, $_SESSION['tc_appendices']);

    $at_title= mysqli_real_escape_string($mysqli, $_SESSION['at_title']);
    $at_abs= mysqli_real_escape_string($mysqli, $_SESSION['at_abs']);
    $at_intro= mysqli_real_escape_string($mysqli, $_SESSION['at_intro']);
    $at_revOfLit= mysqli_real_escape_string($mysqli, $_SESSION['at_revOfLit']);
    $at_obj= mysqli_real_escape_string($mysqli, $_SESSION['at_obj']);
    $at_sigOfTheStudy= mysqli_real_escape_string($mysqli, $_SESSION['at_sigOfTheStudy']);
    $at_scopeDelim= mysqli_real_escape_string($mysqli, $_SESSION['at_scopeDelim']);
    $at_limitOfStudy= mysqli_real_escape_string($mysqli, $_SESSION['at_limitOfStudy']);
    $at_conFWork= mysqli_real_escape_string($mysqli, $_SESSION['at_conFWork']);
    $at_opDefinition= mysqli_real_escape_string($mysqli, $_SESSION['at_opDefinition']);
    $at_studyDesign= mysqli_real_escape_string($mysqli, $_SESSION['at_studyDesign']);
    $at_popOfStudy= mysqli_real_escape_string($mysqli, $_SESSION['at_popOfStudy']);
    $at_matMethods= mysqli_real_escape_string($mysqli, $_SESSION['at_matMethods']);
    $at_safetyEfficacy= mysqli_real_escape_string($mysqli, $_SESSION['at_safetyEfficacy']);
    $at_algOfStudy= mysqli_real_escape_string($mysqli, $_SESSION['at_algOfStudy']);
    $at_statAnalysis= mysqli_real_escape_string($mysqli, $_SESSION['at_statAnalysis']);
    $at_dummyTables= mysqli_real_escape_string($mysqli, $_SESSION['at_dummyTables']);
    $at_ethicalCon= mysqli_real_escape_string($mysqli, $_SESSION['at_ethicalCon']);
    $at_budget= mysqli_real_escape_string($mysqli, $_SESSION['at_budget']);
    $at_timetable= mysqli_real_escape_string($mysqli, $_SESSION['at_timetable']);
    $at_ref= mysqli_real_escape_string($mysqli, $_SESSION['at_ref']);
    $at_appendices= mysqli_real_escape_string($mysqli, $_SESSION['at_appendices']);

    $page_title= mysqli_real_escape_string($mysqli, $_SESSION['page_title']);
    $page_abs= mysqli_real_escape_string($mysqli, $_SESSION['page_abs']);
    $page_intro= mysqli_real_escape_string($mysqli, $_SESSION['page_intro']);
    $page_revOfLit= mysqli_real_escape_string($mysqli, $_SESSION['page_revOfLit']);
    $page_obj= mysqli_real_escape_string($mysqli, $_SESSION['page_obj']);
    $page_sigOfTheStudy= mysqli_real_escape_string($mysqli, $_SESSION['page_sigOfTheStudy']);
    $page_scopeDelim= mysqli_real_escape_string($mysqli, $_SESSION['page_scopeDelim']);
    $page_limitOfStudy= mysqli_real_escape_string($mysqli, $_SESSION['page_limitOfStudy']);
    $page_conFWork= mysqli_real_escape_string($mysqli, $_SESSION['page_conFWork']);
    $page_opDefinition= mysqli_real_escape_string($mysqli, $_SESSION['page_opDefinition']);
    $page_studyDesign= mysqli_real_escape_string($mysqli, $_SESSION['page_studyDesign']);
    $page_popOfStudy= mysqli_real_escape_string($mysqli, $_SESSION['page_popOfStudy']);
    $page_matMethods= mysqli_real_escape_string($mysqli, $_SESSION['page_matMethods']);
    $page_safetyEfficacy= mysqli_real_escape_string($mysqli, $_SESSION['page_safetyEfficacy']);
    $page_algOfStudy= mysqli_real_escape_string($mysqli, $_SESSION['page_algOfStudy']);
    $page_statAnalysis= mysqli_real_escape_string($mysqli, $_SESSION['page_statAnalysis']);
    $page_dummyTables= mysqli_real_escape_string($mysqli, $_SESSION['page_dummyTables']);
    $page_ethicalCon= mysqli_real_escape_string($mysqli, $_SESSION['page_ethicalCon']);
    $page_budget= mysqli_real_escape_string($mysqli, $_SESSION['page_budget']);
    $page_timetable= mysqli_real_escape_string($mysqli, $_SESSION['page_timetable']);
    $page_ref= mysqli_real_escape_string($mysqli, $_SESSION['page_ref']);
    $page_appendices= mysqli_real_escape_string($mysqli, $_SESSION['page_appendices']);

//investigator table
    $qry1 = "INSERT INTO investigator(investigator_fname, investigator_mname, investigator_lname) VALUES('$fname','$mname','$lname')";
    $result1 = mysqli_query($mysqli, $qry1);
//investigator_id FK
    $sql = "SELECT investigator_id FROM investigator WHERE investigator_id=(SELECT MAX(investigator_id) FROM investigator)";
    $investigator_id = "";
    $res = mysqli_query($mysqli, $sql);
    while ($row = mysqli_fetch_array($res)) {
      $investigator_id = $row['investigator_id'];
    }
//research technical review notification
    $qry2 = "INSERT INTO rtrn(investigator_id, research_title, protocol_ver, ver_date, meeting_date, trb_decision) VALUES('$investigator_id','$research_title', '$protocol_ver', '$ver_date', '$meeting_date', '$trb_decision')";
    $result2 = mysqli_query($mysqli, $qry2);
//trb comments
    $qry3 = "INSERT INTO trb_comments(tc_title, tc_abs, tc_intro, tc_revOfLit, tc_obj, tc_sigOfTheStudy, tc_scopeDelim, tc_limitOfStudy, tc_conFWork, tc_opDefinition, tc_studyDesign, tc_popOfStudy, tc_matMethods, tc_safetyEfficacy, tc_algOfStudy, tc_statAnalysis, tc_dummyTables, tc_ethicalCon, tc_budget, tc_timetable, tc_ref, tc_appendices) VALUES ('$tc_title','$tc_abs','$tc_intro','$tc_revOfLit','$tc_obj'tc_obj','$tc_sigOfTheStudy','$tc_scopeDelim','$tc_limitOfStudy','$tc_conFWork'tc_conFWork','$tc_opDefinition','$tc_studyDesign','$tc_popOfStudy','$tc_matMethods','$tc_safetyEfficacy','$tc_algOfStudy','$tc_statAnalysis','$tc_dummyTables','$tc_ethicalCon','$tc_budget','$tc_timetable','$tc_ref','$tc_appendices');";
    $result3 = mysqli_query($mysqli, $qry3);
//section_id FK
    $sql2 = "INSERT INTO trb_comments(section_id) VALUES (2001),(2002),(2003),(2004),(2005),(2006),(2007),(2008),(2009),(2010),(2011),(2012),(2013),(2014),(2015),(2016),(2017),(2018),(2019),(2020),(2021),(2022)";
    $result4 = mysqli_query($mysqli, $sql2);
//action taken
    $qry4 = "INSERT INTO at(at_title,at_abs,at_intro,at_revOfLit,at_obj,at_sigOfTheStudy,at_scopeDelim,at_limitOfStudy,at_conFWork,at_opDefinition,at_studyDesign,at_popOfStudy,at_matMethods,at_safetyEfficacy,at_algOfStudy,at_statAnalysis,at_dummyTables,at_ethicalCon,at_budget,at_timetable,at_ref,at_appendices) VALUES ('$at_title','$at_abs','$at_intro','$at_revOfLit','$at_obj'at_obj','$at_sigOfTheStudy','$at_scopeDelim','$at_limitOfStudy','$at_conFWork'at_conFWork','$at_opDefinition','$at_studyDesign','$at_popOfStudy','$at_matMethods','$at_safetyEfficacy','$at_algOfStudy','$at_statAnalysis','$at_dummyTables','$at_ethicalCon','$at_budget','$at_timetable','$at_ref','$at_appendices');";
    $result5 = mysqli_query($mysqli, $qry4);
//section_id FK
    $sql3 = "INSERT INTO action_taken(section_id) VALUES (2001),(2002),(2003),(2004),(2005),(2006),(2007),(2008),(2009),(2010),(2011),(2012),(2013),(2014),(2015),(2016),(2017),(2018),(2019),(2020),(2021),(2022)";
    $result6 = mysqli_query($mysqli, $sql3);
//pages
    $qry5 = "INSERT INTO page(page_title,page_abs,page_intro,page_revOfLit,page_obj,page_sigOfTheStudy,page_scopeDelim,page_limitOfStudy,page_conFWork,page_opDefinition,page_studyDesign,page_popOfStudy,page_matMethods,page_safetyEfficacy,page_algOfStudy,page_statAnalysis,page_dummyTables,page_ethicalCon,page_budget,page_timetable,page_ref,page_appendices) VALUES ('$page_title','$page_abs','$page_intro','$page_revOfLit','$page_obj'page_obj','$page_sigOfTheStudy','$page_scopeDelim','$page_limitOfStudy','$page_conFWork','$page_opDefinition','$page_studyDesign','$page_popOfStudy','$page_matMethods','$page_safetyEfficacy','$page_algOfStudy','$page_statAnalysis','$page_dummyTables','$page_ethicalCon','$page_budget','$page_timetable','$page_ref','$page_appendices');";
    $result7 = mysqli_query($mysqli, $qry5);
//section_id FK
    $sql4 = "INSERT INTO page(section_id) VALUES (2001),(2002),(2003),(2004),(2005),(2006),(2007),(2008),(2009),(2010),(2011),(2012),(2013),(2014),(2015),(2016),(2017),(2018),(2019),(2020),(2021),(2022)";
    $result8 = mysqli_query($mysqli, $sql4);
    
    echo "Success!";
    //header('Location: form1.php');
  }
?>