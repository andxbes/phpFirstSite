<h1>Info</h1>
<div class="container">
    <?php
    $array = $_SESSION['USER']->getUserInfo();

    foreach ($array as $key => $value) {
        echo "<span> <b>$key</b> : $value </span> <br/>";
    }
    ?>
</div>


