<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

<link type="text/css" href="css/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
<link type="text/css" href="css/style_geral.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/jquery.cleditor.css" />

<script type="text/javascript" src="js/jquery-1.6.4.js"></script>
<script type="text/javascript" src="js/jquery.cleditor.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/adicionais.js"></script>
<script type="text/javascript" src="js/PopBox.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.3.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>


<script type="text/javascript">

	  $(function(){
		  $('#tabs').tabs();
		  $("input:submit").button();
		  $( "button" ).button();
		  
	  });
	  	
   
</script>


<title>Área de Gerência</title>

</head>



       <?php

   
   include '../model/PessoaDAO.php'; 
    include '../model/CategoriaDAO.php'; 
  
   
   
   $categoria = new CategoriaDAO();
   $pessoa = new PessoaDAO();
   
   
           
   
   ?> 
        
<div id="back_popup">
	<div id="popup">
    
    </div>
</div>
>

    <h3 class="header_content"> Editar as Informações de Pessoa</h3>   <br>
    
<form action="../controller/PessoaController.php" method="post">
        <input type="hidden" name="acao" value="editar">  
       
       
       
        

                      <html>   
                        <div id="comentario_feito">
                            <div id="cont_coment">                           
                               

                             
                            
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
