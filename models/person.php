<?php
    class Person extends Model {
        function __construct() {
            $this->table_name = 'people';
            $this->fields = array(
                'name' => 'string',
                'email' => 'string',
            );
            parent::__construct();
        }
        
        function id() {
            return $this->id;
        }
        
        function display_name() {
            return $this->nombre.' '.$this->email;
        }
    }
?>