<?php
include('../includes/header.php');
include('../includes/db_connection.php');
?>

<div class="service-container">
    <div class="card">
        <h2>Story Generator</h2>
        <form action="" method="POST">
            <textarea name="input_text" placeholder="Enter a prompt for your story" required></textarea>
            <button type="submit" name="generate_story">Generate Story</button>
        </form>
    </div>

    <?php
    if (isset($_POST['generate_story'])) {
        $input_text = $_POST['input_text'];
        $user_id = $_SESSION['user_id'];
        $output = shell_exec("python ../ai_services/story_generator.py " . escapeshellarg($input_text));
        
        // Save log to DB
        $stmt = $conn->prepare("INSERT INTO story_generator_logs (user_id, input_text, generated_story) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $user_id, $input_text, $output);
        $stmt->execute();
        echo "<div class='result'><h3>Generated Story:</h3><p>$output</p></div>";
    }
    ?>
</div>

<?php include('../includes/footer.php'); ?>
