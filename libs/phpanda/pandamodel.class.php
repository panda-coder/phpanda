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
        }
        /**
        * Dispara um erro
        * @access public
        *
        * @param string $error D
        */
        public function Save()
        {
            //TODO
        }
        
        public function __get($key)
        {
            return $this->getField($key);
        }
        public function __set($key, $value)
        {
            $this->setField($key, $value);
        }
        public function AddField($key, $type = '', $value = '', $size = NULL)
        {
            $this->fields["$key"] =  new PandaModelField($type, $value, $size);
        }
    }
    
    class PandaModelField extends PandaObject{
        public $value;
        public $type;
        public $size;
        
        public function __toString()
        {
            return $this->value;
        }
        public function __invoke($value)
        {
            $this->value = $value;
        }
        function __construct($type, $value , $size=10)
        {
            $this->value = $value;
            $this->type = $type;
            $this->size = $size;
        }
    }
    
    class PandaModelDB extends PandaModel
    {
        protected $table;
        protected $sql;
        function __construct()
        {
            parent::__construct();
        }
        public function InsertSQL()
        {
            $sql = new \SQLStatement( $this->table, 1 );
            
            foreach( $this->fields as $key => $valor ){
                $sql->AddField( $key , $valor->value );
            }
            
            return $sql->getInsertCommand();
        }
        
    }
}
?>