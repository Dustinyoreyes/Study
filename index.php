<!DOCTYPE html>
<html>
<title>Study</title>



<?php
echo "<b>SWITCH</b><br><br>";

$favcolor = "blue";
$favcolor = "green";

switch ($favcolor) {
	case "red";
		echo "Your favorite color is red!";
			break;
	case "blue";
		echo "Your favorite color is blue!";
			break;
	case "green";
		echo "Your favorite color is green!";
			break;
}

echo "<br><br><b>WHILE LOOPS</b><br><br>";


$x = 10;

while ($x>=4) {
	echo "<br>The number is: $x<br>";
	echo $x--;
} 

echo "<br><br><b>DO WHILE LOOP</b><br><br>";
//the condition is tested AFTER executing the statements within the loop. 
//This means that the do while loop would execute its statements at least once, 
//even if the condition is false the first time.

$x = 10;
 
do {
	echo "<br>The value is $x<br>";
	$x++;
} while ($x<=15);


echo "<br><br><b>FOR LOOP</b><br><br>";
//The for loop is used when you know in advance how many times the script should run.

for ($x=0; $x<=10; $x++) {
		echo "<br>The number is $x<br>";
}

echo "<br><br><b>FOR EACH LOOP</b><br><br>";
//The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

$color = array("Yellow","Blue","Red","Green");
	foreach ($color as $value) {
			echo "$value<br>";
	}

echo "<br><br><b>FUNCTIONS</b><br><br>";
	
function familyName($fname, $age) {
	echo "<br>$fname Wong is $age<br>";
} 

familyName("Dustin", "29");
familyName("Ashley","26");
familyName("Elaine", "60");
familyName("Philip","61");
	

echo "<br><br><b>SETTING DEFAULT ARGUMENT</b><br><br>";

function setHeight($minHeight = 20) { 
	if($minHeight<20) {echo "Minimum height should be 20<br>";} else
	echo "The height is: $minHeight<br>";
}

setHeight (50);
setHeight (100);
setHeight (20);
setHeight (2);
setHeight (); //the default is 20

echo "<br><br><b>RETURNING A VALUE</b><br><br>";

function sum($x,$y) {
	$z = $x+$y; 
	return $z;
}
echo "2+3=". sum(2,3)."<br>";
echo "4+4=". sum(4,4)."<br>"; 
echo "the sum of 10 and 0 is equal to ". sum(5,5)."<br>";	
	
	
echo "<br><br><b>LIST OUT AN ARRAY</b><br><br>";	

$cars = array("Honda", "Toyota", "BMW", "Mercedes", "Audi");

	echo "My favorite car is:<br>". $cars[0]."<br>".$cars[1]."<br>". $cars[2]."<br>".$cars[3]."<br>".$cars[4]."<br>";
	
echo "<br><br><b>LOOP THROUGH AN INDEX ARRAY</b><br><br>";		

$cars = array("Honda", "Toyota", "BMW", "Mercedes", "Audi");
$arrLength = count($cars); //count how many are in the $cars array

for ($x=0; $x<$arrLength; $x++) {
	echo $cars[$x]; 
	echo "<br>";
}	
	
echo "<br><br><b>ASSOCIATIVE ARRAYS</b><br><br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
 echo "Peter is " . $age['Peter'] . " years old.";

echo "<br><br><b>LOOP THROUGH ASSOC. ARRAY</b><br><br>";

foreach ($age as $x=>$x_value) {
	echo "Key=".$x.",Value=".$x_value."<br>";
}

echo "<br><br><b>SORT FUNCTIONS FOR ARRAYS</b><br><br>";

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x=0; $x< $arrlength; $x++) {
	echo $numbers[$x];
	echo "<br>";
	
}
echo "<br><br><b>TWO DIMENSIONAL ARRAY</b><br><br>";
$cars = array ( 
array("Volvo", 23,18),
array("BMW",15,13),
array("Honda",10,5),
array("Land Rover",3,6)
);

echo $cars[0][0].", ".$cars[0][1].", ".$cars[0][2]."<br>";
echo $cars[1][0].", ".$cars[1][1].", ".$cars[1][2]."<br>";

echo "<br><br><b>LOOP TWO DIMENSIONAL ARRAY</b><br><br>";

for ($row=0; $row<4;$row++) {
	echo "<p><b>Row number $row</b></p>";
	echo"";
for ($col=0; $col<3;$col++) {
	echo "<li>".$cars[$row][$col]."</li>";		
}	
}

echo "<br><br><b>CURRENT DATE and TIME</b><br><br>";

echo "Today's date is ".date(" m-d-y")."<br>";
date_default_timezone_set("America/Los_Angeles");
echo "The current time is ".date("h:i A")."<br>";
echo "It is a ".date("l")."<br>";

echo "<br><br><b>READ FILES</b><br><br>";
echo "<br><br>";
echo readfile("testing.txt");
echo "<br><br>";

$myfile = fopen("testing.txt", "r") or die ("Unable to open file!");
echo fread($myfile,filesize("testing.txt"));
fclose($myfile);

echo "<br><br><b>WRITE TO FILES</b><br><br>";
echo "Whatever is written onto the file will display above: READ FILES";
$myfile1 =fopen("testing.txt", "w") or die("Unable to open file!");
$txt = " Adding a name to this file. Adding an address to the file.";
fwrite($myfile1,$txt);
$txt = " Removing a name to this file. Removing an address to the file.";
fwrite($myfile1,$txt);
fclose($myfile1);

?> 
<br><br>
<br><b>UPLOADING FILES</b></br>

<h1>	
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Name of input element determines name in $_FILES array -->
     Send this file: <input name="userfile" type="file"/>
    <input type="submit" value="Send File" />
</form>
</h1>


</body>


<div class="footer">
<?php
echo "<br><br>";
include 'footer.php';
?>
</div>



</html>

