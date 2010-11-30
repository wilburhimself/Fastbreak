<?php
    class City extends Model {
        function __construct() {
            // tipo de dato del model .. se usa en el ORM
            $this->type = 'city';
            // tabla en la base de datos
            $this->table_name = 'cities';
            // campos en la base de datos, estos sirven para generar un formulario y para la validación desde el modelo
            $this->fields = array(
                'name' => array(
                    'type' => 'string',
                    'validation' => array('required'),
                    'label' => 'Nombre',
                ),
            );
            // relaciones, en este caso, una instancia tiene una lista de lugares en el atributo ->places
            $this->has_many('Place', 'places');
            $this->has_many('Game', 'games');
            // llamar el constructor del padre para obtener la base de datos
            parent::__construct();
        }

        // Esta funcion es lo que devuelve __to_string();
        function __unicode() {
            return $this->name;
        }
        
    }
?>