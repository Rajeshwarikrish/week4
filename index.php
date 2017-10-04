<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "</br><br>";

echo "Replacing - with /</br>";
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br><br>";

echo " Comparing $date and $tar<br>";
if(strcmp($date,$tar)>0)
  { echo "The future";
}else if(strcmp($date,$tar)<0)
{ echo "The past";
}else
{ echo "Oops";
}
echo "<br><br>";

echo " Searching for '/' in $date<br>";
echo " The position of / is : ";
$pos = 0;
while ($pos > -1) {
$pos = strpos($date, "/",$pos+1);
echo "  " .$pos. "  ";
}
echo "<br><br>";

echo "Counting the number of words in $date<br>";
echo "The number of words are:";
echo str_word_count($date);
echo "<br><br>";

echo "Returning the length of $date<br>";
echo " The length is:"; 
echo strlen($date);
echo "<br><br>";

echo "ASCII value of the first character of $date<br>";
echo " The ASCII value is:";
echo ord($date);
echo "<br><br>";

echo "Returning the last 2 characters from $date<br>";
echo "The last two characters are: ";
echo substr($date,-2);
echo "<br><br>";

echo "Breaking the date into an array<br>";
print_r(explode('/', $date,3));
echo "<br><br>";
?>
