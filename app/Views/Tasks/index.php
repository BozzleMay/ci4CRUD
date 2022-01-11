<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>

    Tasks

<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1>Tasks</h1>    
    <a href="<?= site_url('/tasks/new') ?>">Add New Task</a>
    <ul>
        <?php foreach($tasks as $task): ?>
           <li>  <a href="<?= site_url("/tasks/show/" . $task->id) ?>" >
            <?= esc($task->description) ?></li>
        <?php endforeach; ?>

    </ul>

<?= $this->endSection() ?>
