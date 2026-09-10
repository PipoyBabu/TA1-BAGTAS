<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A four-page CodeIgniter point-of-sale foundation project.">
    <title><?= esc($title) ?> | Northstar POS</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js" defer></script>
    <script src="<?= base_url('assets/js/app.js') ?>" defer></script>
</head>
<body>
<header class="site-header">
    <div class="nav-wrap">
        <a class="brand" href="<?= site_url('/') ?>"><span class="brand-mark">N</span> Northstar POS</a>
        <nav class="site-nav" aria-label="Primary navigation">
            <a href="<?= site_url('/') ?>" <?= $activePage === 'home' ? 'aria-current="page"' : '' ?>>Home</a>
            <a href="<?= site_url('about') ?>" <?= $activePage === 'about' ? 'aria-current="page"' : '' ?>>About</a>
            <a href="<?= site_url('customers') ?>" <?= $activePage === 'customers' ? 'aria-current="page"' : '' ?>>Customers</a>
            <a href="<?= site_url('users') ?>" <?= $activePage === 'users' ? 'aria-current="page"' : '' ?>>Users</a>
        </nav>
    </div>
</header>
<main>
    <?= $this->renderSection('content') ?>
</main>
<footer>&copy; <?= date('Y') ?> Northstar POS. Built with CodeIgniter 4.</footer>
</body>
</html>
