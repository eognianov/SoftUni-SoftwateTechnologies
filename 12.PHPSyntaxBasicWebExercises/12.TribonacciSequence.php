<form>
    <label>N:</label><input type="text" name="num">
    <input type="submit">
</form>

<?php
if(isset($_GET['num'])){
    $n = intval($_GET['num']);
    $first = 1;
    $second = 1;
    $third = 2;
    echo '1 1 2 ';
    for($i = 3; $i < $n; $i++){
        $next = $first+$second+$third;
        echo $next.' ';
        $first = $second;
        $second = $third;
        $third = $next;
    }

}
?>