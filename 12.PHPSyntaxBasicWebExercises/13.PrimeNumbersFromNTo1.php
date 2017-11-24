<form>
    <label>N:</label><input type="text" name="num">
    <input type="submit">
</form>

<?php
    function isPrime($num){
        if($num == 0 || $num == 1)
            return false;
        else
        {
            for($a = 2; $a<=$num/2; $a++){
                if($num % $a == 0){
                    return false;
                }
            }
            return true;
        }
    }
    if(isset($_GET['num'])){
        $n = intval($_GET['num']);
        for($i=$n;$i>=1;$i--){
            if(isPrime($i))
                echo $i.' ';
        }
    }
?>
