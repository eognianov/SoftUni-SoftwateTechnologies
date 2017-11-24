<form>
    <label>N: </label><input type="text" name="num1">
    <label>M: </label><input type="text" name="num2">
    <label>L: </label><input type="text" name="num3">
    <input type="submit">
</form>
<?php
    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])){
        $numbers = [intval($_GET['num1']),intval($_GET['num2']),intval($_GET['num3'])];
        $countOfNegatives = 0;

        foreach ($numbers as $num){
            if($num == 0){
                $product="Positive";
                break;
            }
            if($num<0)
                $countOfNegatives++;
        }
        if(!isset($product)){
            if($countOfNegatives%2!=0)
                $product="Negative";
            else
                $product="Positive";
        }
        echo $product;
    }
?>