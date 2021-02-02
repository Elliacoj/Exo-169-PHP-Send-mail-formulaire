<?php
function mailSend() {
    if(isset($_POST['message'], $_POST['mail'])) {
        $message = strip_tags(trim($_POST['message']));
        $to = strip_tags(trim($_POST['mail']));

        if(mail($to, "Bonjour", $message)) {
            echo "Mail bien envoyé";
        }
        else {
            echo "Mail non envoyé";
        }
    }
}

mailSend();