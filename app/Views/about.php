<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<p class="eyebrow">The developer</p>
<h1>About <em>this system</em></h1>

<div class="profile">
    <div class="avatar">J</div>
    <div>
        <h2>James Benedict Zuniga</h2>
        <p class="muted">BSIT · 2nd Year · Far Eastern University</p>
    </div>
</div>

<p class="lead">
    The Tasks for Today Management System was designed and developed by James Benedict Zuniga
    as Technical Summative Assessment 1 for IT0049 (Web System Technologies).
</p>

<dl class="facts">
    <dt>Framework</dt> <dd class="mono">CodeIgniter 4 (MVC)</dd>
    <dt>Language</dt>  <dd class="mono">PHP</dd>
    <dt>Database</dt>  <dd class="mono">MySQL (tasks, users)</dd>
    <dt>Pages</dt>     <dd class="mono">Welcome · Task List · Profile · About</dd>
</dl>

<?= $this->endSection() ?>
