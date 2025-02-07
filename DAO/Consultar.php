<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    class Consultar{
        function consultarResiduo(Conexao $conexao, string $id){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from cadastrarResiduo where id = '$id'";
                $result = mysqli_query($conn,$sql);
 
                while($dados = mysqli_fetch_Array($result)){
                    if($dados['id'] == $id){
                        echo "<br>Nome: ".$dados['nome'].
                        "<br>ID: ".$dados['id'].
                        "<br>Data de Coletagem: ".$dados['dia'].
                        "<br>Categoria: ".$dados['categoria'].
                        "<br>Peso: ".$dados['peso'].
                        "<br>Local de Envio: ".$dados['lugar'];
                        return;//finalizar o while
                    }
                    return "ID digitado inválido";
 
                }//fim do while
 
            }catch(Except $erro){
                echo $erro;
            }
 
        }//fim do consultarClienteIndividual




    }
 
?>
