<?php 
    
    class bottle{
        public $capacity;
        public $fill;

        public function __construct(int $capacity ,int  $fill)
        {
            $this -> capacity = $capacity;
            $this -> fill = $fill;
        }
    }

    $b =[ new bottle(8,4), new bottle(3,2),
    new bottle(6,3), new bottle(5,4), new bottle(6,3)] ;

    $capacity_in_decending_order = [];
    $fill_total = 0;

    for ($i=0; $i <count($b) ; $i++) { 
        # code...
        echo "bottle capacity is ". $b[$i] -> capacity . " and and fill is " . $b[$i] -> fill . "<br>";
        $fill_total += $b[$i] -> fill;
        array_push($capacity_in_decending_order, $b[$i] -> capacity);

    }
    rsort($capacity_in_decending_order);
    $total = $fill_total;

    echo $fill_total;
    for ( $i = 0;$i< count($b) ; $i++) { 
        # code...
        echo $capacity_in_decending_order[$i];
 

    if ($fill_total > 0 && $fill_total >= $capacity_in_decending_order[$i]  && $fill_total >  $capacity_in_decending_order[$i+1]) {
        # code...
        echo "return bottle capacity is ".$capacity_in_decending_order[$i]." litres with ".$capacity_in_decending_order[$i]." litres fill";
        $fill_total -= $capacity_in_decending_order[$i] ; 
        
        echo "<br> $fill_total";
    }
    elseif($capacity_in_decending_order[$i] == $capacity_in_decending_order[count($capacity_in_decending_order) - 1]) {
        # code...
        echo "return bottle capacity is ".$capacity_in_decending_order[$i]." litres with ".$fill_total." litres fill";

    }
    if ($fill_total == 0) {
        # code...
        break;
    }
    // if ($fill_total == 0) {
    //     # code...
    //     break;
    // }
    // elseif ($fill_total > 0 && $fill_total >= $capacity_in_decending_order[1]  && $fill_total >  $capacity_in_decending_order[2]) {
    //     # code...
    //     echo "return bottle capacity is ".$capacity_in_decending_order[1]."litres with".$capacity_in_decending_order[1]."litres fill";
    //     $fill_total -= $capacity_in_decending_order[1];
    // }
    // else {
    //     # code...
    //     echo "return bottle capacity is ".$capacity_in_decending_order[2]."litres with".$capacity_in_decending_order[2]."litres fill";
    //     $fill_total -= $capacity_in_decending_order[2];
    // }
}
   
?>

