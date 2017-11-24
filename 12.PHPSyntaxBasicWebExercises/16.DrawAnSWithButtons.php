<?php
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i==1 || $i==9 || $i==5 || ($j==1 && $i>=1 && $i<=5) ||($j==5 && $i>=5 && $i<=9) )
        { ?>
            <button style="background-color: blue">1</button>
        <?php }else{?>
            <button >0</button>
        <?php }
    }?>
    <br/>
    <?php
}
?>