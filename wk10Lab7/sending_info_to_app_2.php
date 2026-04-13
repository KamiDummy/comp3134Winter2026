<?php
$q = isset($_GET['q']) ? $_GET['q'] : "";
$safe_q = htmlentities($q, ENT_QUOTES, 'UTF-8');
?>

<form method="get">
    <input name="q" placeholder="Enter Text">
    <br/>
    <input type="submit" value="Go">
</form>

<div>
    <?php echo $safe_q; ?>
</div>
