<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="section-header">
    <div>
        <p class="eyebrow">Team directory</p>
        <h1>User Accounts</h1>
    </div>
    <span class="count"><?= count($users) ?> users</span>
</div>
<div class="panel">
    <table>
        <thead><tr><th scope="col">Username</th><th scope="col">Full name</th><th scope="col">Role</th></tr></thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td class="primary-cell"><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><span class="badge"><?= esc($user['role']) ?></span></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
