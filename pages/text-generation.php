<?php
session_start();
include("../includes/db_connection.php");
include("../includes/header.php");
include("../includes/footer.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

$output = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_SESSION['user_id'];
    $inputText = $_POST['input_text'];

    // Call Python script for text generation
    $output = shell_exec("python3 ../ai_services/text_generation.py " . escapeshellarg($inputText));

    // Log the result into the database
    $stmt = $conn->prepare("INSERT INTO text_generation_logs (user_id, input_text, generated_text) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $userId, $inputText, $output);
    $stmt->execute();
    $stmt->close();
}
?>

<div class="container">
    <h1>Text Generation</h1>
    <form method="POST">
        <textarea name="input_text" placeholder="Enter text here..." required></textarea>
        <button type="submit">Generate</button>
    </form>
    <?php if ($output) { ?>
        <div class="output-box">
            <h3>Generated Text:</h3>
            <p><?php echo htmlspecialchars($output); ?></p>
        </div>
    <?php } ?>
</div>
