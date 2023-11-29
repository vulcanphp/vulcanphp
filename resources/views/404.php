<!DOCTYPE html>
<html lang="<?= __lang() ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <?= mixer()
        ->npm('css', 'bootstrap')
        ->deque('css')
    ?>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="py-5 my-5 text-center">
                    <h1 class="text-warning" style="font-weight: bolder; font-size:85px">404</h1>
                    <h1>Page Not Found</h1>
                    <p class="mt-4 lead">We can't seem to find what you were looking for, that might be deleted or does not exist any more.</p>
                    <a href="<?= home_url() ?>" class="btn btn-primary">Got Back Home</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>