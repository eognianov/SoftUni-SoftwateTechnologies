<?php

    if(isset($_GET['person'])){
        $personName = htmlspecialchars($_GET['person']);
        echo "Hello, $personName!";
    } else {
        echo '<form>
                <label>Name: </label><input type="text" name="person">
                <input type="submit">
              </form>';
    }
?>
