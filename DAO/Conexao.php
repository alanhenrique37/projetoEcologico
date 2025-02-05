<?php
namespace PHP\Modelo\DAO;

class Conexao{
    function conectar(){
        try{
        $conn = mysqli_connect('localhost', 'root', '', 'phpECOLOGIA');
        if($conn){
            echo "<br>";
            return $conn;
        }
        echo "<br> ";
    }catch(Excepet $erro){
        return "".$erro;
    }
}
}//fim da class





?>