<?php
    namespace PHP\Modelo\TELAS;
    require_once('..\Usuario.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\Usuario;

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


      <section class="cadastroResiduos terceiro">
        <div class="h1Cadastro">
            <h1 class="h1c">CADASTRAR RESÍDUO</h1>
        </div>
        <div class="form">
            <form method="POST">
            <div class="mb-3">
                <label for="lNome" class="form-label">NOME</label>
                <input type="text" class="form-control" id="tNome" name="Nome" required placeholder="Digite seu nome">
            </div>

            <div class="mb-3">
                <label for="lId" class="form-label">ID do Resíduo</label>
                <input type="text" class="form-control" id="tId" name="ID" required placeholder="Digite o ID do resíduo">
            </div>

            <div class="mb-3">
                <label for="lData" class="form-label">DATA DA COLETAGEM</label>
                <input type="date" class="form-control" id="tData" name="Data" required>
            </div>
            <div class="mb-3">
                  <label for="lCategoria" class="form-label">CATEGORIA</label>
                  <input class="form-control" list="browsers" name="Categorias" id="tCategorias" placeholder="Digite a categoría do seu resíduo!">
                  <datalist id="browsers">
                    <option value="Não Reciclável">
                    <option value="Reciclável">
                    <option value="Óleo">
                    <option value="Tampinhas Plásticas">
                    <option value="Lacres de alumínio">
                    <option value="Tecidos">
                    <option value="Meias">
                    <option value="Material de Escrita">
                    <option value="Esponjas">
                    <option value="Eletrônicos">
                    <option value="Pilhas e Baterias">
                    <option value="Infectante">
                    <option value="Químicos">
                    <option value="Lâmpada fluorescente">
                    <option value="Tonners de Impressora">
                    <option value="Esmaltes">
                    <option value="Cosméticos">
                    <option value="Cartela de Medicamento">
                  </datalist>    
            </div>
            <div class="mb-3">
                <label for="lPeso" class="form-label">PESO (kg)</label>
                <input type="text" class="form-control" id="tPeso" name="Peso" required placeholder="Digite o peso de seu resíduo!">
            </div>
            <div class="mb-3">
                <label for="lPeso" class="form-label">LOCAL DE ENVIO</label>
                <input type="text" class="form-control" id="tLocal" name="Local" required placeholder="Digite o local onde o seu resíduo vai ser recolhido!">
            </div>

            <button type="submit">
            <?php
              $conexao = new Conexao();//conectar no banco
              if(isset($_POST['Nome'])){
                  $nome = $_POST['Nome'];
                  $id = $_POST['ID'];
                  $data = date($_POST['Data']);
                  $categoria = $_POST['Categorias'];
                  $peso = $_POST['Peso'];
                  $local = $_POST['Local'];
                  

              }



                
            ?>  
            
            
            
            CADASTRAR RESÍDUO</button>
            <div class="estilo">
            <?PHP
                if(isset($_POST['Nome'])){
                  $inserir = new Inserir();
                  echo $inserir->cadastrarResiduo($conexao, $nome, $id, $data, $categoria, $peso, $local);
                }
            ?>
            </div>
            </form>
        </div>



    </section>

    
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