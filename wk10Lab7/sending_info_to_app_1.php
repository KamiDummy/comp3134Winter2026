<?php
$q = isset($_GET['q']) ? $_GET['q'] : "";
?>

<form method="get">
    <input name="q" placeholder="Enter Text">
    <br/>
    <input type="submit" value="Go">
</form>

<div>
    <?php echo $q; ?>
</div>
