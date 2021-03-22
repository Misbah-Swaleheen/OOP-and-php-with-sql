<?php 

    $arr = array(array(11,2,4), array(4,5,6), array(10, 8, -12) );
    $sum = 0;
    $sumb = 0;

 
    for ($i=0; $i < count($arr) ; $i++) { 
        # code...
        for ($j=0; $j < count($arr[0]); $j++) { 
            # code...
            if ($i == $j) {
                # code...
                $sum += $arr[$i][$j];

            }
            for ($k =(count($arr)-1);$k >=0; $k--) { 
            $sumb = $arr[$i][$k];
            }
        }
    }
    echo $sum ."<br>". $sumb;

?>