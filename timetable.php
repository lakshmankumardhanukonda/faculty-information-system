<?php
$conn=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit2'])){
		$year=$_POST["year"];
		$department=$_POST["department"];
		$section=$_POST["section"];
		$abc=$department.$year.$section[strlen($section)-1];
		
$abc = str_replace(' ', '', $abc);
		
$sql="SELECT * FROM $abc";
		
echo "Monday"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Tuesday"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"."Wednesday"."&nbsp&nbsp&nbsp&nbsp&nbsp		"."Thursday"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp		"."Friday"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp			"."Saturday";
$result=mysqli_query($conn,$sql);
if(($result->num_rows)>0){
    while($row = $result->fetch_assoc()) {
  $a=$row['Monday'];

echo "<br>";
   echo $row['Monday']."&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	".$row['Tuesday']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp		".$row['Wednesday']."	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	".$row['Thursday']."	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp	".$row['Friday']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp	",$row["Saturday"];
echo "<br>";	
echo "<br>";

	
    }
} else {
    echo "0 results";
}

	
    
} 



?>