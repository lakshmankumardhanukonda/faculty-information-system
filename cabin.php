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
    while($row = $result->fetch_assoc()) {
$a=$row['name'];
$b=$row['department'];
$l=$row['cabinno'];

echo "Name-".$a;
echo "<br>";
echo "<br>";
echo "Department-".$b;
echo "<br>";
echo "<br>";
echo "Cabin no-".$l;
echo "<br>";
echo "<br>";
	
    }
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


