<?php

   require_once("../model/CategoriaDAO.php");
        class CategoriaController {
        
                private $categ;
              
                
                public function __construct() {
                        $this->categ = new CategoriaDAO();
                        if(isset($_POST['acao'])){
                            $acao = $_POST['acao'];
                            if($acao == "incluir") {                               
                               $this->incluir();
                            } else if ($acao == "editar"){                  
                                 $this->editar();
                                
                            }                            
                                
                          
                        }
                        if(isset($_GET["id"])){
                            
                               $this->excluir();
                        }
                        
                }
                
                private function incluir() {
                        
                        
                        $this->categ->setNome($_POST['nome']);
                        $result = $this->categ->incluir();
                        if($result >=1) {
                                echo "<script>alert('Registro incluído com sucesso!');</script>";
                        echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../index.php?#tabela">';
                        
                        }
                }
                
                
                  private function editar() {
                        
                        
                        $this->categ->setNome($_POST['nome']);
                        $result = $this->categ->editar();
                        if($result >=1) {
                             //   echo "<script>alert('Registro editado com sucesso!');document.location='../view/index.php'</script>";
                        } else {
                                echo "<script>alert('Erro ao editar registro!');</script>";
                        }
                }
                
                 private function excluir() {
                                             
                        $result = $this->categ->excluir($_GET["id"]);
                        if($result >=1) {
                                echo "<script>alert('Registro excluido com sucesso!');document.location='../view/index.php'</script>";
                        } else {
                                echo "<script>alert('Erro ao excluir registro!');history.back()</script>";
                                echo $result;
                        }
                }
                
             
             
   
                
        }
        new CategoriaController();
?>
