<?php

include 'bdd.php';

$p1_1 = $_GET['q1_1'];
$p1_2 = $_GET['q1_2'];
$p1_3 = $_GET['q1_3'];

$p2_1 = $_GET['q2_1'];
$p2_2 = $_GET['q2_2'];
$p2_3 = $_GET['q2_3'];

$p3_1 = $_GET['q3_1'];
$p3_2 = $_GET['q3_2'];

$p4_1 = $_GET['q4_1'];
$p4_2 = $_GET['q4_2'];
$p4_3 = $_GET['q4_3'];

$p5_1 = $_GET['q5_1'];
$p5_2 = $_GET['q5_2'];
$p5_3 = $_GET['q5_3'];

$p6_1 = $_GET['q6_1'];
$p6_2 = $_GET['q6_2'];

$p7_1 = $_GET['q7_1'];
$p7_2 = $_GET['q7_2'];
$p7_3 = $_GET['q7_3'];

$p8_1 = $_GET['q8_1'];
$p8_2 = $_GET['q8_2'];

$p9_1 = $_GET['q9_1'];
$p9_2 = $_GET['q9_2'];
$p9_3 = $_GET['q9_3'];

$p10_1 = $_GET['q10_1'];
$p10_2 = $_GET['q10_2'];
$p10_3 = $_GET['q10_3'];
$p10_4 = $_GET['q10_4'];

$p11_1 = $_GET['q11_1'];
$p11_2 = $_GET['q11_2'];

$p12_1 = $_GET['q12_1'];
$p12_2 = $_GET['q12_2'];
$p12_3 = $_GET['q12_3'];

$langueM = $_GET['langueM'];
$statut = $_GET['statut'];
$secteur = $_GET['secteur'];

$o = array('1'=>$_GET['o1'],'2'=>$_GET['o2'],'3'=>$_GET['o3'],'4'=>$_GET['o4'],'5'=>$_GET['o5'],'6'=>$_GET['o6'],'7'=>$_GET['o7'],'8'=>$_GET['o8'],'9'=>$_GET['o9'],'10'=>$_GET['o10'],'11'=>$_GET['o11'],'12'=>$_GET['o12']);

$o1_1 = $_GET['o1_1'];
$o1_2 = $_GET['o1_2'];
$o1_3 = $_GET['o1_3'];

$o2_1 = $_GET['o2_1'];
$o2_2 = $_GET['o2_2'];
$o2_3 = $_GET['o2_3'];

$o3_1 = $_GET['o3_1'];
$o3_2 = $_GET['o3_2'];

$o4_1 = $_GET['o4_1'];
$o4_2 = $_GET['o4_2'];
$o4_3 = $_GET['o4_3'];

$o5_1 = $_GET['o5_1'];
$o5_2 = $_GET['o5_2'];
$o5_3 = $_GET['o5_3'];

$o6_1 = $_GET['o6_1'];
$o6_2 = $_GET['o6_2'];

$o7_1 = $_GET['o7_1'];
$o7_2 = $_GET['o7_2'];
$o7_3 = $_GET['o7_3'];

$o8_1 = $_GET['o8_1'];
$o8_2 = $_GET['o8_2'];

$o9_1 = $_GET['o9_1'];
$o9_2 = $_GET['o9_2'];
$o9_3 = $_GET['o9_3'];

$o10_1 = $_GET['o10_1'];
$o10_2 = $_GET['o10_2'];
$o10_3 = $_GET['o10_3'];
$o10_4 = $_GET['o10_4'];

$o11_1 = $_GET['o11_1'];
$o11_2 = $_GET['o11_2'];

$o12_1 = $_GET['o12_1'];
$o12_2 = $_GET['o12_2'];
$o12_3 = $_GET['o12_3'];

$t = array('1'=>$_GET['t1'],'2'=>$_GET['t2'],'3'=>$_GET['t3'],'4'=>$_GET['t4'],'5'=>$_GET['t5'],'6'=>$_GET['t6'],'7'=>$_GET['t7'],'8'=>$_GET['t8'],'9'=>$_GET['t9'],'10'=>$_GET['t10'],'11'=>$_GET['t11'],'12'=>$_GET['t12']);

$t1_1 = $_GET['t1_1'];
$t1_2 = $_GET['t1_2'];
$t1_3 = $_GET['t1_3'];

$t2_1 = $_GET['t2_1'];
$t2_2 = $_GET['t2_2'];
$t2_3 = $_GET['t2_3'];

$t3_1 = $_GET['t3_1'];
$t3_2 = $_GET['t3_2'];

$t4_1 = $_GET['t4_1'];
$t4_2 = $_GET['t4_2'];
$t4_3 = $_GET['t4_3'];

$t5_1 = $_GET['t5_1'];
$t5_2 = $_GET['t5_2'];
$t5_3 = $_GET['t5_3'];

$t6_1 = $_GET['t6_1'];
$t6_2 = $_GET['t6_2'];

$t7_1 = $_GET['t7_1'];
$t7_2 = $_GET['t7_2'];
$t7_3 = $_GET['t7_3'];

$t8_1 = $_GET['t8_1'];
$t8_2 = $_GET['t8_2'];

$t9_1 = $_GET['t9_1'];
$t9_2 = $_GET['t9_2'];
$t9_3 = $_GET['t9_3'];

$t10_1 = $_GET['t10_1'];
$t10_2 = $_GET['t10_2'];
$t10_3 = $_GET['t10_3'];
$t10_4 = $_GET['t10_4'];

$t11_1 = $_GET['t11_1'];
$t11_2 = $_GET['t11_2'];

$t12_1 = $_GET['t12_1'];
$t12_2 = $_GET['t12_2'];
$t12_3 = $_GET['t12_3'];

// Variables à calculer
$tq1=$t[1]-$t1_1-$t1_2-$t1_3;
$tq2=$t[2]-$t2_1-$t2_2-$t2_3;
$tq3=$t[3]-$t3_1-$t3_2;
$tq4=$t[4]-$t4_1-$t4_2-$t4_3;
$tq5=$t[5]-$t5_1-$t5_2-$t5_3;
$tq6=$t[6]-$t6_1-$t6_2;
$tq7=$t[7]-$t7_1-$t7_2-$t7_3;
$tq8=$t[8]-$t8_1-$t8_2;
$tq9=$t[9]-$t9_1-$t9_2-$t9_3;
$tq10=$t[10]-$t10_1-$t10_2-$t10_3-$t10_4;
$tq11=$t[11]-$t11_1-$t11_2;
$tq12=$t[12]-$t12_1-$t12_2-$t12_3;

$tr1=round(($t1_1+$t1_2+$t1_3)/3,3);
$tr2=round(($t2_1+$t2_2+$t2_3)/3,3);
$tr3=round(($t3_1+$t3_2)/2,3);
$tr4=round(($t4_1+$t4_2+$t4_3)/3,3);
$tr5=round(($t5_1+$t5_2+$t5_3)/3,3);
$tr6=round(($t6_1+$t6_2)/2,3);
$tr7=round(($t7_1+$t7_2+$t7_3)/3,3);
$tr8=round(($t8_1+$t8_2)/2,3);
$tr9=round(($t9_1+$t9_2+$t9_3)/3,3);
$tr10=round(($t10_1+$t10_2+$t10_3+$t10_4)/4,3);
$tr11=round(($t11_1+$t11_2)/2,3);
$tr12=round(($t12_1+$t12_2+$t12_3)/3,3);

$sql = "INSERT INTO utilisateur (dateEnvoi, langueM, statut, secteur, email,1_1,1_2,1_3,2_1,2_2,2_3,3_1,3_2,4_1,4_2,4_3,5_1,5_2,5_3,6_1,6_2,7_1,7_2,7_3,8_1,8_2,9_1,9_2,9_3,10_1,10_2,10_3,10_4,11_1,11_2,12_1,12_2,12_3,o1,o2,o3,o4,o5,o6,o7,o8,o9,o10,o11,o12,o1_1,o1_2,o1_3,o2_1,o2_2,o2_3,o3_1,o3_2,o4_1,o4_2,o4_3,o5_1,o5_2,o5_3,o6_1,o6_2,o7_1,o7_2,o7_3,o8_1,o8_2,o9_1,o9_2,o9_3,o10_1,o10_2,o10_3,o10_4,o11_1,o11_2,o12_1,o12_2,o12_3,t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t1_1,t1_2,t1_3,t2_1,t2_2,t2_3,t3_1,t3_2,t4_1,t4_2,t4_3,t5_1,t5_2,t5_3,t6_1,t6_2,t7_1,t7_2,t7_3,t8_1,t8_2,t9_1,t9_2,t9_3,t10_1,t10_2,t10_3,t10_4,t11_1,t11_2,t12_1,t12_2,t12_3,tq1,tq2,tq3,tq4,tq5,tq6,tq7,tq8,tq9,tq10,tq11,tq12,tr1,tr2,tr3,tr4,tr5,tr6,tr7,tr8,tr9,tr10,tr11,tr12) VALUES (NOW(),'$langueM','$statut','$secteur','','$p1_1','$p1_2','$p1_3','$p2_1','$p2_2','$p2_3','$p3_1','$p3_2','$p4_1','$p4_2','$p4_3','$p5_1','$p5_2','$p5_3','$p6_1','$p6_2','$p7_1','$p7_2','$p7_3','$p8_1','$p8_2','$p9_1','$p9_2','$p9_3','$p10_1','$p10_2','$p10_3','$p10_4','$p11_1','$p11_2','$p12_1','$p12_2','$p12_3','$o[1]','$o[2]','$o[3]','$o[4]','$o[5]','$o[6]','$o[7]','$o[8]','$o[9]','$o[10]','$o[11]','$o[12]','$o1_1','$o1_2','$o1_3','$o2_1','$o2_2','$o2_3','$o3_1','$o3_2','$o4_1','$o4_2','$o4_3','$o5_1','$o5_2','$o5_3','$o6_1','$o6_2','$o7_1','$o7_2','$o7_3','$o8_1','$o8_2','$o9_1','$o9_2','$o9_3','$o10_1','$o10_2','$o10_3','$o10_4','$o11_1','$o11_2','$o12_1','$o12_2','$o12_3','$t[1]','$t[2]','$t[3]','$t[4]','$t[5]','$t[6]','$t[7]','$t[8]','$t[9]','$t[10]','$t[11]','$t[12]','$t1_1','$t1_2','$t1_3','$t2_1','$t2_2','$t2_3','$t3_1','$t3_2','$t4_1','$t4_2','$t4_3','$t5_1','$t5_2','$t5_3','$t6_1','$t6_2','$t7_1','$t7_2','$t7_3','$t8_1','$t8_2','$t9_1','$t9_2','$t9_3','$t10_1','$t10_2','$t10_3','$t10_4','$t11_1','$t11_2','$t12_1','$t12_2','$t12_3','$tq1','$tq2','$tq3','$tq4','$tq5','$tq6','$tq7','$tq8','$tq9','$tq10','$tq11','$tq12','$tr1','$tr2','$tr3','$tr4','$tr5','$tr6','$tr7','$tr8','$tr9','$tr10','$tr11','$tr12')";


$dbh->exec($sql);

header('Location: https://jeremieroux.fr/TERL3/resultats.php');
exit();

?>