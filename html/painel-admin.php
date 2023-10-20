<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="admin-panel">
        <h1>Painel de Administração</h1>

        <h2>Adicionar Categoria</h2>
        <form>
            <input type="text" placeholder="Nome da Categoria">
            <button type="submit">Adicionar</button>
        </form>

        <h2>Excluir Usuário</h2>
        <form>
            <input type="text" placeholder="ID do Usuário">
            <button type="submit">Excluir</button>
        </form>

        <h2>Marcar Objeto como Devolvido</h2>
        <form>
            <input type="text" placeholder="ID do Objeto">
            <button type="submit">Marcar como Devolvido</button>
        </form>
    </div>
    <script src="../js/admin-script.js"></script>
</body>
</html>