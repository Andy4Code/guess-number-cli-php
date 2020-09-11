<?php
/* simple game => guess number via cli php */
/* wrote by andyyy */
if(PHP_SAPI != "cli") die('you should run this script via terminal');

// set your range 
$random = rand(1,100);
// welcome msg
echo "Welcome to guess number, your range is from 1 to 100 GL HF\n";
while(true):// loop til we exit
// take player input 
$ans = fopen("php://stdin","r");
$c = fgets($ans);

// if not number will die
if(!(INT)($c)){
 die("NUMBER Only , try again\n");
}

// checks
if($c == $random):
	echo "Pingoooooooo \n";
	exit;
elseif($c > $random):
	echo "No, Hint:Guess lower number next time .\n";
elseif($c < $random):
	echo "No, Hint:Guess bigger number next time .\n";
endif;

endwhile;
