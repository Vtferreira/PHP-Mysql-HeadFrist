<html>
<head>
    <title>Aliens Abducted Me - Report an Abduction </title>
</head>
<body>
    <h2>Aliens Abducted Me - Report an Abduction</h2>

    <?php

        $when_it_happened = $_POST['whenithappened'];
        $how_long = $_POST['howlong'];
        $alien_description = $_POST['aliendescription'];
        $fang_spooted = $_POST['fangspooted'];
        $email = $_POST['email'];

        echo 'Thanks for submitting the form. <br />';
        echo 'You were abducted'. $when_it_happened . '<br/>';
        echo 'and where gone for'. $how_long . '<br/>';
        echo 'Describe them:'. $alien_description . '<br/>';
        echo 'Was Fang there ?' . $fang_spooted . '<br />';
        echo 'Your e-mail addres is' . $email;

    ?>
</body>
</html>