<?php
/*
* Script para estudo sobre PHP e Orientação a Objetos
* @author Everton da Rosa (Everton3x)
* @copyright GPL
* @version 1.0 (21/04/2009)
*/

class Banco {
/*
   * Classe para interação com banco de dados
   * @author Everton da Rosa (Everton3x)
   * @version 1.0 (21/04/2009)
   */

   /*
   * Declaração das variáveis (propriedades) da classe
   */
   private $host; // Host (Servidor) que executa o banco de dados
   private $user; // Usuário que se conecta ao servidor de banco de dados
   private $pass; // Senha do usuário para conexão ao banco de dados
   private $db; // Nome do banco de dados a ser utilizado
   private $sql; // String da consulta SQL a ser executada
   private $con;//conexão
   
   
   function conectarTudo(){

        $this->set("db", "athenas");
        $this->set("user", "root");
        $this->set("host", "localhost");
        $this->set("pass", "");
        $this->conectar();
        $this->selecionarDB();
        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');
   }


   function conectar(){
      /*
      * Função para conexão ao banco de dados
      * @author Everton da Rosa (Everton3x)
      * @return Object Retorna o objeto da conexão
      */
      $this->con = mysql_connect($this->host,$this->user,$this->pass) or die($this->erro(mysql_error()));
      return $this->con;
   }
   
   function selecionarDB(){
      /*
      * Função para seleção do banco de dados a ser usado
      * @author Everton da Rosa (Everton3x)
      * @return Boolean Retorna true (verdadeiro) ou false (falso)
      */
      
      $sel = mysql_select_db($this->db) or die($this->erro(mysql_error()));
      if($sel){
         return true;
      }else{
         return false;
      }
   }
   
   function query(){
      /*
      * Função para execução da consulta ao banco de dados
      * @author Everton da Rosa (Everton3x)
      * @return Object $qry Retorna o resultado da consulta como um objeto
      */
      $qry = mysql_query($this->sql) or die ($this->erro(mysql_error()));
      return $qry;
   }
   
   function set($prop,$value){
      /*
      * Função para atribuir valores às propriedades da classe
      * @author Everton da Rosa (Everton3x)
      * @param String $prop Nome da propriedade que terá seu valor atribuído
      * @param String, Array, Object Valor a ser atribuído
      * @return void Não dá nenhum retorno
      */
      $this->$prop = $value;
   }
   
   function getSQL(){
      /*
      * Função para retornar a string SQL
      * @author Everton da Rosa (Everton3x)
      * @return String String SQL
      */
      return $this->sql;
   }
   
   function erro($erro){
      /*
      * Função para exibir os error
      * @author Everton da Rosa (Everton3x)
      * @param String $erro Erro a ser exibido
      * @return void Não dá nenhum retorno
      */
      
      echo $erro;
   }
   
   


   
    private function montaQuery($tipo) {
                        $cont  = count($this->campos);
                        for($i = 0; $i < $cont; $i++) {
                                if($i < $cont - 1) {
                                        if($tipo == 1) {
                                                $this->camposQuery  .= $this->campos[$i] .", ";
                                                $this->valoresQuery .= "'" .$this->valores[$i] ."', ";
                                        } 
                                } else {
                                        if($tipo == 1) {
                                                $this->camposQuery  .= $this->campos[$i];
                                                $this->valoresQuery .= "'" . $this->valores[$i] ."'";
                                        }
                                        
                                }
                        }
                }

   
   
   function inserirRegistro() {
                        $this->montaQuery(1);
                        $this->sql    = "INSERT INTO ".$this->tabela." (".$this->camposQuery.") VALUES (".$this->valoresQuery.")";
                        $this->query  = mysql_query($this->sql);
                        $this->result = mysql_affected_rows();

                        return $this->result;
                }        
                


           
function editarRegistro() {   
 
    
             $params = array();
             $dados =$this->dados;
             $id =$this->id;             
             $campo = join(', ', array_keys($id));
             $valores =join(', ',array_values($id));
             $id=$campo."=".$valores;
             foreach ($dados as $key => $value) {
             $params[] = sprintf(' %s = %s', $key, $value);
              }
             $this->sql = sprintf('UPDATE'.$this->tabela.' SET %s WHERE %s;', join(', ', $params), $id);                       
             $this->query  = mysql_query($this->sql);
             $this->result = mysql_affected_rows();

             return $this->result;
                }
                
 function mostrarTodosRegistro() {
                       
                        $this->sql = "SELECT * FROM  ".$this->tabela ;
                        $this->query  = mysql_query($this->sql);
                        $this->result = mysql_affected_rows();

                        return $this->query;
                }
                
               

                
 function deletarRegistro() { 
     
     
                         $params = array();
                         $dados =$this->dados;
                         foreach ($dados as $key => $value) {
                         $params[] = sprintf(' %s = %s', $key, $value);}
                         $this->sql = sprintf('DELETE FROM' .$this->tabela .'WHERE %s;', join(',', $params));                         
                         $this->query  = mysql_query($this->sql);
                         $this->result = mysql_affected_rows();

                        return $this->result;
                }
                

 function mostrarUmRegistro() {
                       
     
                         $params = array();
                         $dados =$this->dados;                    
                         foreach ($dados as $key => $value) {
                         $params[] = sprintf(' %s = %s', $key, $value);
                          }

                         $this->sql= sprintf('SELECT FROM ' .$this->tabela .' WHERE %s;', join(' , ', $params));                        
                         $this->query  = mysql_query($this->sql);
                         $this->result = mysql_affected_rows();

                        return $this->result;
                }
                
                
 function pesquisaPorCampo() {
                       
                         $this->montaQuery(1);
                         $this->sql= 'SELECT * FROM ' .$this->tabela .' WHERE '.$this->camposQuery.' = '.$this->valoresQuery.';'; 
                         $this->query  = mysql_query($this->sql);
                         $this->result = mysql_affected_rows();

                        return $this->query;
                }
                
              
                
                
   
function desconectar(){
     
       $fecha = mysql_close($this->con) or die($this->erro(mysql_error()));
       
       return $fecha;
   }
}
?>