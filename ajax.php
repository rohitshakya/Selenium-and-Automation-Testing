 <?php
 $name="kajal shakya";
 $youtube="learn with kajal";
 echo ' my name is '.$name;
echo "<br>";
echo ' and my youtube channel is '.$youtube;
define('NUM', '12');
echo "<br>";
echo NUM; 
echo "<hr>";
$a=3;
$b=2;
echo "<br>";
if($a==$b){
	echo "Hello world";
} 
else{
	echo "Hii";
} 
echo "<br>";
switch($a){
	case 2: echo "This is kajal";
	break;
	case 4; echo "This is priya";
	break;
	default:echo "This is swati";
}
echo "<br>";
while( $a<10)
{
	echo "metro <br>";
	$a++;
}
do{
	echo "this is a do while loop  <br>"; 
	$a++;
}
while( $a<10);
echo"<br>";
echo"<br>";
for($a=1;$a<10;$a++) 
	{ echo "this is a for loop $a <br>  ";
}echo "<br>";
echo "<br>";
//strings
$a="kajal";
$b="priya shakya";
echo strtolower($b);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
 echo "this is function".sum(5,6);//function call
echo "<br>";
function sum($x,$y)
{ $c=$x+$y;
	return $c;
}
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
//indexed array
$city = array( "Delhi","mumbai","london");
$city[0] = "kajal";
  echo $city[0];
echo "<br>";
echo $city[2];
echo "<br>"; 
// foreach($city as $kajal){
// 	echo $kajal;
// 	echo "<br>";
// } 



// echo "<br>";echo "<br>";
// echo "<br>";echo "<br>";
// echo "<br>";echo "<br>"; 
// $shakya =array(
// 	array("kajal"),
// 	array("priya","swati")			


// );
// echo "<br>";
// echo $shakya[0][0];

echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";
define('a', 2);   
for($i=1; $i<=10; $i++)   
{   
  echo  "2 * $i = "	;
  echo $i*a;
  echo "<br>";     
}
$k = readline('Enter a string: '); 
  echo $k;
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";echo "<br>";
echo "<br>"



 ?>
