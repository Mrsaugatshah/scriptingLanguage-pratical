<!DOCTYPE html>
<html>

<body>

    <h2>Send Email</h2>

    <form method="post">
        Email:
        <input type="email" name="email" required><br><br>

        Subject:
        <input type="text" name="subject" required><br><br>

        Message:<br>
        <textarea name="message" required></textarea><br><br>

        <input type="submit" value="Send Email">
    </form>

    <?php
    if (isset($_POST['email'])) {

        $to = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        mail($to, $subject, $message);

        echo "Email sent successfully!";
    }
    ?>

</body>

</html>