<?php
    function offset($arr,$n){
        $count = count($arr); 
        if($n < 0){
           for($i = 0; $i < $count+$n; $i++){
                $newArr[$i] = $arr[$i-$n];
           }
           for($j = 0, $n1=$n; $j<-$n; $j++){
                $newArr[$count+$n1] = $arr[$j];
                $n1++;
           }
        }
        else{
            for($j = 0, $n1 = $n; $j < $n; $j++){   
                $newArr[$j] = $arr[$count-$n1];
                $n1--;
            }
            for($i = 0; $i < $count-$n; $i++){            
                $newArr[$i+$n]=$arr[$i]; 
            }
        }
        return $newArr;      
    }
    $arr = array(1,2,3,4,5,6,10,13);
    $newArr = offset($arr,-3);
    var_dump($newArr); //[4,5,6,10,13,1,2,3]
?>
