<?php

  
   //include 'Banco.php';
   include 'Categoria.php';
   include 'Pessoa.php';
    
  
   
 
   $categoria = new Categoria();
   $pessoa = new Pessoa();
  
  
   
   
   
  if(isset($_GET["id"])){
       $categoria->deletarCategoria($_GET["id"]);
  
      
       echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../index.php?#tabela">';
       //header("Location: ../index.php?#tabela");
   }
   
   
   
   if(isset($_GET["id_pessoa"])){
       $pessoa->deletarPessoa($_GET["id_pessoa"]);
  
      
       echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../index.php?#categoria">';
       //header("Location: ../index.php?#opiniao");
   }
   
   
    
  

   
    
?>
