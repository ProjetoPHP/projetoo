<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="menu.css">
    <script>
        function toggleMenu() {
            var submenu = document.querySelector('.submenu');
            submenu.classList.toggle('active');
        }
    </script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: left;
        }

        .content {
            text-align: left;
            padding: 20px;
        }

        /* Estilo para a opção de login */
        .login {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        /* Estilo para o link de login */
        .login a {
            color: black;
            text-decoration: none;
        }
    </style>
    <title>Adicionar Tarefa</title>
</head>
<body>
    <div class="login">
            <a href="login.php">Login</a>
    </div>
    <div class="menu">
        <div class="menu-btn" onclick="toggleMenu()">&#9776;</div>
        <ul class="menu-list">
            <li><a href="#">Home</a></li>
        </ul>
        <ul class="submenu">
            <li><a href="#">Concluído</a></li>
            <li><a href="#">Pendente</a></li>
            <li><a href="#">Avisos</a></li>
        </ul>
    </div>
    
    <div class="content">
        <h1>Adicionar Tarefa</h1>
        <form action="processar_tarefa.php" method="post">
            <label for="tarefa">Tarefa:</label>
            <input type="text" name="tarefa" id="tarefa" required>
            <br>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" required>
            <br>
            <label for="hora">Hora:</label>
            <input type="text" name="hora" id="hora" required>
            <br>
            <button type="submit">Adicionar Tarefa</button>
        </form>
    </div>
</body>
</html>
