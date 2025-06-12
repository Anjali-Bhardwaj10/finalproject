<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php include 'includes/functions.php'; ?> <!-- Added this line -->

<main>
    <h2>Latest Listings</h2>
    <div class="listing-grid">
        <?php
        $stmt = $pdo->query("SELECT id, title, price FROM listings ORDER BY created_at DESC LIMIT 6");
        while ($row = $stmt->fetch()):
        ?>
            <div class="listing-card">
                <h3><?= sanitize($row['title']) ?></h3>
                <p>₹<?= $row['price'] ?></p>
                <a href="market/view_item.php?id=<?= $row['id'] ?>">View</a>
            </div>
        <?php endwhile; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

