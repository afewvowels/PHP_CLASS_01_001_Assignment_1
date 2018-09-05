<!doctype html>

<html>
  <head>
    <title>My first PHP assignment</title>
  </head>
  <body>
    <?php
    # Author: Keith Smith
    # This is my first PHP document, which displays
    # some data in the web browser

    $myName = "Keith Smith";
    $randomNumber = 53870;
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $fileName = $_SERVER['PHP_SELF'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];

    echo "$myName<br />";
    echo "$randomNumber<br />";
    echo "Hello world<br />";
    echo "$userAgent<br />";
    echo "$fileName<br />";
    echo "$ipAddress<br />";
    ?>
  </body>

</html>
