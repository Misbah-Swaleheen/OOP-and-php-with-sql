<?php
    class calculator{
        public function __call($name, $arguments)
        {
            if($name == 'add'){
                switch(count($arguments)){
                    case 2:
                        return $arguments[0] + $arguments[1];
                        break;
                    case 3:
                        return $arguments[0] + $arguments[1] + $arguments[2];
                        break;
                    default:
                        return "not match";
                        break;
                }
            }
            elseif ($name == 'sub') {
                # code...
                switch(count($arguments)){
                    case 2:
                        return $arguments[0] - $arguments[1];
                        break;
                   
                    default:
                        return "not match";
                        break;
                }
            }
            elseif ($name == 'mul') {
                # code...
                switch(count($arguments)){
                    case 2:
                        return $arguments[0] * $arguments[1];
                        break;
                    case 3:
                        return $arguments[0] * $arguments[1]  * $arguments[2];
                        break;
                    default:
                        return "not match";
                        break;
                }
            }
            elseif ($name == 'div') {
                # code...
                switch(count($arguments)){
                    case 2:
                        return $arguments[0] / $arguments[1];
                        break;
                    
                    default:
                        return "not match";
                        break;
                }
            }
            else{
                return "not match";
            }
        }
     
    }

    class scientificCalculator extends calculator{

    } 

    $obj = new scientificCalculator();
    echo $obj->add(6,3,8);

?>
