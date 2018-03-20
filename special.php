<!DOCTYPE html>
<html>
<body>

<?php
$conn=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit1'])){
                                    
		$name=$_POST["name"];
		$department=$_POST["department"];
		$c="specialization";
		$sql = "SELECT * FROM $c where name='$name' and department='$department'";
                                   
$result=mysqli_query($conn,$sql);
if($result->num_rows>0){
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Department</th>
<th>Area of Specialization</th>
<th>UnderGraduate</th>
<th>PostGraduate</th>


</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['department'] . "</td>";
echo "<td>" . $row['AreaofSpecialization'] . "</td>";
echo "<td>" . $row['UnderGraduate'] . "</td>";
echo "<td>" . $row['PostGraduate'] . "</td>";
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


