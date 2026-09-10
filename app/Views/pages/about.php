<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="about-copy">
    <p class="eyebrow">About the project</p>
    <h1>A small POS foundation with a clean MVC structure.</h1>
    <p class="lead">This first version demonstrates how CodeIgniter turns routes into controller actions and controller data into reusable views.</p>
    <h2>How it works</h2>
    <p>The application defines a route for each page. A controller handles the request, prepares any required data, and loads a view that renders the final HTML response.</p>
    <h2>Current scope</h2>
    <p>Customer and user records are stored in temporary PHP arrays. No database is required at this stage, making it easier to focus on routing, controllers, views, and safe output escaping.</p>
    <h2>Included pages</h2>
    <ul>
        <li>Landing page with quick links to the account lists</li>
        <li>About page explaining the project and MVC flow</li>
        <li>Customer Accounts page with contact information</li>
        <li>User Accounts page with staff roles</li>
    </ul>
</div>
<?= $this->endSection() ?>
