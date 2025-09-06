<?php include '../includes/header.php'; ?>

<div class="service-page">
    <h2>Text Generation</h2>
    <form method="POST">
        <textarea name="prompt" placeholder="Enter your prompt here..." rows="4"></textarea>
        <button type="submit">Generate</button>
    </form>
    <div class="output">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $prompt = $_POST['prompt'];
            echo "<p>Generated Text: AI-powered text for '$prompt'</p>";
        }
        ?>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
