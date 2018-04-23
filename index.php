<?php
    function offset($arr,$n){
        $count = count($arr); // it's comment
        /*$newArr[0]=$arr[$count-2];
        $newArr[1]=$arr[$count-1];*/
        for($j = 0, $n1 = $n; $j < $n; $j++){   
            $newArr[$j] = $arr[$count-$n1];
            $n1--;
        }
        for($i = 0; $i < $count-$n; $i++){            
            $newArr[$i+$n]=$arr[$i]; 
            }
        return $newArr;      
    }
    $arr = array(1,2,3,4,5,6,10,13);
    $newArr = offset($arr,4);
    var_dump($newArr); //[5,6,10,13,1,2,3,4]
?>
