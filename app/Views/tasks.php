<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<p class="eyebrow">Complete listing</p>
<h1>All <em>Tasks</em></h1>
<p class="lead"><?= count($tasks) ?> records, ordered by date.</p>

<?php if (empty($tasks)): ?>
    <div class="empty">No tasks found. Run the seeder or import the SQL file.</div>
<?php else: ?>
    <div class="table-wrap">
        <table>
            <thead>
                <tr><th>#</th><th>Task</th><th>Date</th><th>Status</th></tr>
            </thead>
            <tbody>
                <?php foreach ($tasks as $t): ?>
                    <tr class="<?= $t['task_date'] === $today ? 'is-today' : '' ?>">
                        <td class="mono"><?= esc($t['id']) ?></td>
                        <td><?= esc($t['title']) ?></td>
                        <td class="mono">
                            <?= esc(date('M j, Y', strtotime($t['task_date']))) ?>
                            <?= $t['task_date'] === $today ? '<span class="tag">today</span>' : '' ?>
                        </td>
                        <td><span class="badge <?= esc(str_replace(' ', '-', $t['status'])) ?>"><?= esc($t['status']) ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
