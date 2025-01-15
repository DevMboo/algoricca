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
        
        <!-- Formulário que envia dados via POST para o script que processa o cálculo -->
        <form action="calculate" method="POST">
            <!-- Campo para o valor 'a' -->
            <div class="mb-3">
                <label for="valueA" class="form-label">Valor A</label>
                <input type="number" name="a" class="form-control" id="valueA" required>
            </div>

            <!-- Campo para o valor 'b' -->
            <div class="mb-3">
                <label for="valueB" class="form-label">Valor B</label>
                <input type="number" name="b" class="form-control" id="valueB" required>
            </div>

            <!-- Seleção do tipo de operação -->
            <div class="mb-3">
                <label for="operationType" class="form-label">Operação</label>
                <select name="type" class="form-control" id="operationType" required>
                    <option value="sum">Soma</option>
                    <option value="subtract">Subtração</option>
                    <option value="multiply">Multiplicação</option>
                    <option value="divide">Divisão</option>
                </select>
            </div>

            <?php if (isset($message['status']) && $message['status'] == 'success') { ?>
                <h1 class="text-success">Soma dos valores é: <?= htmlspecialchars($message['txt']) ?></h1>
            <?php } ?>

            <!-- Botão para submeter o formulário -->
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
