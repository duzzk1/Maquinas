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
            if(isset($_POST["cadastrar"])){
                if ($_POST["usuario"] != "") {
                    $usuario = $_POST["usuario"];
                }
                $ramal = $_POST["ramal"];
            }
            ?>
            <form action="" method="post">
                <div class="input__Pessoa">
                <h3>Pessoa</h2>
                <label for="usuario">Usuário</label>
                <input type="text" id="usuario" name="usuario">
                <label for="ramal">Ramal</label>
                <input type="number" id="ramal" min="100" max="999" name="ramal">
                </div>
                <div class="input__Maquina">
                <h3>Máquina</h2>
                <label for="processador">Processador</label>
                <input type="text" id="processador">
                <label for="memoria">Memória RAM</label>
                <input type="number" id="ramal" min="100" max="999">
                <label for="hd">HD</label>
                <input type="number" id="ramal" min="1" max="999">
                <label for="sistema">Sistema Operacional</label>
                <input type="text" id="sistema">
                </div>
                <input type="submit" value="Cadastrar" name="cadastrar">
            </form>
        </section>
    </main>
    <footer>
        
    </footer>

    <script src='./src/js/main.js'></script>
</body>

</html>