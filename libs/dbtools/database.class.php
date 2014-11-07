<?php

    if ( !defined('DATABASE_CLASS') ){
        define('DATABASE_CLASS', 'TRUE'); //Cria uma constante para futuramente podermos validar se esse arquivo foi executado
    }
    
    /**
    * Esta classe é a responsável pela conexão com o banco de dados.
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package DBTools
    */
    class DBConn{
        private $host, $user, $password, $sgdb, $debug;
        
        private $conn;
        private $connected;
        private $onDemmand;
        
        
        function __construct($host = 'mysql:dbname=emwscomb_presbi;host=127.0.0.1', $user = 'emwscomb_presbi', $password = 'presbi#123', $start_con = 'S', $on_demmand= 'S', $debug = 0){
                
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->connected = false;
            
            $this->debug = $debug;
            
            if ( $start_con == 'S' ){
                    //Tenta conectar com o banco 3 vezes... dando pausa entre elas..
                    for ($i=0; $i<3; $i++){
                            if ( $this->connect() ){
                                    break;
                            }
                            sleep(3);
                    }
                    
            }
            
            $write_xml = false;
            
            $this->querys = array();
            $this->querys["consults"] = array();
            $this->querys["execution"] = array();
            $this->save_name = date("Ymd_hmi");
        }
        
        public function connect(){//Função para fazer conexão com o banco
            $ret = false;
    
            try {
                $this->conn = new PDO($this->host, $this->user, $this->password);
                $this->connected = true; //Setar o atributo connected para verdadeiro 
                $ret = true;
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage(); //Ocorreu algum erro, retornar para o usuario
            }
            
            return $ret; //Retorna resultado de conexão sucedida
        }
        
        public function isConnected(){//Função para verificar se está conectado com o banco
                return $this->connected;
        }//Fim da função
        
        
        public function lookup($sql){
                
            if ($this->debug){
                    echo $sql . PHP_EOL;
            }
    
            $dtset = $this->conn->query($sql);
            
            $result = NULL;
            
            if (!$dtset){
                    throw new Exception('Error on the query!' . $sql);
            }else{
                    $result = $dtset->fetchAll();
            }
    
            return $result;
                
        }
        
        public function debugOn(){
                $this->debug = TRUE;
        }
        
        
        public function exec($sql){
                
                try{
                        if ($this->debug){
                                echo $sql . PHP_EOL;
                        }
                        
                
                
                        $result = $this->conn->exec($sql);
                        
                        
                } catch (PDOException $e) {
                        echo $e->getCode(); 
                        echo $e->getMessage(); 
                        
                        $nome_arquivo = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'error_logs/' . date('Ymdhiu') . '.html';

                        file_put_contents($nome_arquivo, $e->getCode() . $e->getMessage(), FILE_APPEND);
                } 
                
                if ( $result === FALSE ){ //Compara com 3 = para garantir que o retorno seja booleano
                        $arr_err = $this->conn->errorInfo();
                        array_push($arr_err, $sql);
                        $error = print_r($arr_err);
                        //throw new Exception("Error" . $error);
                        echo $error;
                }
                
                return $result;
                
        }
        
        public function lastInsertId(){
                return $this->conn->lastInsertId();
        }
    }
	
	
    /************
        Como usar
        
        Primeiro: Deve se instanciar a classe, ex:
                $database = new DBConn();
                    
            obs: os dados de conexão foram fixados no constructor da classe, caso precise de outro banco,
            passar os parametros
                

        Após a classe ser instanciada como $database, podemos usar a classe com consulta ou execução de comando no banco.
        
        Usando como consulta:
                
            $resultado = $dataset->lookup("SELECT * FROM tabela");
                
        Usando com comandos
                
            $resultado = $dataset->exec("INSERT INTO tabela(campo1, campo2) value('valor1', 'valor2')");
            
    ************/
	
	

?>