<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="section-header">
    <div>
        <p class="eyebrow">Directory</p>
        <h1>Customer Accounts</h1>
    </div>
    <span class="count"><?= count($customers) ?> customers</span>
</div>
<div class="panel">
    <table>
        <thead><tr><th scope="col">Full name</th><th scope="col">Email address</th><th scope="col">Phone number</th></tr></thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td class="primary-cell"><?= esc($customer['full_name']) ?></td>
                <td><a href="mailto:<?= esc($customer['email'], 'attr') ?>"><?= esc($customer['email']) ?></a></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
