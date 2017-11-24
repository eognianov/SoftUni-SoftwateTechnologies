<form>
    <label>Lists Count:</label><input type="text" name="num1">
    <label>Sub-Lists Count:</label><input type="text" name="num2">
    <input type="submit">
</form>

<?php
if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    echo "<ul>";
    for($i = 1; $i<=$num1; $i++){
        echo "\n\t<li>List $i\n\t\t<ul>";
        for ($j = 1; $j <= $num2; $j++ ){
            echo "\n\t\t\t<li>Element $i.$j</li>";
        }
        echo "\n\t\t</ul>\n\t</li>";
    }
    echo "\n</ul>";
}
?>