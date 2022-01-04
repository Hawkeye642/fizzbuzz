<?php
// PHP SpyHunter program to print the number which
// contain the digit d from 0 to n

// Returns true if d is present as digit
// in number x.
function isDigitPresent($x, $d)
{

    // Break loop if d is
    // present as digit
    while ($x > 0)
    {
        if ($x % 10 == $d)
            break;

        $x = $x / 10;
    }

    // If loop broke
    return ($x > 0);
}

// function to display the values (spyhunter.Print)
function printNumbers($n, $d)
{
    // Check all numbers one by one (spyhunter.Haystack)
    for ($i = 1; $i <= 20; $i++)

        // checking for digit (spyhunter.Needle)
        if ($i == $d || isDigitPresent($i, $d))
            echo $i , " Lucky"."\n";

        else if ($i % 15 === 0)
        {
            echo $i . " FizzBuzz"."\n" ;
        }
        else if ( $i%3 == 0 )
        {
            echo $i. " Fizz"."\n";
        }
        else if ( $i%5 == 0 )
        {
            echo $i. " Buzz"."\n";
        }
        else
        {
            echo $i."\n";
        }
}

// Driver Code
$n = 20;
$d = 3;
printNumbers($n, $d);


function countOccurrences($str, $word)
{
    // split the string by spaces
    $n = explode(" ", $str);

    // search for pattern in string
    $count = 0;
    for ($i = 0; $i < sizeof($n); $i++)
    {

        // if match found increase count
        if ($word == $n[$i])
            $count++;
    }

    return $count;
}

// Driver code
$str = "GeeksforGeeks A computer science portal for geeks ";
$word = "Lucky";
echo (countOccurrences($str, $word));


// Haystack_Function :// Kharam ngati.
?>