<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Sem título') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto px-2 py-2 border rounded my-5">
        <h1><?= htmlspecialchars($title) ?></h1>
        <?php if (isset($message['status']) && $message['status'] == 'error') { ?>
            <p class="text-danger">* <?= htmlspecialchars($message['txt']) ?></p>
        <?php } ?>
        <form action="remove" method="POST">
            <div class="mb-3">
                <h2 class="px-5"></h2>
            </div>
            <input type="hidden" name="id" value="<?= htmlspecialchars($param ?? '') ?>">
            <h1 class="text-center">Atenção!</h1>
            <p class="text-center">Essa ação é irreversível, que deseja mesmo excluir este usuário?</p>
            <div class="d-flex justify-content-center gap-2">
                <a href="listar" class="btn btn-warning">Voltar</a>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>