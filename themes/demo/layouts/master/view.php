<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= phpb_e($page->get('title')) ?></title>

    <link href="<?= phpb_theme_asset('css/style.css') ?>" rel="stylesheet">
</head>

<body>

<?= $body ?>

<script src="<?= phpb_theme_asset('js/app.js') ?>"></script>

<!-- Run PHPageBuilder script.js files -->
<script type="text/javascript">
    document.querySelectorAll("script").forEach(function(scriptTag) {
        scriptTag.dispatchEvent(new Event('run-script'));
    });
</script>
</body>
</html>
