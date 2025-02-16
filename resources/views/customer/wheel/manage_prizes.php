<?php
// manage_prizes.php
// ------------------------------------------------------
// Replace with your own DB credentials
$servername = 'localhost';
$username = 'u413666390_wheel';
$password = 'PyraDev1*';
$dbname = 'u413666390_wheel';
// Connect with PDO
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Error: " . $e->getMessage());
}

// Insert new prize if posted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prizeName = $_POST['prize_name'] ?? '';
    if (!empty($prizeName)) {
        $stmt = $pdo->prepare("INSERT INTO prizes (prize_name) VALUES (:prizeName)");
        $stmt->bindParam(':prizeName', $prizeName);
        $stmt->execute();
        echo "<p style='color: green;'>Prize added!</p>";
    }
}

// Reset a prize if 'reset_id' is passed in GET
if (isset($_GET['reset_id'])) {
    $resetId = (int)$_GET['reset_id'];
    $stmt = $pdo->prepare("UPDATE prizes SET taken=0 WHERE id=:id");
    $stmt->bindParam(':id', $resetId);
    $stmt->execute();
    echo "<p style='color: green;'>Prize #{$resetId} reset!</p>";
}

// Fetch all prizes
$stmt = $pdo->query("SELECT * FROM prizes ORDER BY id DESC");
$allPrizes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Prizes</title>
</head>
<body>
    <h1>Insert New Prize</h1>
    <form action="" method="POST">
        <label for="prize_name">Prize Name:</label>
        <input type="text" name="prize_name" id="prize_name" required>
        <button type="submit">Add Prize</button>
    </form>

    <h2>Existing Prizes</h2>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Prize Name</th>
            <th>Taken?</th>
            <th>Reset</th>
        </tr>
        <?php foreach($allPrizes as $prize): ?>
        <tr>
            <td><?= $prize['id'] ?></td>
            <td><?= htmlspecialchars($prize['prize_name']) ?></td>
            <td><?= $prize['taken'] ? 'Yes' : 'No' ?></td>
            <td>
                <?php if($prize['taken'] == 1): ?>
                    <a href="?reset_id=<?= $prize['id'] ?>"
                       onclick="return confirm('Reset this prize?')">
                       Reset
                    </a>
                <?php else: ?>
                    --
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="/wheel/new/">Go to Spin Wheel</a></p>
</body>
</html>
