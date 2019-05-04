<?php
       require_once("Banco.php");
        
        class PessoaDAO extends Banco {
                private $nome;
                private $email;
                private $categoria;
                
                public function setNome($string) {
                        $this->nome = $string;
                }
                 public function setId($string) {
                        $this->id = $string;
                }
                
                public function setEmail($string) {
                        $this->email = $string;
                }
                
                public function setCategoria($string) {
                        $this->categoria = $string;
                }                   
                
                
                public function getId() {
                        return $this->id;
                }
                
                public function getNome() {
                        return $this->nome;
                }
                
                public function getEmail() {
                        return $this->email;
                }
                
                public function getCategoria() {
                        return $this->categoria;
                }
                
                public function incluir() {
                        $this->tabela  = "pessoa";
                        $this->campos  = array("nome", "email", "categoria");
                        $this->valores = array($this->getNome(),$this->getEmail(),$this->getCategoria());
                        $this->conectarTudo();
                        $result = $this->inserirRegistro();
                        $this->desconectar();
                        return $result;
                }
                
                 public function editar() {
                        $this->tabela  = "pessoa";
                        $this->id=array('id_pessoa' =>$this->getId());
                        $this->dados  = array( 'nome' =>$this->getNome(), 'email' =>$this->getEmail(),'categoria' =>$this->getCategoria());
                        $this->conectarTudo();
                        $result = $this->editarRegistro();
                        $this->desconectar();
                        return $result;
                }
                
                
                
                  public function excluir() {
                        $this->tabela  = "pessoa";
                        $this->dados=array('id_pessoa' =>getId());                      
                        $this->conectarTudo();
                        $result = $this->deletarRegistro();
                        $this->desconectar();
                        return $result;
                }
                
                  public function visualizarUm() {
                        $this->tabela  = "pessoa";
                        $this->dados=array('id_pessoa' =>getId());                      
                        $this->conectarTudo();
                        $result = $this->mostrarUmRegistro();
                        $this->desconectar();
                        return $result;
                }
                
                 public function visualizarTudo() {
                        $this->tabela  = "pessoa";                                            
                        $this->conectarTudo();
                        $result = $this->mostrarTodosRegistro();
                        $this->desconectar();
                        return $result;
                }
                                

                
                 
                
                
                
               
        }
?>