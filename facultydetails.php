
<!DOCTYPE html>
<html>
<body>
<?php
$conn=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit3'])){
		$name=$_POST["name"];
		$department=$_POST["department"];
		

		
$sql="SELECT * FROM faculty where name='$name' and department='$department'";
		

$result=mysqli_query($conn,$sql);
if(($result->num_rows)>0){
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Department</th>
<th>Designation</th>
<th>Qualification</th>
<th>Experience</th>
<th>Email</th>

</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['department'] . "</td>";
echo "<td>" . $row['designation'] . "</td>";
echo "<td>" . $row['qualification'] . "</td>";
echo "<td>" . $row['experience'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "</tr>";
}
echo "</table>";
    } else {
    echo "0 results";
}

			
    
} 
?>

<style>
body {
    background-color: Gray;
}
</style>

</body>
</html>











