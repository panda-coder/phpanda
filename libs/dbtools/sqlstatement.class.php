<?php
    /**
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package DBTools
    */
    /**
    * Interface para Tipos de Campos
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package DBTools
    */
    interface sqlObj
    {
        public function getInsertCommand();
        public function getUpdateCommand();
        public function getSelectCommand();
        public function setPrimaryKey($name);
    }
    
    /**
    * Campo de SQL
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package DBTools
    */
    class SQLField
    {
        const TYPE_VARCHAR2 = 1;
        const TYPE_NUMBER = 2;
        const TYPE_DATE = 3;
        const TYPE_RESERVED = 10;
        const TYPE_SYSTEM_DATE = 11;
        
        const DATABASE_ORA = 1;
        const DATABASE_MYSQL = 2;
        
        var $name, $value, $type, $char_sep;
        var $primary_key, $sgdb;
        
        function __construct( $name, $value, $type = SQLField::TYPE_VARCHAR2,
                             $char_sep = "`", $sgdb = SQLField::DATABASE_ORA
        ) {
            $this->name = $name;
            $this->value = $value;
            $this->type = $type;
            $this->char_sep = $char_sep;
            $this->sgdb = $sgdb;
        }
        
        public function setPrimary()
        {
            $this->primary_key = true;
        }
        public function unsetPrimary()
        {
            $this->primary_key = false;
        }
        public function isPrimary()
        {
            return $this->primary_key;
        }
        
        public function getSystemDateWord()
        {
            switch($this->sgdb){
                case SQLField::DATABASE_ORA:
                    return 'SYSDATE';
                    break;
                case SQLField::DATABASE_MYSQL:
                    return 'CURRENT_DATE';
                    break;
            }
        }
        
        public function getColumnName()
        {
            return $this->name; // ****** RETURN *********
        }
        public function getColumnValue()
        {
            switch($this->type){
                case SQLField::TYPE_DATE:
                case SQLField::TYPE_VARCHAR2:
                    return "'" . $this->value . "'";  // ****** RETURN *********
                    break;
                case SQLField::TYPE_RESERVED:
                case SQLField::TYPE_NUMBER: 
                    return $this->value; // ****** RETURN *********
                    break;
                case SQLField::TYPE_SYSTEM_DATE:
                    return $this->getSystemDateWord(); // ****** RETURN *********
                    break;
            }
        }
    }
    /**
    * Classe geradora de instrucao SQL
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package DBTools
    */
    class SQLStatement implements sqlObj{
        var $Fields = array(), $table_name;
        var $sgdb;
        
        function __construct($table_name, $sgdb)
        {
            $this->table_name = $table_name;
            $this->sgdb = $sgdb;
        }
        
        public function __AddField(SQLField $obj)
        {
            $this->Fields[ $obj->getColumnName() ] = $obj;
        }
        
        public function AddField(  $name, $value, $type = SQLField::TYPE_VARCHAR2  )
        {
            $this->__AddField( new SQLField($name, $value, $type, '', $this->sgdb ) );
        }
        
        public function getInsertCommand()
        {
            $names = array();
            $values = array();
            foreach($this->Fields as $field){
                array_push($names, $field->getColumnName() );
                array_push($values, $field->getColumnValue() );
            }
            
            return "INSERT INTO {$this->table_name} ( ". implode(",", $names)  ." ) VALUES(" . implode(",", $values) . ")";
        }
        public function getUpdateCommand()
        {
            $updating = array();
            $where_update = array();
            
            foreach($this->Fields as $field){
                array_push($updating, $field->getColumnName() . "=" . $field->getColumnValue() );
                
                if ( $field->isPrimary() ){
                    array_push($where_update, $field->getColumnName() . "=" . $field->getColumnValue() );
                }
            }
            
            return "UPDATE  {$this->table_name} SET ". implode(",", $updating)  ." WHERE (" . implode(",", $where_update) . ")";
        }
        public function setPrimaryKey($name)
        {
            $this->Fields[$name]->setPrimary();
        }
        
        public function getSelectCommand()
        {
            
        }
    }
    /**
    * Classe geradora de instrucao SQL(Padrao Oracle)
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package DBTools
    */
    class SQLStatementOracle extends SQLStatement
    {
        function __construct($table_name)
        {
            parent::__construct($table_name, SQLField::DATABASE_ORA );
        }
    }
    /**
    * Classe geradora de instrucao SQL(Padrao MySQL)
    * @author Ercy Moreira Neto <fireball.vb@gmail.com.br>
    * @version 0.1
    * @access public
    * @package DBTools
    */
    class SQLStatementMySQL extends SQLStatement
    {
        function __construct($table_name)
        {
            parent::__construct($table_name, SQLField::DATABASE_MYSQL );
        }
    }
?>