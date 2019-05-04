<?php

        require_once("Banco.php");
        
        class CategoriaDAO extends Banco {
                private $nome;
                
                public function setNome($string) {
                        $this->nome = $string;
                }
                public function getNome() {
                        return $this->nome;
                }
                
               
               
                public function incluir() {
                        $this->tabela  = "categoria";
                        $this->campos  = array("nome");
                        $this->valores = array($this->getNome());
                        $this->conectarTudo();
                        $result = $this->inserirRegistro();
                        $this->desconectar();
                        return $result;
                }
                
                 public function excluir($id) {
                        $this->tabela  = "categoria";
                        $this->dados=array('codigo' =>$id);                      
                        $this->conectarTudo();
                        $result = $this->deletarRegistro();
                        $this->desconectar();
                        return $result;
                }
                
                
                  public function editar() {
                        $this->tabela  = "categoria";
                        $this->campos  = array("nome");
                        $this->valores = array($this->getNome());
                        $this->conectarTudo();
                        $result = $this->editarRegistro();
                        $this->desconectar();
                        return $result;
                  }
                  public function visualizar() {
                        $this->tabela  = "categoria";           
                        $this->conectarTudo();
                        
                        $result = $this->mostrarTodosRegistro();
                        
                        $this->desconectar();
                        return $result;
                }
                  
        }

