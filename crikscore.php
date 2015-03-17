<?php
require('core/init.php');
$admin_id= $_SESSION['id'];
$h_name = $_GET['homename'];
$h_run = $_GET['homeruns'];
$h_wicket = $_GET['homewickets'];
$h_towin = $_GET['hometowin'];
$o_name = $_GET['oppname'];
$o_run = $_GET['oppruns'];
$o_wicket = $_GET['oppwickets'];
$o_towin=$_GET['opptowin'];
$result = $h_name.' '.$h_run.' '.$h_wicket.' '.$h_towin.' '.$o_name.' '.$o_run.' '.$o_wicket.' '.$o_towin;
if($admin_id!=0)
{
$data = $users->crickscore($result,$admin_id);
}

if (!$data) {

  die('Error: ' . mysql_error());

}
header('Location:edit_home.php');
?>