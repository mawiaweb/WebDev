<html>
<head>

</head>
<body>
<p>1. Create a variable called yourName.  Assign it a value of your name.</p>
<p>2. Display the assignment name in an h1 element on the page. Include the elements in your output. </p>
<p>3. Use HTML to put an h2 element on the page. Use PHP to display your name inside the element using the variable.</p>
<?php 
$yourName = "Lal Mawia";

echo "<h1>$yourName</h1>";

?>
<p>4. Create the following variables:  number1, number2 and total.  Assign a value to them.  </p>
<p>5. Display the value of each variable and the total variable when you add them together.</p>
<?php

$number1 = 1;
$number2 = 2;
$total = $number1 + $number2;

echo "$number1<br>";
echo "$number2<br>";

echo "<br>";

echo " Adding in PHP: 1 + 2  is $total.";

?>

<p>Use PHP to create a Javascript array with the following values: PHP,HTML,Javascript.  Output this array using PHP.  Create a script that will display the values of this array on your page.  NOTE:  Remember PHP is building the array not running it.  </p>

<?php

$numberList1[0] = "PHP";

echo $numberList1[0];

echo "<br>";

$numberList2[0] = "HTML";

echo $numberList2[0];

$numberList3[0] = "Javascript";
echo "<br>";
echo $numberList3[0];


?>


</body>
</html>