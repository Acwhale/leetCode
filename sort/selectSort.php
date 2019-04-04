function selectSort($arr){
    if(count($arr) <= 0){
        return $arr;
    }
    //一共n-1轮
    for ($i=0; $i< count($arr)-1; $i++){
        $min = $i;
        // 每轮需要比较的次数 N-i
        for ($j= $i+1; $j<count($arr); $j++){
            if($arr[$j] < $arr[$min]){
                $min = $j;
            }
        }
        if($i !=$min){
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $tmp;
        }
    }

    return $arr;
}

$arr = [1,3,10,9,4,69,6,8,7];
var_dump(selectSort($arr));