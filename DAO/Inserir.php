<?php
    namespace PHP\Modelo\DAO;
    require_once("Conexao.php");
    use PHP\Modelo\DAO\Conexao;
 
    class Inserir{
        function cadastrarResiduo(Conexao $conexao, string $nome, string $data, string $categoria, string $peso, string $local){
            try{
                $conn = $conexao->conectar();//Abrir o banco
                $sql = "Insert into cadastrarResiduo(codigo, nome, dia, categoria, peso, lugar)
                values('','$nome','$data','$categoria','$peso','$local')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                //verificar o resultado
                if($result){
                    return "<br>Cadastrado com sucesso! ";
                }
                return "<br> Não inserido!";
            }
            catch(Except $erro){
                return "<br>Algo deu errado!".$erro;
            }
 
        }//fim do método


    
 
    }//Fim da classe
 
 
?>
