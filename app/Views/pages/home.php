<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<p class="eyebrow">Point of sale foundations</p>
<h1>A clear view of the people behind every transaction.</h1>
<p class="lead">Northstar POS is a simple CodeIgniter application for viewing customer and staff account records while the full sales system is being built.</p>
<div class="actions">
    <a class="button" href="<?= site_url('customers') ?>">View customers</a>
    <a class="button secondary" href="<?= site_url('users') ?>">View users</a>
</div>
<section class="grid" aria-label="Application overview">
    <article class="card">
        <h2>Customer accounts</h2>
        <p>Review customer names, email addresses, and phone numbers in one organized list.</p>
    </article>
    <article class="card">
        <h2>User accounts</h2>
        <p>See the staff members who operate the store and the role assigned to each account.</p>
    </article>
    <article class="card">
        <h2>MVC structure</h2>
        <p>Routes, controllers, and views keep page behavior and presentation easy to understand.</p>
    </article>
</section>
<?= $this->endSection() ?>
