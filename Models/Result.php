<?php

$table = $dbh->query("SELECT id,command FROM test_pars ");

while ($row = $table->fetch(PDO::FETCH_ASSOC)) {

    echo ' <a href="?match_id=' . $row['id'] . '">' . $row['command'] . '</a> ' . '<br>';

}