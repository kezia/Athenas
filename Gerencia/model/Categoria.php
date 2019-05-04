<?php


include 'Banco.php'; 
class Categoria{
    
  
    
    function deletarCategoria($id){
        
        $banco = new Banco();
        $banco->conectarTudo();
        $sql = "DELETE FROM `categoria` WHERE codigo=".$id;
        $banco->set('sql', $sql);
        $resultado = $banco->query();
        
        $banco->desconectar();
        
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    
    
    function visualizarUm($id){
        
        $banco = new Banco();
        $banco->conectarTudo();
        $sql = "SELECT * FROM `categoria` WHERE codigo=".$id;
        $banco->set('sql', $sql);
        $resultado = $banco->query();
        
        $row = mysql_fetch_assoc($resultado);
       
        $banco->desconectar();
        return $row;
    }
    
    
    
    
}
?>
