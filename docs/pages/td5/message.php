


<div>
    <a href="?msg=Message 1">Message 1</a>
    <a href="?msg=Message 2">Message 2</a>
    <a href="?msg=Message 3">Message 3</a>

    <?php
    $defautmsg= "Message par defaut.";
    $msg = isset($_GET['msg']) ? $_GET['msg'] : $defautmsg;

    echo "<h1>$msg</h1>";
    ?>
</div>

