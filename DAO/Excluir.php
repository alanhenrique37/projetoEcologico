<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{
        function excluirResiduo(
            Conexao $conexao,
            string $nome
        ){
            $conn = $conexao->conectar();
            $sql = "delete from cadastrarResiduo where nome = '$nome'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if($result){
                echo "Deletado com sucesso!";
            }else{
                echo "Não deletado!";
            }

        }//fim do método

        

    }//fim da classe
?>