<?php
class Validator {
    public static function string($value, $min = 1, $max = INF) {
      $value = trim($value);

      return is_string($value) 
             && strlen($value) >= $min 
             && strlen($value) <= $max;       
    
    }

public static function number($value, $min = 0, $max = INF) {
$value = trim($value);

return is_numeric($value)
        && $value >= $min
        && $value <= $max;
    }
}

?>