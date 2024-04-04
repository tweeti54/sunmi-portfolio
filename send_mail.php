<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    $to = 'tweeti54@gmail.com'; // 여기에 실제 수신받을 이메일 주소를 입력하세요.
    $subject = "Mail from Sunmi's Portfolio Site by $name";
    $mailBody = "<h2>Sender Name: $name</h2>";
    $mailBody .= "<div>Email: $email<br/>";
    $mailBody .= "Phone: $phone</div>";
    $mailBody .= "<p>Message:<br/>$message</p>";

    $headers = "From: $email" . "\r\n" . 
    "Reply-To: $email" . "\r\n" . 
    "MIME-Version: 1.0" . "\r\n" . 
    "Content-type:text/html;charset=UTF-8" . "\r\n" . 
    "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $mailBody, $headers)) {
        $_SESSION['message'] = 'Mail sent successfully!';
        header('Location: https://jncweb.net/portfolio');
        exit;
    } else {
        echo "Mail could not be sent.";
    }
} else {
    $_SESSION['message'] = "Oops! Something went wrong and we couldn't send your message.";
    header('Location: https://jncweb.net/portfolio');
}
