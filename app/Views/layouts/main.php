<?php
$links = ['' => 'Today', 'tasks' => 'All Tasks', 'profile' => 'Profile', 'about' => 'About'];
$current = trim(service('uri')->getRoutePath(), '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($title ?? 'Tasks for Today') ?> · Tasks for Today</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header class="topbar">
        <a class="brand" href="<?= base_url() ?>">Tasks <em>for</em> Today</a>
        <nav>
            <?php foreach ($links as $path => $label): ?>
                <a href="<?= base_url($path) ?>" class="<?= $current === $path ? 'active' : '' ?>"><?= $label ?></a>
            <?php endforeach; ?>
        </nav>
    </header>

    <main class="wrap">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="foot">IT0049 · Web System Technologies · TSA1 · Built with CodeIgniter 4</footer>
</body>
</html>
