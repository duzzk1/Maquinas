<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Inicio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./src/css/main.css'>

</head>

<body>
    <header class="header">
        <nav class="menu">
            <img src="./src/image/logoServi.png" alt=""><a href=""></a></img>
            <ul>
                <li class="item active"><a href="#">Inicio</a></li>
                <li class="item"><a href="#">Buscar</a></li>
                <li class="item"><a href="#">Cadastrar</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="cadastro">
            <?php
            if (isset($_POST["cadastrar"])) {

                $usuario = $_POST["usuario"];
                $ramal = $_POST["ramal"];

                $processador = $_POST["processador"];
                $ram = $_POST["ram"];
                $values = json_encode($_POST);

                file_put_contents('users.json', $values . ",", FILE_APPEND);
            }
            ?>
            <form action="" method="post">
                <div class="input__Pessoa">
                    <h3>Pessoa</h2>
                        <label for="usuario">Usuário</label>
                        <input type="text" id="usuario" name="usuario" autocomplete="off">
                        <label for="ramal">Ramal</label>
                        <input type="number" id="ramal" min="100" max="999" name="ramal" autocomplete="off">
                </div>
                <div class="input__Maquina">
                    <h3>Máquina</h2>
                        <label for="processador">Processador</label>
                        <input type="text" id="processador" name="processador" autocomplete="off"
                        <label for="memoria">Memória RAM</label>
                        <input type="number" id="ram" min="0" max="999" name="ram" autocomplete="off">
                        <label for="hd">HD</label>
                        <input type="number" id="ramal" min="1" max="999" autocomplete="off">
                        <label for="sistema">Sistema Operacional</label>
                        <input type="text" id="sistema" autocomplete="off">
                        <input type="submit" value="Cadastrar" name="cadastrar">
                </div>
            </form>
           
            </svg>
            <svg class="bola" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="#1DD646" />
            </svg>
            <svg class="bola1" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="50" fill="#1DD646" />
            </svg>

        </section>
    </main>
    <footer>

    </footer>

    <script src='./src/js/main.js'></script>
</body>

</html>