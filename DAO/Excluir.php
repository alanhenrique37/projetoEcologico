<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{
        function excluirResiduo(
            Conexao $conexao,
            string $id
        ){
            $conn = $conexao->conectar();
            $sql = "delete from cadastrarResiduo where ID = '$id'";
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