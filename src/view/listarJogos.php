<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loja de jogos</title>
</head>
<body>
    <header>
        <h1>Loja de Jogos/h1>
    </header>

    <h2>Nossos jogos</h2>

    <form action="index.php" method="GET">
        <input type="hidden" name="acao" value="listar">
        <input type="text" name="busca" placeholder="Buscar por nome..."
               value="<?php echo htmlspecialchars($busca ?? ''); ?>">
               <button type="submit">Buscar</button>
    </form>
    <hr>
    <a href="index.php?acao=cadastrar">[Cadastrar Novo Jogo]</a>
    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
    <tbody>
        <?php
            if(!empty($jogos)){
                foreach($jogos as $jogo){
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($jogo['nome']) . "</td>";
                    echo "<td>R$ " . number_format($jogo['preco'], 2, ',', '.') . "</td>";
                    echo "<td>";
                    echo "<a href='index.php?acao=editar&id=" . $jogo['id'] . " '>Editar</a>|";
                    echo "<a href='index.php?acao=excluir&id=" . $jogo['id'] . "'>Excluir</a>";
                    echo "</td>";
                    echo "</tr>";
                } 
            }else {
                    echo "<tr><td colspan='4'>Nenhum jogo cadastrado.</td></tr>";
            }
        ?>
    </tbody>
    </table>
</body>
</html>