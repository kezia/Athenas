<?php
       require_once( "../model/PessoaDAO.php");
    
        class PessoaController {
        
                private $pessoa;
                
                public function __construct() {
                        $this->pessoa = new PessoaDAO();
                        
                        $acao = $_POST['acao'];
                        if($acao == "incluir") {
                                $this->incluir();
                       }else if($acao == "editar") {
                                $this->editar();
                       }else if($acao == "excluir") {
                                $this->excluir();                       
                       }
                       
                }
                
                private function incluir() {
                        $this->pessoa->setNome($_POST['nome']);
                        $this->pessoa->setEmail($_POST['email']);
                        $this->pessoa->setCategoria($_POST['categoria']);                       
                        
                        $result = $this->pessoa->incluir();
                        if($result >=1) {
                                echo "<script>alert('Registro incluído com sucesso!');</script>";
                                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../index.php?#tabela">';
                        } else {
                                echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
                                echo '<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=../index.php?#tabela">';
                        }
                }
                
                
                
               
                
                   private function editar() {
                       
                        $this->pessoa->setId(isset($_GET['id_pessoa']));
                        $this->pessoa->setNome($_POST['nome']);
                        $this->pessoa->setEmail($_POST['email']);
                        $this->pessoa->setCategoria($_POST['categoria']);
                        $result = $this->pessoa->editar();
                        if($result >=1) {
                                echo "<script>alert('Registro editado com sucesso!');document.location='../view/cad_adm.php'</script>";
                        } else {
                                echo "<script>alert('Erro ao editar registro!');</script>";
                        }
                }
                
                
                   private function excluir() {
                        $this->pessoa->setNome($_POST['id']);                       
                        $result = $this->pessoa->excluit();
                        if($result >=1) {
                                echo "<script>alert('Registro excluido com sucesso!');document.location='../view/cad_adm.php'</script>";
                        } else {
                                echo "<script>alert('Erro ao excluir registro!');history.back()</script>";
                        }
                }
        }
        new PessoaController();
?>