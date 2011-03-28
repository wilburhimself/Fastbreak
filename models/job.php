<?php
    class Job extends Model {
        public $title, $description, $category_id;
        public function __construct() {
            $this->type = 'job';
            $this->table_name = 'jobs';
            $this->fields = array(
                'title' => array(
                    'label' => 'título',
                    'type' => 'string',
                ),
                'description' => array(
                    'label' => 'Descripción',
                    'type' => 'text'
                ),
                'category_id' => array(
                    'label' => 'Categoría',
                    'type' => 'foreign',
                    'class' => 'Category',
                    'display' => 'name',
                    'field_name' => 'category_id'
                )
            );
            parent::__construct();

            $this->belongs_to('category');
        }
    }
?>