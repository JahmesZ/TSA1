<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<p class="eyebrow">Demo account</p>
<h1>User <em>Profile</em></h1>

<?php if (empty($user)): ?>
    <div class="empty">No user record found. Run the seeder or import the SQL file.</div>
<?php else: ?>
    <div class="profile">
        <div class="avatar"><?= esc(strtoupper(substr($user['full_name'], 0, 1))) ?></div>
        <div>
            <h2><?= esc($user['full_name']) ?></h2>
            <p class="mono muted">@<?= esc($user['username']) ?></p>
        </div>
    </div>
    <dl class="facts">
        <dt>User ID</dt>      <dd class="mono"><?= esc($user['id']) ?></dd>
        <dt>Username</dt>     <dd class="mono"><?= esc($user['username']) ?></dd>
        <dt>Full name</dt>    <dd><?= esc($user['full_name']) ?></dd>
        <dt>Email</dt>        <dd class="mono"><?= esc($user['email']) ?></dd>
        <dt>Member since</dt> <dd class="mono"><?= esc(date('F j, Y · g:i A', strtotime($user['created_at']))) ?></dd>
    </dl>
<?php endif; ?>

<?= $this->endSection() ?>
