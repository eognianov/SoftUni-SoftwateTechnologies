<form>
    <label>N:</label><input type="text" name="num">
    <input type="submit">
</form>

<?php
if(isset($_GET['num'])){
    $n = intval($_GET['num']);
    $prev = 1;
    $curr = 1;
    echo '1 1 ';
    for($i = 2; $i < $n; $i++){
        $next = $prev+$curr;
        echo $next.' ';
        $prev = $curr;
        $curr = $next;
    }

}
?>