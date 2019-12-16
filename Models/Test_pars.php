<?php
include 'Components/Curl.php';
include 'Components/simplehtmldom_1_9/simple_html_dom.php';

set_time_limit(0);
ini_set("memory_limit", "512M");

for ($i = 0; $i < 33; $i++) {
    $html = file_get_html('https://www.marathonbet.ru/su/events.htm?id=11&page=' . $i);
    $dom = str_get_html($html);
    $commands = $dom->find('table.coupon-row-item a');

    foreach ($commands as $command) {


        $tobd['command'] = $command->plaintext;

        $href = file_get_html('https://www.marathonbet.ru' . $command->href);
        $href_dom = str_get_html($href);

        $all = $href_dom->find('div.category-container', 0);
        $tobd['html'] = $all;


        $table = $dbh->prepare("INSERT INTO test_pars (command, html) VALUES (:command,:html)");
        $table->bindParam(':command', $tobd['command']);
        $table->bindParam(':html', $tobd['html']);

        $table->execute();



    }
}