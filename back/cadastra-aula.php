<html>

<head>
    <title>Sistema Diario Eletronico</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body class="meio text-center">
    <header>
        <h1 class="branco">Cadastrar Aula</h1>
        <button class="btn btn-primary">Cadastar</button>
    </header>
    <section class="cadastrar">
        <h1>Cadastrar Aula</h1>
        <form class="form" action="cadastra-aula-processa.php" method="POST">
            <h3>O que foi lecionado ?</h3>
            <textarea name="texto" class="form-control" required></textarea>
            <h3>Data:</h3>
            <input type="date" name="data" class="form-control" required placeholder="Data">
            <h3>Bimestre:</h3>
            <select name="bimestre" class="form-control" required>
            <option hidden>Selecionar Bimestre</option>
            <option value="1Bimestre">1º Bimestre</option>
            <option value="2Bimestre">2º Bimestre</option>
            <option value="3Bimestre">3º Bimestre</option>
            <option value="4Bimestre">4º Bimestre</option>
        </select>
            <label>
            <button type="submit" class="btn btn-success">Enviar</button>
        <button type="reset" class="btn">Limpar</button>    
        </label>
        </form>
        <a href="../index.php">Página Inicial</a>
    </section>
    <footer>
        <a href="https://www.facebook.com/gabriel.rabelo2" class="branco">Feito com carinho por Gabriel Rabelo</a>
    </footer>
</body>
</html>