
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

 jQuery(function($){

 $("#ht").mask("99:99");
 $("#hi").mask("99:99");
 $("#data_publicacao").mask("99/99/9999");

 });

</script>

<script type="text/javascript">

	  $(function(){
		  $('#tabs').tabs();
		  $("input:submit").button();
		  $( "button" ).button();
		  
	  });
	  	
   
</script>

<?php

include 'model/Banco.php';
include 'model/PessoaDAO.php';
include 'model/CategoriaDAO.php';




$banco = new Banco();


$pessoa = new PessoaDAO();


$categoria = new CategoriaDAO();

?>			

<title>Área de Gerência</title>

</head>

    <body <?php
    if(isset($_SESSION['mensagem'])){
        unset ($_SESSION['mensagem']);
        echo "onload=abrirAviso('sucesso')";
    }
    
    ?>>

        
        
<div id="back_popup">
	<div id="popup">
    
    </div>
</div>

<div id="topo">
	
    <div id="areagerencia">
    		<br />
            <br />
            <br />
           
    </div>
</div>

	<div id="abas_gerencia">
		<div id="tabs">

			<ul>     
				
                                  
                              
                                
              
                                                     
                                           
                                                                      
                                <li><a href="#inscricao">Cadastro de dados </a></li>
                                
                                
                                
                                <li><a href="#tabelas">Tabelas</a>  </li>                      
                                      
                                  
                                  
                                

			</ul>

                    
                    <div id="inscricao"> 
                            
                             <?php  include 'view/cad_cadastro.php';?> <br> <br>
                             <?php  include 'view/cad_categ.php';?>
                             
                         </div> 
                    
			 <div id="tabelas">
                             
                             
                             
                            <?php  include 'view/cad_tabelas.php';?>
                            
                         </div> 
                         
                      
			

                    
                      
			

			
            
   			                 
                    
                       
                   

                   
                    
                     
                    
            

		</div>
	</div>
<div id="rodape2"></div>
</body>
</html>

