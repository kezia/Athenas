<?php


//include 'Banco.php'; 
class Pessoa{
    
  
    
    function deletarPessoa($id){
        
        $banco = new Banco();
        $banco->conectarTudo();
        $sql = "DELETE FROM `pessoa` WHERE id_pessoa=".$id;
        $banco->set('sql', $sql);
        $resultado = $banco->query();
        
        $banco->desconectar();
        
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    
    
     function editarPessoa($id){
        
        $banco = new Banco();
        $banco->conectarTudo();
        $sql = "UPDATE `pessoa` SET `nome`=$nome WHERE `email`=$email";
        $banco->set('sql', $sql);
        $resultado = $banco->query();
        
       // $row = mysql_fetch_assoc($resultado);
       
        $banco->desconectar();
        return $resultado;
    }
    
    
    
    
}
?>

