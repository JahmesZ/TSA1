<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<?php
$done = count(array_filter($tasks, static fn ($t) => $t['status'] === 'done'));
?>
<p class="eyebrow"><?= esc($today) ?></p>
<h1>Today's <em>Tasks</em></h1>
<p class="lead">
    <?= count($tasks) ?> task<?= count($tasks) === 1 ? '' : 's' ?> scheduled for today
    <?= $tasks ? "· {$done} completed" : '' ?>
</p>

<?php if (empty($tasks)): ?>
    <div class="empty">Nothing scheduled for today. Enjoy the quiet.</div>
<?php else: ?>
    <ul class="cards">
        <?php foreach ($tasks as $t): ?>
            <li class="card">
                <span class="mono idx">#<?= esc($t['id']) ?></span>
                <span class="title"><?= esc($t['title']) ?></span>
                <span class="badge <?= esc(str_replace(' ', '-', $t['status'])) ?>"><?= esc($t['status']) ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<p class="hint"><a href="<?= base_url('tasks') ?>">View every task →</a></p>

<?= $this->endSection() ?>
