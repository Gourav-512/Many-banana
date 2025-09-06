<?php
session_start();
include("../includes/db_connection.php");
include("../includes/header.php");
include("../includes/footer.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../pages/login.php");
    exit();
}

$imagePath = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userId = $_SESSION['user_id'];
    $prompt = $_POST['image_prompt'];

    // Call Python script for image generation
    $imagePath = shell_exec("python3 ../ai_services/image_generation.py " . escapeshellarg($prompt));

    // Log the request into the database
    $stmt = $conn->prepare("INSERT INTO image_generation_logs (user_id, prompt, image_path) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $userId, $prompt, $imagePath);
    $stmt->execute();
    $stmt->close();
}
?>

<div class="container">
    <h1>Image Generation</h1>
    <form method="POST">
        <input type="text" name="image_prompt" placeholder="Enter prompt for image generation..." required>
        <button type="submit">Generate</button>
    </form>
    <?php if ($imagePath) { ?>
        <div class="output-box">
            <h3>Generated Image:</h3>
            <img src="../generated_images/<?php echo htmlspecialchars($imagePath); ?>" alt="Generated Image">
        </div>
    <?php } ?>
</div>
