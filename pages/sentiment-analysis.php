<?php
include('../includes/header.php');
include('../includes/db_connection.php');
?>

<div class="service-container">
    <div class="card">
        <h2>Sentiment Analysis</h2>
        <form action="" method="POST">
            <textarea name="input_text" placeholder="Enter text for sentiment analysis" required></textarea>
            <button type="submit" name="analyze_sentiment">Analyze Sentiment</button>
        </form>
    </div>

    <?php
    if (isset($_POST['analyze_sentiment'])) {
        $input_text = $_POST['input_text'];
        $user_id = $_SESSION['user_id'];
        $output = shell_exec("python ../ai_services/sentiment_analysis.py " . escapeshellarg($input_text));
        
        // Save log to DB
        $stmt = $conn->prepare("INSERT INTO sentiment_analysis_logs (user_id, input_text, sentiment_result) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $user_id, $input_text, $output);
        $stmt->execute();
        echo "<div class='result'><h3>Sentiment Analysis Result:</h3><p>$output</p></div>";
    }
    ?>
</div>

<?php include('../includes/footer.php'); ?>
