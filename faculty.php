<?php
$conn=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit3'])){
		$name=$_POST["name"];
		$department=$_POST["department"];
		

		
$sql="SELECT * FROM faculty where name='$name' and department='$department'";
		

$result=mysqli_query($conn,$sql);
if(($result->num_rows)>0){
    while($row = $result->fetch_assoc()) {
 
echo "Name-".$row['name'];
echo "<br>";
echo "<br>";
echo "Department-".$row['department'];
echo "<br>";
echo "<br>";
echo "Designation-".$row['designation'];
echo "<br>";
echo "<br>";
echo "Qualification-".$row['qualification'];
echo "<br>";
echo "<br>";
echo "Experience-".$row['experience'];
echo "<br>";
echo "<br>";
echo "Email Id-".$row["email"];
echo "<br>";
echo "<br>";	


	
    }
} else {
    echo "0 results";
}

			
    
} 



?>