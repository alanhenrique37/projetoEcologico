<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    class Consultar{
        function consultarResiduo(Conexao $conexao, string $nome){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from cadastrarResiduo where nome = '$nome'";
                $result = mysqli_query($conn,$sql);
 
                while($dados = mysqli_fetch_Array($result)){
                    if($dados['nome'] == $nome){
                        echo "<br>Nome: ".$dados['nome'].
                        "<br>Data de Coletagem: ".$dados['dia'].
                        "<br>Categoria: ".$dados['categoria'].
                        "<br>Peso: ".$dados['peso'].
                        "<br>Local de Envio: ".$dados['lugar'];
                        return;//finalizar o while
                    }
                    return "Nome digitado inválido";
 
                }//fim do while
 
            }catch(Except $erro){
                echo $erro;
            }
 
        }//fim do consultarClienteIndividual




    }
 
?>
