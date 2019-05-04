<html>
<head>
 
       
</head>

 <?php

   
   //include 'model/CategoriaDAO.php';  
  
   
   
   $categoria = new CategoriaDAO();
   $pessoa = new PessoaDAO();
   
   
           
   
   ?>


<body>
    
 <h3 class="header_content">Cadastro de Pessoas</h3>  
<form action="controller/PessoaController.php" method="post">
        <input type="hidden" name="acao" value="incluir">
        
            
            Nome: <br /><input type="text" size="30" name="nome"><br />
            Email: <br /><input type="text" size="30" name="email"><br />
            Categoria:<select name="categoria" id="categoria" class="textBox" >
                              <?php
                                    $res = $categoria->visualizar();
                                    while ( $row = mysql_fetch_assoc( $res ) ) {
                                            echo '<option value="'.$row['codigo'].'">'.$row['nome'].'</option>';
                                    }
                                ?>
                            </select>
        
        
        <p><input type="submit" value="Enviar"> </p>
</form>

    
    
   
</body>
</html>