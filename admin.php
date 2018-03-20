<!DOCTYPE html>
<html>
<body>

<?php
$conn=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit'])){

		$name=$_POST["faculty"];
		$department=$_POST["department"];
		$c="cabin";
		$sql = "SELECT * FROM $c where name='$name' and department='$department'";
$result=mysqli_query($conn,$sql);
if($result->num_rows>0){
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Department</th>
<th>Block</th>
<th>Floor</th>
<th>Cabin no</th>


</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['department'] . "</td>";
echo "<td>" . $row['block'] . "</td>";
echo "<td>" . $row['floor'] . "</td>";
echo "<td>" . $row['cabinno'] . "</td>";
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


