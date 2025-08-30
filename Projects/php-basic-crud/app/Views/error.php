<?php include 'partials/header.php'; ?>

<div class="error-page">
    <div class="error-icon">
        <span>❌</span>
    </div>
    <h1 class="error-title">Oops! Page Not Found</h1>
    <div class="error-code">Error 404</div>
    <p class="error-message">
        <?php echo htmlspecialchars($title ?? 'The page you are looking for does not exist'); ?>. 
        Please check the URL and try again.
    </p>
    <div class="error-actions">
        <a href="<?php echo url('home'); ?>" class="btn btn-primary hero-btn">
            🏠 Go Home
        </a>
    </div>
</div>

<?php include 'partials/footer.php'; ?>