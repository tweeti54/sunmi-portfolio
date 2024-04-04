<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);
    
    // 이메일을 받을 주소
    $to = "tweeti54@gmail.com";
    $subject = "New message from your portfolio website: $name";
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";
    
    $email_headers = "From: $name <$email>";

    $headers = "From: $name <$email>" . "\r\n" . // 보내는 사람의 이메일 주소를 입력하세요.
    "Reply-To: $email" . "\r\n" . // 답장 받을 이메일 주소를 입력하세요.
    'X-Mailer: PHP/' . phpversion();

    if(mail($to, $subject, $email_content, $headers)) {
        $_SESSION['message'] = 'Mail sent successfully!';
        header('Location: https://jncweb.net/portfolio');
        exit;
    } else {
        echo "<p>Oops! Something went wrong and we couldn't send your message.</p>";
    }
} else {
    echo "<p>There was a problem with your submission, please try again.</p>";
}
?>
<?php
// if($_SERVER["REQUEST_METHOD"] == "POST") {
//     $emailto = 'tweeti54@gmail.com';
//     $toname = 'Sunmi Chang';
//     $emailfrom = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
//     $fromname = strip_tags(trim($_POST["name"]));
//     $subject = 'Email Subject';
//     $messagebody = trim($_POST["message"]);
//     $headers = 
//         'Return-Path: ' . $emailfrom . "\r\n" . 
//         'From: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" . 
//         'X-Priority: 3' . "\r\n" . 
//         'X-Mailer: PHP ' . phpversion() .  "\r\n" . 
//         'Reply-To: ' . $fromname . ' <' . $emailfrom . '>' . "\r\n" .
//         'MIME-Version: 1.0' . "\r\n" . 
//         'Content-Transfer-Encoding: 8bit' . "\r\n" . 
//         'Content-Type: text/plain; charset=UTF-8' . "\r\n";
//     $params = '-f ' . $emailfrom;
//     $test = mail($emailto, $subject, $messagebody, $headers, $params);
//     // $test should be TRUE if the mail function is called correctly
//     echo $test ? "Mail sent successfully" : "Your mail could not be sent";
// } else {
//     echo "<p>There was a problem with your submission, please try again.</p>";
// }
?>