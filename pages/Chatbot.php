<?php
session_start();
include("../includes/db_connection.php");
include("../includes/header.php");
include("../includes/footer.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

$botReply = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_SESSION['user_id'];
    $userMessage = $_POST['user_message'];

    // Call Python script for chatbot
    $botReply = shell_exec("python3 ../ai_services/chatbot.py " . escapeshellarg($userMessage));

    // Log the interaction
    $stmt = $conn->prepare("INSERT INTO chatbot_logs (user_id, user_message, bot_reply) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $userId, $userMessage, $botReply);
    $stmt->execute();
    $stmt->close();
}
?>

<div class="container">
    <h1>Chatbot</h1>
    <form method="POST">
        <input type="text" name="user_message" placeholder="Type your message here..." required>
        <button type="submit">Send</button>
    </form>
    <?php if ($botReply) { ?>
        <div class="output-box">
            <h3>Chatbot Reply:</h3>
            <p><?php echo htmlspecialchars($botReply); ?></p>
        </div>
    <?php } ?>
</div>
