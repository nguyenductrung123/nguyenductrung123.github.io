<html>
  <head>
    <title>Aliens Abducted Me - Report an Abduction</title>
  </head>
  <body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>
    <?php
    $name = $_POST['firstname'] .' '. $_POST['lastname'];
    $how_many = $_POST['howmany'];
    $what_they_did = $_POST['whattheydid'];
    $other = $_POST['other'];
    $when_its_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $alien_description = $_POST['aliendescription'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
    $to = 'trungnguyen@utexas.edu';
    $subject = 'Aliens abducted me - Abduction report';
    $msg = "$name was abducted $when_its_happened and was gone for $how_long.\n" .
    "Number of aliens: $how_many\n" .
    "Alien description: $alien_description\n".
    "What they did: $what_they_did\n" .
    "Fang spotted: $fang_spotted\n" .
    "Other comments: $other";
    $cc = 'nguyenductrung.samihust@gmail.com';

    mail($to, $subject, $msg, 'From:'.$email ."\r\nCc:".$cc);

    echo 'Thanks for submitting the form.<br />';
    echo 'You were abducted ' . $when_its_happened;
    echo ' and were gone for ' . $how_long .'<br />';
    echo 'Number of aliens: ' . $how_many . '<br />';
    echo 'Describe them: ' . $alien_description . '<br />';
    echo 'The aliens did this: '. $what_they_did.'<br />';
    echo 'Was Fang there? ' . $fang_spotted . '<br />';
    echo 'Other comments: ' . $other.'<br/>';
    echo 'Your email address is ' . $email;
    ?>
  </body>
</html>