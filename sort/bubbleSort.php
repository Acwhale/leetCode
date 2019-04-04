function bubbleSort($arr){
    if(count($arr) <=1){
        return $arr;
    }
    for ($i=1;$i < count($arr); $i++){
        for ($j=1; $j< count($arr)-$i;$j++){
            if($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

$arr = [1,3,10,9,4,69,6,8,7];
var_dump(bubbleSort($arr));