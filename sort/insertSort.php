function insertSort($arr){
    if(count($arr) <= 0 ){
        return $arr;
    }
    // 从下标为1的元素开始选择合适的位置插入，因为下标为0的只有一个元素，默认是有序的
    for ($i=1;$i<count($arr);$i++){
        // 记录要插入的数据
        $tmp = $arr[$i];
        // 从已经排序的序列最右边的开始比较，找到比其小的数
        $j = $i;
        while ($j>0 && $tmp<$arr[$j-1]){
            $arr[$j] = $arr[$j-1];
            $j--;
        }
        if($j != $i){
            $arr[$j] = $tmp;
        }
    }
    return $arr;
}
$arr = [1,3,10,9,4,69,6,8,7];
var_dump(insertSort($arr))