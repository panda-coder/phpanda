<?php
namespace PHPanda
{
    /**
    * Classe para a Model
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package PHPanda
    */
    class PandaModel extends PandaObject
    {
        protected $regex = array();
        protected $fields = array();
        public function setField($key, $value)
        {
            if ( !isset($this->fields[$key]) ) {
                throw new PandaException("$key nao encontrado!");
            }
            $this->fields[$key]($value);
        }
        public function getField($key)
        {
            if ( !isset($this->fields[$key]) ) {
                throw new PandaException("$key nao encontrado!");
            }
            return $this->fields[$key];
        }
        function __construct()
        {
            //TODO
            $this->regex['int'] = '/^[\d\.\,]*$/';
            $this->regex['email'] = '/^[\d^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
        }
        /**
        * Retorna dados em JSon
        * @access public
        */
        public function getJSON()
        {
            $JSON = array();
            foreach( $this->fields as $key => $valor ){
                 $JSON[$key] = $valor->value;
            }
            return json_encode ( $JSON );
        }
        public function loadJSON($str)
        {
            $arrJSON = json_decode($str);
            foreach( $arrJSON as $key => $valor ){
                 $this->$key = $valor;
            }
        }
        /**
        * Retorna dados em XML
        * @access public
        */
        public function getXML()
        {
            $dom = new \DOMDocument('1.0', 'utf-8');
            foreach( $this->fields as $key => $valor ){
                $elem = $dom->createElement( $key, $valor->value );
                $elem->setAttribute('type', $valor->type );
                if ( $valor->PrimaryKey ){
                    $elem->setAttribute('PrimaryKey', '' );
                }
                $dom->appendChild( $elem );
            }
            return $dom->saveXML();
        }
        
        public function __get($key)
        {
            return $this->getField($key);
        }
        public function __set($key, $value)
        {
            $this->setField($key, $value);
        }
        /**
        * Adiciona um campo no Model
        * @access public
        *
        * @param string $key Nome do Campo a ser criado
        * @param string $type Tipo do campo
        * @param string $value Valor do campo
        * @param int Tamanho do campo
        * @param bool Se o campo é chave primaria
        */
        public function AddField($key, $type = '', $value = '', $size = 10, $pk = false)
        {
            switch( $type ){
                case "char":
                    if ( strlen($value) > $size ){
                        throw new PandaException("Valor ultrapassou o tamanho do campo.");
                    }
                    break;
                case "email":
                case "int":
                    $this->ValidaCampo($value, $key, $type);
                default:
                    //TODO
            }
            $this->fields["$key"] =  new PandaModelField($type, $value, $size, $pk);
        }
        
        private function ValidaCampo($v, $key, $tipo)
        {
            if ( !empty($v) ){
                if ( !preg_match( $this->regex[ $tipo ], $v ) ){
                    throw new PandaException("Valor de {$key} nao corresponde ao tipo de campo");
                }
            }
        }
        
    }
    
    class PandaModelField extends PandaObject{
        public $value;
        public $type;
        public $size;
        public $PrimaryKey;
        
        public function __toString()
        {
            return $this->value;
        }
        public function __invoke($value)
        {
            $this->value = $value;
        }
        function __construct($type, $value , $size=10, $pk = false)
        {
            $this->value = $value;
            $this->type = $type;
            $this->size = $size;
            $this->PrimaryKey = $pk;
        }
    }
    
    class PandaModelDB extends PandaModel
    {
        protected $table;
        protected $sql;
        protected $SGBD_TYPE;
        
        protected function ValidaTabela()
        {
            if ( empty($this->table ) ){
                throw new PandaException("Nome da tabela não foi especificada!");
            }
        }
        public function setTableName($name)
        {
            $this->table = $name;
        }
        function __construct($sgdb = \SQLField::DATABASE_ORA )
        {
            parent::__construct();
            
            $this->SGBD_TYPE = $sgdb;
        }
        public function InsertSQL()
        {
            $this->ValidaTabela();
            $sql = new \SQLStatement( $this->table, $this->SGBD_TYPE );
            
            foreach( $this->fields as $key => $valor ){
                $sql->AddField( $key , $valor->value );
            }
            
            return $sql->getInsertCommand();
        }
        public function createTableSQL()
        {
            $this->ValidaTabela();
            $sql = new \SQLStatement( $this->table, $this->SGBD_TYPE );
            
            foreach( $this->fields as $key => $valor ){
                $sql->AddField( $key , $valor->value );
            }
            
            return $sql->getCreateTable();
        }
    }
}
?>