<?php
$a = $_GET['match_id'];
$keyword='ap';
$sql="SELECT id,html FROM `test_pars` WHERE `id` = '$a'";
$q=$dbh->prepare($sql);
$q->execute();
while ($r=$q->fetch(PDO::FETCH_ASSOC)) {
    echo"<pre>".print_r($r,true)."</pre>";
}