# TA1 Northstar POS Foundations

A four-page CodeIgniter 4 application created for the IT0049 laboratory activity. It demonstrates explicit routes, controllers, reusable views, and temporary static-array data sources without a database.

## Pages

- `/` - landing page
- `/about` - project overview
- `/customers` - five customer account records
- `/users` - five staff account records

## Requirements

- PHP 8.1 or newer
- PHP `intl` and `mbstring` extensions
- Node.js and npm for compiling SASS
- Apache with `mod_rewrite`, or CodeIgniter's local development server

## Run with XAMPP

1. Place the project at `C:\xampp\htdocs\TA1`.
2. Start Apache from the XAMPP Control Panel.
3. Visit `http://localhost/TA1/`.

The included `.env` uses that URL as `app.baseURL`. Update it if the folder name or host changes.

## Run with CodeIgniter's development server

From the project directory, run:

```console
php spark serve
```

Then change `app.baseURL` in `.env` to `http://localhost:8080/` and visit that address.

## Project structure

- `app/Config/Routes.php` maps the four URLs to controller methods.
- `app/Controllers` contains the Pages, Customers, and Users controllers.
- `app/Views` contains the shared layout and four page views.
- `assets/scss/app.scss` is the SASS source for the interface.
- `public/assets/css/app.css` is the compiled external stylesheet.
- `public/assets/js/app.js` contains the GSAP page and interaction animations.
- Customer and user records are temporary arrays defined in their controllers.

## Frontend development

Install the SASS compiler once:

```console
npm install
```

Compile the production CSS after changing the SASS source:

```console
npm run build:css
```

During development, automatically rebuild CSS when the SASS source changes:

```console
npm run watch:css
```

GSAP 3.13 is loaded from jsDelivr in the shared layout. Animations respect the browser's reduced-motion preference.

## Database

This activity does not use a database, so no database export is required for this version.
