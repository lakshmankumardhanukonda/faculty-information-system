<?php
$conn=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit2'])){
		$year=$_POST["year"];
		$department=$_POST["department"];
		$section=$_POST["section"];
		$abc=$department.$year.$section[strlen($section)-1];
		
$abc = str_replace(' ', '', $abc);
		
$sql="SELECT * FROM $abc";
		

$result=mysqli_query($conn,$sql);
if(($result->num_rows)>0){
echo "<table border='1'>
<tr>
<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>Thursday</th>
<th>Friday</th>
<th>Saturday</th>

</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['Monday'] . "</td>";
echo "<td>" . $row['Tuesday'] . "</td>";
echo "<td>" . $row['Wednesday'] . "</td>";
echo "<td>" . $row['Thursday'] . "</td>";
echo "<td>" . $row['Friday'] . "</td>";
echo "<td>" . $row['Saturday'] . "</td>";
echo "</tr>";
}
echo "</table>";
    
} else {
    echo "0 results";
}

	
    
} 



?>






















