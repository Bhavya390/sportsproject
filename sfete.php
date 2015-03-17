<?php
require ('../core/init.php');
?>
<html>
<head>
	<title>LEADERBOARD SPORTSFETE '15</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<style>
	body{
		background-color: black;
	}
	</style>
</head>
<body>
	<div id="l3">
			<div id='up_bar'>
	<!--			<span><a href="./hpage.php" id='sfeed_btn'>SFEED</a></span> -->
				<span id='fete_btn'>SPORTS FETE LIVE</span>
			</div>
			</br>
			<div style='opacity:1; font-size:24px; color: white; margin-bottom:10px; padding:0;'><center>SPORTS FETE'15 LEADERBOARD</center></div>
			<table>
				<tr class='ldr_row' style='background-color:#FC0; color:#000'>
					<td>DEPARTMENTS</td>
					<td>ARCHITECTURE</td>
					<td>CHEMICAL</td>
					<td>CIVIL</td>
					<td>CSE</td>
					<td>ECE</td>
					<td>EEE</td>
					<td>ICE</td>
					<td>MECHANICAL</td>
					<td>METALLURGY</td>
					<td>PRODUCTION</td>
					<td>MTECH</td>
					<td>MSC</td>
					<td>DOMS</td>
				</tr>
				
				<tr>
					<th>ATHLETICS</th>

					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);

				foreach ($lead as $reach) {
				//echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['id']."</td>";
					if($reach['id']== '2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
					
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}

					
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Athletics']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>BADMINTON</th>
					<?php  
					$sports = 'Badminton';
				$lead = $general->live(10,$sports);
				foreach ($lead as $reach) {
				
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}

					
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Badminton']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>BASKET BALL</td></th>
					<?php  
					$sports = 'Athletics';
				$lead = $general->live(10,$sports);
				foreach ($lead as $reach) {
				
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
			
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Basketball']."</td>";
					}
				}
				?>
				<tr>
					<th>CARROM</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}

					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Carrom']."</td>";
					}
				}

				?>
				</tr>
				<tr>
					<th>CHESS</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Chess']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>CRICKET</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['cricket']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>FOOTBALL</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}					
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Football']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>HANDBALL</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='3')
					{
					echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Handball']."</td>";
					}

				}
				?>
				</tr>
				<tr>
					<th>HOCKEY</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='10')
					{					
					echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Hockey']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>KABADI</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Kabbaddi']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>KHO-KHO</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='10')
					{				echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Khokho']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>SWIMMING</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='11')
					{

						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Swimming']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>THROWBALL</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Throwball']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>TENNIS</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tennis']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>TABLETENNIS</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Tt']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>VOLLEYBALL</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Volleyball']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th>WATERPOLO</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
						if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Waterpolo']."</td>";
					}
				}
				?>
				</tr>
				<tr>
					<th style="font-size: 20px; background: darkgoldenrod;">POINTS</th>
					<?php  
					$sports = 'Athletics';
					//$dept='11';
				$lead = $general->live(10,$sports);
				
				foreach ($lead as $reach) {
					 if($reach['id']=='2')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='3')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='4')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='5')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='6')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='7')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='8')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='9')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='10')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='11')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='12')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='13')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
					if($reach['id']=='14')
					{
						echo "<td style='font-size: 20px; background: darkgoldenrod;'>".$reach['Total']."</td>";
					}
				}
				?>
				</tr>
			
			</table>
	</div>
</body>
</html>
