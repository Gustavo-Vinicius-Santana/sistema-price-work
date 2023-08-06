<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <title>Teste de email</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="cores.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="head-1">
            <span class="icone1 material-icons perfil md-36 perfil">
                account_circle
            </span>
        </div>
        <div class="head-2">
            <h1 class="text1">ORÇAMENTO.JÁ</h1>
        </div>
        <div class="head-3">
            <span class="icone1 material-icons md-36 menu nav">
                menu
            </span>
        </div>
    </header>
    <main class="corpo-principal">
    <menu class="conteiner-menu">
        <div>
            <h3 class="t1">MENU</h3>
        </div>

        <div class="list-menu">
            <span class="material-icons md-24 icone-modo">
                light_mode
            </span>
            <h4>TEMA</h4>
            <input type="checkbox" id="check" class="control">
            <label for="check" class="switch">
                <span class="slider"></span>
            </label>
        </div>

        <div class="list-menu sel">
            <a href="base de dados.php">
                <span class="material-symbols-outlined">
                    database
                </span>
            </a>
            <a href="base de dados.php">
                <h4>BASE DE DADOS</h4>
            </a>
        </div>

        <div class="list-menu sel">
            <a href="usuarios.php">
                <span class="material-icons md-24">
                    people
                </span>
            </a>
            <a href="usuarios.php">
                <h4>USUARIOS</h4>
            </a>
        </div>

        <div class="list-menu sel">
            <a href="https://github.com/gusvinicius" target="_blank">
                <span class="material-icons md-24">
                    rocket_launch
                </span>
            </a>
            <a href="https://github.com/gusvinicius" target="_blank">
                <h4>PORTIFOLIO</h4>
            </a>
        </div>
    </menu>
        <section>
            <form action="" method="post">
                <div>
                    <h3 class="text1 t1">PREENCHA O FORMULARIO</h3>
                </div>
                <div class="conteiner-input">
                    <div class="div-input in1">
                        <label class="text1" for="nome">NOME: </label>
                        <input class="input-1" type="text" name="nome-enviar" placeholder="digite o seu nome" required>
                    </div>

                    <div class="div-input in2">
                        <label class="text1" for="e-mail">DIGITE O SEU E-MAIL: </label>
                        <input class="input-1" type="email" name="email-enviar" placeholder="digite o seu E-mail" required>
                    </div>
                </div>

                <div class="div-input in3">
                    <label class="text1" for="orçamento">ORÇAMENTO:</label>
                    <input class="input-1" type="number" name="orcamento-enviar" placeholder="00,00" required>
                </div>

                <div class="servicos">
                    <label class="text1" for="servico">SERVIÇO:</label>
                    <div>
                        <input type="checkbox" name="servico1" value="mecanico">
                        <label class="text1" for="servico1">MECÂNICO</label>
                    </div>
                    <div>
                        <input type="checkbox" name="servico2" value="pedreiro">
                        <label class="text1" for="servico2">PEDREIRO</label>
                    </div>
                    <div>
                        <input type="checkbox" name="servico3" value="encanador">
                        <label class="text1" for="servico3">ENCANADOR</label>
                    </div>
                    <div>
                        <input type="checkbox" name="servico4" value="diarista">
                        <label class="text1" for="servico4">DIARISTA</label>
                    </div>
                </div>
                <div class="div-btn">
                    <input class="btn confirm1" type="submit" value="CONFIRMAR" name="confirmar">
                </div>
            </form>
            <?php
            if(isset($_POST['confirmar'])){
             enviar();
            }
         ?>
         <?php
 function enviar(){
     $email = $_POST['email-enviar'];
     $nome = $_POST['nome-enviar'];
     $dinheiro = $_POST['orcamento-enviar'];
     $mecanico = $_POST['servico1'] ?? '';
     $pedreiro = $_POST['servico2'] ?? '';
     $encanador = $_POST['servico3'] ?? '';
     $diarista = $_POST['servico4'] ?? '';

     $arquivo ="
         <style type='text/css'>
         body{
             background-color: black;
         }
         h1{
             color: white;
             text-align: center;
         }
         p{
             color: white;
         }
         </style>
         <html>
             <h1>VISITA AO NOSSO SITE</h1>
             <p>Olá $nome, vimos que você visitou nosso site e deu um orçamento de $dinheiro. Você optou pelos serviços de: $mecanico, $pedreiro, $encanador, $diarista. Dando um total de 500 reais. Para mais informações entre no nosso site:<a href='https://gusdev-bd1.000webhostapp.com/'>clicando aqui</a> e acesse nossa base de dados.</p>
         </html>";
     $assunto = "sobre sua visita";
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From: $nome <$email>';

     $enviar = mail($email, $assunto, $arquivo, $headers);



     $host_banco = "localhost";
     $usuario_banco = "root";
     $senha_banco = "";
     $banco_de_dados = "banco1";
     $con = mysqli_connect($host_banco, $usuario_banco, $senha_banco, $banco_de_dados);
         if(!$con){
             die("Connection Failed" .mysqli_connect_errno());
         }
     $comando = "insert into passagens values (DEFAULT, '$nome', '$email', '$dinheiro')";
     mysqli_query($con, $comando);
 }
?>
        </section>
    </main>

    <dialog class="janela1">
        <div class="div-fecha">
            <span class="material-icons md-36 fechar">
                close
            </span>
        </div>
        <h2 class="text1 t1">TELA DE LOGIN</h2>
        <form action="usa.php" method="post">
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

        <div class="div-btn">
            <input class="btn cadastro" type="submit" value="CADASTRAR" name="cadastrar">
        </div>

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
                <input class="input-2" type="text" name="sobre-nome-cadastro" placeholder="digite o seu sobre nome" required>
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
                <input class="btn" type="submit" value="CONFIRMAR" name="cadastrar">
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
        $banco_de_dados = "banco1";
        $con = mysqli_connect($host_banco, $usuario_banco, $senha_banco, $banco_de_dados);
            if(!$con){
                die("Connection Failed" .mysqli_connect_errno());
            }


            $seletor = "select email from logins where email = '$email'";
            $result = mysqli_query($con, $seletor);
            $dados = $result->fetch_assoc();
            if($email == $dados['email']){
                echo "<script type='text/JavaScript'>
                window.alert('esse email já esta cadastrado');
             </script>";

            }else{
                $comando = "insert into logins values (DEFAULT, '$nome', '$sobrenome', '$email', '$senha')";
                mysqli_query($con, $comando);
            }
    }
?>

    </dialog>
    <script src="comandos.js"></script>
</body>
</html>