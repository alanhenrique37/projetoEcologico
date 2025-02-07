<?php 
    namespace PHP\Modelo\TELAS;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senac Resíduos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   <link rel="stylesheet" href="../css/cadastro.css">
        </head>
        <body>
        <nav class="navbar data-bs-theme="light">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="../img/senac.png" alt="Senac" width="100" >
          </a>
          <ul>
            <li><a href="consultarResiduo.php" class="lists">CONSULTAR</a></li>
            <li><a href="atualizarResiduo.php" class="lists">ATUALIZAR</a></li>
            <li><a href="excluirResiduo.php" class="lists">EXCLUIR</a></li>
            <li><a href="cadastro.php" class="lists">CADASTRAR</a></li>
          </ul>
        </div>
      </nav>

      <section class="cadastroResiduos terceiro quarto">
        <div class="h1Cadastro">
            <h1 class="h1c">EXCLUIR RESÍDUO</h1>
        </div>
        <div class="form">
        <form method="POST">
                    <label class="form-label">DIGITE O ID DO RESÍDUO </label>
                    <input type="text" name="ID" class="form-control" placeholder="Digite ID do Resíduo" required id="ID">

                    <button type="submit">Excluir
                        <?php
                            $conexao = new Conexao();
                            if(isset($_POST['ID'])){
                                $id     = $_POST['ID'];
                                $excluir = new Excluir();
                            }
                        ?>
                    </button>
                    <div class="estilo">
                    <?php
                    if(isset($_POST['ID'])){
                        echo $excluir->excluirResiduo($conexao, $id);
                    }else{
                        echo "";
                    }
                ?>
                </div>
                </form>
               

                </section>
                </div>
            <footer>
                <div class="imgFooter">
                <img src="../img/senac.png" width="150px" class="imgFooter">
            </div>
            <div class="flexFooter">
            <h3 class="left">Desenvolvedor do Site: alandevfront@gmail.com</h3>
            <h3 class="right">© Senac 2025.</h3>
            </div>
            </footer>


</body>
</html>