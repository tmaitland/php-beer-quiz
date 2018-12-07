<?php

//variables


$bottlesOfBeer = array("bottles of beer", "on the wall", "Take one down", "and pass it around");



// echo $num_bottles . '&nbsp'. $bottlesOfBeer[0]. '&nbsp'. $bottlesOfBeer[1] . ',&nbsp'. $num_bottles .'&nbsp'.$bottlesOfBeer[0] .'&nbsp'. $bottlesOfBeer[2].'&nbsp'. $bottlesOfBeer[3].'&nbsp'. $num_bottles .'&nbsp'. $bottlesOfBeer[0] .'&nbsp'. $bottlesOfBeer[1];


for($num_bottles = 99, $num_bottles1 = 98, $num_bottles >= 1 || $num_bottles1 >= -1; $num_bottles--, $num_bottles1--;){
    if(!($num_bottles1 <= 0)){
        echo $num_bottles . '&nbsp'. $bottlesOfBeer[0]. '&nbsp'. $bottlesOfBeer[1] . ',&nbsp'. $num_bottles .'&nbsp'.$bottlesOfBeer[0] .'&nbsp'. $bottlesOfBeer[2].'&nbsp'. $bottlesOfBeer[3].'&nbsp'. $num_bottles1 .'&nbsp'. $bottlesOfBeer[0] .'&nbsp'. $bottlesOfBeer[1]. '<br/>';
    } 
    else if($num_bottles1 <= 0) {
        echo 'No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall.';
    }
    
    // echo $num_bottles . '&nbsp'. $bottlesOfBeer[0]. '&nbsp'. $bottlesOfBeer[1] . ',&nbsp'. $num_bottles .'&nbsp'.$bottlesOfBeer[0] .'&nbsp'. $bottlesOfBeer[2].'&nbsp'. $bottlesOfBeer[3].'&nbsp'. $num_bottles .'&nbsp'. $bottlesOfBeer[0] .'&nbsp'. $bottlesOfBeer[1]. '<br/>';
}

?>

 