
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
 
<?php include 'G:\NEW XAMPP\htdocs\AI_TOOLS\includes\header.php'; ?> 

<!-- Main Section  -->
<main class="main-content">
<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <div class="container">
            <h2 class="section-title">Explore AI Services</h2>
            <div class="card-container">
                <!-- ++ Chatbot ++ -->
                <div class="card animated-card">
                    <h3>Chatbot</h3>
                    <p>Interact with a conversational AI chatbot.</p>
                    <a href="pages/Chatbot.php" class="btn">Explore</a>
                </div>

                <!-- ++ Image Generation ++ -->
                <div class="card animated-card">
                    <h3>Image Generation</h3>
                    <p>Generate stunning images using AI.</p>
                    <a href="pages/Image Generation.php" class="btn">Explore</a>
                </div>

                <!-- ++ Sentiment Analysis ++- -->
                <div class="card animated-card">
                    <h3>Sentiment Analysis</h3>
                    <p>Analyze sentiments from text data.</p>
                    <a href="pages/sentiment-analysis.php" class="btn">Explore</a>
                </div>

                <!-- ++ Summarization ++ -->
                <div class="card animated-card">
                    <h3>Summarization</h3>
                    <p>Summarize lengthy text easily.</p>
                    <a href="pages/Summarization.php" class="btn">Explore</a>
                </div>

               <!-- ++= Text Generation __+= -->
                <div class="card animated-card">
                    <h3>Text Generation</h3>
                    <p>Create AI-based text effortlessly.</p>
                    <a href="pages/text-generation.php" class="btn">Explore</a>
                </div>

        <!-- ++ Translation ++ -->
                <div class="card animated-card">
                    <h3>Translation</h3>
                    <p>Translate text between languages.</p>
                    <a href="pages/Translation.php" class="btn">Explore</a>
                </div>

                <!-- +++ Story Generator  -->
                <div class="card animated-card">
                    <h3>Story Generator</h3>
                    <p>Generate creative AI-based stories.</p>
                    <a href="pages/story-generator.php" class="btn">Explore</a>
                </div>
            </div>
        </div>
    </main>

<?php include 'G:\NEW XAMPP\htdocs\AI_TOOLS\includes\footer.php'; ?>
