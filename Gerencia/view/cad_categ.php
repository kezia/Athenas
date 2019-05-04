<html>
<head>
 
       
</head>

 <?php

   
   //include 'model/CategoriaDAO.php';  
  
   
   
   $categoria = new CategoriaDAO();
   
   
           
   
   ?>



            
    
    <h3 class="header_content">Cadastro de Categoria</h3>   
 
<form action="controller/CategoriaController.php" method="post">
        <input type="hidden" name="acao" value="incluir">
        
            
            Nome: <br /><input type="text" size="30" name="nome"><br />
           
        
        
        <p><input type="submit" value="Enviar"> </p>
</form>

    
    
   
</body>
</html>