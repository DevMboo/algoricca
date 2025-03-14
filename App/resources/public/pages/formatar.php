<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Calculadora') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mx-auto px-2 py-2 border rounded my-5">
        <h1><?= htmlspecialchars($title ?? 'Calculadora') ?></h1>
        
        <!-- Formulário que envia dados via POST para o script que processa a formatação -->
        <form action="formated" method="POST">
            <!-- Campo para o valor 'a' -->
            <div class="mb-3">
                <label for="txt" class="form-label">Digite qualquer texto de sua preferencia</label>
                <input type="text" name="txt" class="form-control" id="txt" value="<?= $message['txt'] ?? '' ?>" required>
            </div>

            <?php if (isset($message['status']) && $message['status'] == 'success') { ?>
                <h1 class="text-success">Formatar string: <?= htmlspecialchars($message['txt']) ?></h1>
            <?php } ?>

            <!-- Botão para submeter o formulário -->
            <button type="submit" class="btn btn-primary">Formatar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
