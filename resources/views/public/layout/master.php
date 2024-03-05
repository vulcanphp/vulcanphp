<!DOCTYPE html>
<html lang="<?= __lang() ?>" data-bs-theme="dark" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->getBlock('title') ?></title>
    <?= mixer()
        ->npm('css', 'bootstrap')
        ->deque('css')
    ?>
</head>

<body class="h-100">

    {{content}}

</body>

</html>