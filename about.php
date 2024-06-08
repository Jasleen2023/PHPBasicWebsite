<!-- /about.php -->
 <?php include 'includes/header.php';?>
 <main>
    <h1>About Us</h1>
    <?php
    $team=[
    ["name"=> "Simran Kaur","role"=>"CEO"],
    ["name"=> "Gagan Padda","role"=>"CIO"],
    ["name"=> "Jasleen Kaur", "role" => "CFO"],
    ["name"=> "Amanpreet Kaur", "role" => "Judge"],
    ];
    ?>
    <h2>Our Team</h2>
    <ul>
    <?php foreach ($team as $member): ?>
            <li><?= $member['name'] ?> - <?= $member['role'] ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'includes/footer.php'; ?>