		<table>
					<thead>
						<tr>
							<th>Item Descripttion</th>
							<th>Weight</th>
							<th>Cost</th>
							<th>Number Available</th>
						
						</tr>
					</thead>
					<tbody>
<?php

function executeResult($sql){
	
	$server = 'Localhost';
$user = 'root';
$pass = '';
$mydb = 'datalab5';
$table_name = 'Products';
$sql = ' select * from $table_name';
$connect = new mysqli($server, $user, $pass ,$mydb);
			
		mysqli_set_charset($connect, "utf8");
		if($connect->connect_error){
			var_dump($connect->connect_error);
			die();}

	mysqli_query($connect,$sql);

	$resultset = mysqli_query($connect,$sql);
	$list=[];
	while ($row = mysqli_fetch_array($resultset,1)) {
		$list[] = $row;
	}
	$connect->close();

	return $list;

}


// function executeResult($sql){
// $server = 'Localhost';
// $user = 'root';
// $pass = '';
// $mydb = 'datalab5';
// $table_name = 'Products';


// $connect = new mysqli($server, $user, $pass ,$mydb);


// $sql = ' select * from $table_name';
$sql = ' select * from $table_name';
$listsp = executeResult($sql);

foreach($listsp as $sp){
	echo 		'<tr> 
				<td>'.$sp['Product_desc'].'</td>
				<td>'.$sp['Weight'].'</td>
				<td>'.$sp['Cost'].'</td>
				<td>'.$sp['Numb'].'</td>
				
				</tr>';


}






?>									
					</tbody>
				</table>
	

			
	<!-- mysqli_set_charset($connect, "utf8");
	if($connect->connect_error){
	var_dump($connect->connect_error);
	die();}

	mysqli_query($connect,$sql);

	$resultset = mysqli_query($connect,$sql);
	$list=[];
	while ($row = mysqli_fetch_array($resultset,1)) {
		$list[] = $row;
	}
	$connect->close();

	return $list;

}
$sql = ' select * from $table_name';

$listsp = executeResult($sql);

foreach($listsp as $sp){
	echo 		'<tr> 
				<td>'.$sp['Product_desc'].'</td>
				<td>'.$sp['Weight'].'</td>
				<td>'.$sp['Cost'].'</td>
				<td>'.$sp['Numb'].'</td>
				
				</tr>';


}






?>									
					</tbody>
				</table> -->