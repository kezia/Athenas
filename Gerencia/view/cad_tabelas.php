   <html> 
    
   
     
    <h3 class="header_content"> Tabela Pessoa</h3>   
    
    <?php
    
     $pessoa = new PessoaDAO();
            $resultado = $pessoa->visualizarTudo();
            
            if(mysql_num_rows($resultado)==0){
                
                  echo "<br />Nenhum registro na tabela !<br/>";
            }else{
            
                while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
                ?>

                     
                        <div id="comentario_feito">
                            <div id="cont_coment">
                            
                               

                                <b>Nome:</b>   <?=$row["nome"]?>
                                <b>Email:</b>  <?=$row["email"]?>    
                                <b>Categoria:</b>         <?=$row["categoria"]?>
                            </div>
                            <div id="btactions">
                            <a href=<?="model/alteraConteudoPaginas.php?id_pessoa=".$row['id_pessoa']?>>Excluir</a> 
                            || 
                           
                        </div>
                            
               <?php        

                }    
           
            }
        
            ?> 
                        </div>
     <br> <br>                      
    <h3 class="header_content">Tabela Categoria</h3>   
    
    <?php
    
    
     $categoria = new CategoriaDAO();
   
            $result = $categoria->visualizar();
            
            if(mysql_num_rows($result)==0){
                
                  echo "<br />Nenhum registro na tabela !<br/>";
            }else{
            
                while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                ?>

                      <html>   
                        <div id="comentario_feito">
                            <div id="cont_coment">
                            
                               

                                <b>Nome:</b>
                                <?=$row["nome"]?>
                                
                                <b>Categoria:</b>
                                <?=$row["codigo"]?>
                            
                            </div> 
                            <div id="btactions">
                            <a href=<?="model/alteraConteudoPaginas.php?id=".$row['codigo']?>>Excluir</a> 
                           
                            
                        </div>
               <?php        

                }    
           
            }
        
            ?> 
                        </div>
                          
                      </html>