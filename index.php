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
            position: relative; top: 80px; left: 1530px; 
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
    <div class="adicionarTarefa">
            <a href="adicionarTarefa.php">Adicionar Tarefa</a>
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
    
</body>
</html>
