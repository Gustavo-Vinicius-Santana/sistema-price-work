<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <title>USUARIOS</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="cores.css">
    <link rel="stylesheet" href="estilo-bd.css">
</head>
<body>
    <header>
        <div class="head-1">
            <a href="index.php">
                <span class="icone1 material-icons perfil md-36 perfil">
                    arrow_back
                </span>
            </a>
        </div>
        <div class="head-2">
            <h1 class="text1">ORÇAMENTO.JÁ</h1>
        </div>
        <div class="head-3">
            <span class="icone1 material-icons md-36 menu nav">
                account_circle
            </span>
        </div>
    </header>

    <menu class="conteiner-menu">
        <h2 class="t1">usuario</h2>
        <div class="div-btn2">
            <input class="btn2 abra1" type="submit" value="ENTRAR">
        </div>

        <div class="div-btn2">
            <input class="btn2 abra2" type="submit" value="CADASTRAR">
        </div>
    </menu>

    <main class="corpo-principal">
        <h2 class="text1 t1">usuarios</h2>
        <section>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
                <div class="div-input">
                    <label class="text1" for="pesquisa">PESQUISA</label>
                    <input class="input-1" type="text" name="pesquisa" placeholder="DIGITE A PESQUISA" required>
                </div>
                <div class="div-input">
                    <select class="select" name="sel">
                        <option value="a">POR NOME</option>
                        <option value="b">POR EMAIL</option>
                    </select>
                </div>
                <div class="div-btn">
                    <input class="btn" type="submit" value="pesquisa" name="pesquisar">
                </div>
            </form>
        </section>
        <div class="conteiner-dados1">
            <table>
                <thead>
                    <th>NOME</th>
                    <th>EMAIL</th>
                </thead>
                <tbody>
                <?php
                if(isset($_GET['pesquisar'])){
                    buscar();
                }
           function buscar(){
            $host_banco = "localhost";
            $usuario_banco = "root";
            $senha_banco = "";
            $banco_de_dados = "bd_sistema_price_work";
            $con = mysqli_connect($host_banco, $usuario_banco, $senha_banco, $banco_de_dados);
                if(!$con){
                    die("Connection Failed" .mysqli_connect_errno());
                }
            $pesquisa = $_GET['pesquisa'] ?? 'nada';
            $select = $_GET['sel'] ?? 'c';
            if($select == 'a'){
                $comando1 = "select * from passagens where nome like '%$pesquisa%'";
                $exec = mysqli_query($con,$comando1);
                while($dados1 = $exec->fetch_assoc()){
                    $nome1 = $dados1['nome'];
                    $email1 = $dados1['email'];
                    ?>
                    <tr>
                        <td> <?php echo $nome1 ?> </td>
                        <td> <?php echo $email1 ?> </td>
                    </tr>
                <?php
                }
            }if($select == 'b'){
                $comando2 = "select * from passagens where email like '%$pesquisa%'";
                $exec2 = mysqli_query($con,$comando2);
                while($dados2 = $exec2->fetch_assoc()){
                    $nome2 = $dados2['nome'];
                    $email2 = $dados2['email'];
                    ?>
                    <tr>
                        <td> <?php echo $nome2 ?> </td>
                        <td> <?php echo $email2 ?> </td>
                    </tr>
                    <?php
                }
            }
           }
        ?>
                </tbody>
            </table>
        </div>
    </main>


    <dialog class="janela1">
        <div class="div-fecha">
            <span class="material-icons md-36 fechar">
                close
            </span>
        </div>
        <h2 class="text1 t1">TELA DE LOGIN</h2>
        <form action="usa.php" method="get">
            <div class="div-input">
                <label for="usuario" class="text1">USUARIO:</label>
                <input class="input-2" type="text" name="usuario-login" placeholder="digite o seu username" required>
            </div>
            <div class="div-input">
                <label for="senha" class="text1">SENHA:</label>
                <input class="input-2" type="password" name="senha-login" placeholder="digite a sua senha" required>
            </div>

            <div class="div-btn">
                <input class="btn" type="submit" value="ENTRAR" name="entrar">
            </div>
        </form>

    </dialog>

    <dialog class="janela2">
        <div class="div-fecha">
            <span class="material-icons md-36 fechar2">
                close
            </span>
        </div>
        <h2 class="text1 t1">TELA DE CADASTRO</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="div-input">
                <label for="nome" class="text1">NOME:</label>
                <input class="input-2" type="text" name="nome-cadastro" placeholder="digite o seu nome" required>
            </div>

            <div class="div-input">
                <label for="sobre-nome" class="text1">SOBRE NOME:</label>
                <input class="input-2" type="text" name="sobre-nome-cadastro" placeholder="digite o seu sobre nome"required >
            </div>

            <div class="div-input">
                <label for="email" class="text1">EMAIL:</label>
                <input class="input-2" type="text" name="email-cadastro" placeholder="digite o seu E-mail" required>
            </div>

            <div class="div-input">
                <label for="senha" class="text1">SENHA:</label>
                <input class="input-2 senha1" type="text" name="senha-cadastro" placeholder="digite uma senha" required>
            </div>

            <div class="div-btn">
                <input class="btn" type="submit" value="CONFIRMAR" name="cadastrar" required>
            </div>
        </form>
        <?php
            if(isset($_POST['cadastrar'])){
                cadastro();
            }
        ?>
        <?php
    function cadastro(){
        $nome = $_POST['nome-cadastro'];
        $sobrenome = $_POST['sobre-nome-cadastro'];
        $email = $_POST['email-cadastro'];
        $senha = $_POST['senha-cadastro'];


        $host_banco = "localhost";
        $usuario_banco = "root";
        $senha_banco = "";
        $banco_de_dados = "bd_sistema_price_work";
        $con = mysqli_connect($host_banco, $usuario_banco, $senha_banco, $banco_de_dados);
            if(!$con){
                die("Connection Failed" .mysqli_connect_errno());
            }


            $seletor = "select email from logins where email = '$email'";
            $result = mysqli_query($con, $seletor);
            $dados = $result->fetch_assoc();
            if($email == $dados['email']){

            }else{
                $comando = "insert into logins values (DEFAULT, '$nome', '$sobrenome', '$email', '$senha')";
                mysqli_query($con, $comando);
            }
    }
?>

    </dialog>

    <script src="comandos2.js"></script>
</body>
</html>