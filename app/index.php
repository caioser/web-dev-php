<?php 
    echo '<h1>Hello World!</h1>';
    try {
        $dbh = new PDO('mysql:host=database', 'root', 'inapple');
        print_r("<div>Mysql connection OK</div>");
        $dbh = null;
    } catch (PDOException $e) {
        print "Mysql connection Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    echo '<br><br><br><br>';
    phpinfo();
?> 
