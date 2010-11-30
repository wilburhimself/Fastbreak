<?php
    class negocios {
        public function __construct() {
            $this->db = get_db();
            $this->table_name = 'negocios';
        }
        
        function get_all($p=null) {
            if(!isset($p)) {
                $negocios = $this->db->select(array(
                    'from' => $this->table_name    
                ));
                return $negocios;
            }
            
        }
    }
?>