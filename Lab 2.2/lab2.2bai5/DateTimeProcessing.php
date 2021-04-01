<!DOCTYPE html>
<html>
<head>
	<title>DateTimeProcessing</title>
</head>
<body>
 <font color="red" size="10">DateTime!</font>
 <br>
 <font color="blue">Enter your name and select date and time for the appointment</font>
 <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
 	<?php
     if((array_key_exists("date", $_GET))){
     	$date = $_GET['date'];
     	$time= $_GET['time'];
     	$name=$_GET['name'];
     }else{
     	$date =0;
     	$time=0;
     	$name=0;
     }
 	?>
    <table>
    <tr>   
    <td>Your name:</td>
    <td><input type="text" name="name" size="16" maxlength="40" value="<?php echo $name ?>"></td>
    </tr>
    <tr>
     <td>Date:</td>
     <td>
     	<input type="date" name="date" value="<?php echo date('Y-m-d',strtotime($date)); ?>" />
     	
    
     </td>
    </tr>
     <tr>
    	<td>Time:</td>
    	<td><input type="time" name="time" value="<?php echo date('H:i:s',strtotime($time))?>"></td>
    </tr>
    <tr>
    	<td>
    		<input type="submit" name="Setngay">
    	</td>
    	<td>
    		<input type="reset" name="reset">
    	</td>
    </tr>
   
    </table>
    <?php
    $new_date = date('Y-m-d', strtotime($_GET['date']));
     $new_time = date('H:i:s', strtotime($_GET['time']));
     $new_timeA = date('h:i:s A', strtotime($_GET['time']));
    print("Hi $name!");
     print("<br>");
    print("You have choose to have an appointment on $new_time,$new_date");
     print("<br>");
    print("More information");
     print("<br>");
      print("In 12 hours, the time and date is $new_timeA,$new_date");
     print("<br>");
      $t = date('m', strtotime($_GET['date']));
      $na = date('y', strtotime($_GET['date']));
          if($t==1||$t==3||$t==5||$t==7||$t==8||$t==10||$t==12){
            $n=31;
          
          }
          if($t==4||$t==6||$t==9||$t==11){
            $n=30;
          }
            if($t==2){
              if((($na%4==0)&&($na%100 != 0))||($na%400==0)){
              $n=29;
            }else $n=28;
          }
           print("This month is $n!");
     	 
       ?>
 </form>
</body>
</html>