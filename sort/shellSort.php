
function shellsort($arr){
    if(count($arr)<=1){
        return $arr;
    }
    $gap = 1;
       while ($gap < count($arr)) {
           $gap = $gap * 3 + 1;
      }

      while ($gap > 0) {
            for ( $i = $gap; $i < count($arr); $i++) {
              $tmp = $arr[$i];
              $j = $i - $gap;
            while ($j >= 0 && $arr[$j] > $tmp) {
                $arr[$j + $gap] =$arr[$j];
               $j -= $gap;
              }
             $arr[$j + $gap] = $tmp;
         }
         $gap = floor($gap / 3);
       }

      return $arr;

}