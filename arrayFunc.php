<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PHP Arrays and Funcs</title>
    <style type="text/css">
    html,body{font-size: 26px}
    </style>
  </head>
  <body>
    <?php
    $messages = array(
        "one day at a time",
        "keep going",
        "believe"
    );
    function getMessage($r) {
        global $messages;
        return $messages[r];
    }

    $randnum = rand(0, count($messages)-1);
    $msg = getMessage($randnum);
    echo("<h2>$msg</h2>");
    >
  </body>
</html>
