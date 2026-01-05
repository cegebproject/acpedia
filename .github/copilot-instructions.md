# Copilot instructions — ACPedia (CodeIgniter 4)

Purpose
- Help AI coding agents become productive quickly in this repository.

Big picture (what to know)
- This is a CodeIgniter 4 style MVC app under `app/`.
- Key folders: `app/Controllers` (HTTP controllers), `app/Models` (data layer), `app/Views` (PHP view templates), `app/Config` (framework and app settings), `app/Database/Migrations` (DB migrations), `app/Filters` (request filters).
- Routing: see `app/Config/Routes.php` mapping URL paths to controller methods (example: `admin/produk` → `AdminProduct::index`).
- Controllers extend `BaseController` (`app/Controllers/BaseController.php`) and should use `initController()` to preload helpers/services.

Conventions & patterns (project-specific)
- Controllers return strings and render views via `return view('view_name')` (see `app/Controllers/AdminProduct.php`).
- Views are plain PHP files in `app/Views`; template files include `template.php` and `template-main.php` which expect assets under `/assets/`.
- View filenames use snake_case like `admin_product_list.php`, `admin_product_add.php`.
- Auth is enforced via a route group with the `auth` filter (`app/Filters/AuthFilter.php`) — add routes to the locked group when the route requires login.
- Data access: `app/Models` holds model classes. `ProductModel.php` currently empty — prefer using CI4's Model/Query Builder or `\\Config\\Database`/`service('db')` when direct queries are needed.

Developer workflows (discoverable from repo)
- No `composer.json`, `spark` or other build/test scripts were found in the repository root — verify locally before running automated commands.
- Typical CodeIgniter dev options (verify presence before using): run framework CLI `php spark serve` from project root, or use PHP built-in web server pointing at the public/webroot. If unsure, ask the repo owner for the intended entry point.

Files to inspect for context when changing code
- Routing and endpoint layout: `app/Config/Routes.php`
- Global app settings: `app/Config/App.php`
- Auth and request guards: `app/Filters/AuthFilter.php`
- Controller base behavior: `app/Controllers/BaseController.php`
- Views and templates: `app/Views/template.php`, `app/Views/template-main.php`
- Database migrations: `app/Database/Migrations/` (apply changes here when altering schema)

How to make safe changes
- When adding routes, follow existing pattern: add public route entries and put auth-protected routes inside the group guarded by `auth` in `Routes.php`.
- New controllers: extend `BaseController`, keep controllers thin (prepare data and return `view()`), and place model logic inside `app/Models`.
- When adding models, prefer CodeIgniter Model conventions (protected `$table`, `$primaryKey`, use `$allowedFields`). If performing complex queries, use Query Builder via `db_connect()`/`service('db')`.

Examples from repo
- Route example: `app/Config/Routes.php` contains:
  - `$routes->get('admin/produk', 'AdminProduct::index');`
- Controller example: `app/Controllers/AdminProduct.php` uses `return view('admin_product_list');` and `return view('admin_product_add');` for list/add pages.

If anything is unclear
- Ask the repo owner which script (if any) is used to run the app locally (e.g., `spark`, `composer start`, or a Docker setup).
- Confirm expected database connection details and where `writable/` logs are stored if you need to run migrations or debug runtime errors.

Follow up
- I created this guidance file to get started — tell me which areas you want expanded (deployment, migrations, tests, CI), and I'll iterate.
