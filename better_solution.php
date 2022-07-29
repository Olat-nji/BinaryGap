
function solution($N) {
    $binary = decbin($N);
    $binary=trim($binary,'0');
    $arr=explode(1,$binary);
    $longest=0;
    foreach($arr as $value){
        $clongest=strlen($value);
        if($clongest>$longest){
            $longest=$clongest;
        }
    }
    return $longest;
}
