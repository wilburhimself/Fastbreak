<?php
    class Place extends Model {
        function __construct() {
            $this->type = 'place';
            $this->table_name = 'places';
            $this->fields = array(
                'name' => array(
                    'type' => 'string',
                    'validation' => array('required'),
                    'label' => 'Nombre',
                ),
                'address' => array(
                    'type' => 'text',
                    'validation' => array('required'),
                    'label' => 'direcci&oacute;n',
                ),
                'phone' => array(
                    'type' => 'string',
                    'validation' => array('required'),
                    'label' => 'Tel&eacute;fono',
                ),
                'city_id' => array(
                    'type' => 'foreign',
                    'class' => 'City',
                    'display' => 'name',
                    'widget' => 'select',
                    'label' => 'Ciudad',
                )
            );
            $this->belongs_to('City');
            parent::__construct();
        }

        function get_from_city($city) {
            $this->where('city_id='.$city);
            return $this->get();
        }

        function __unicode() {
            return $this->name;
        }

        function permalink() {
            return sprintf("lugares/%d", $this->id);
        }
        
    }
?>