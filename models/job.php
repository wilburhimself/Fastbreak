<?php
    class Job extends Model {
        public $title, $description, $category_id, $apply, $company, $company_url, $company_email, $location;
        public function __construct() {
            $this->type = 'job';
            $this->table_name = 'jobs';
            $this->fields = array(
                'title' => array(
                    'label' => 'título',
                    'type' => 'string',
                ),
                 'location' => array(
                    'label' => 'Ubicación',
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
                ),
                 'company' => array(
                    'label' => 'Compañía',
                    'type' => 'string',
                ),
                 'company_url' => array(
                    'label' => 'URL',
                    'type' => 'string',
                ),
                 'company_email' => array(
                    'label' => 'Email',
                    'type' => 'string',
                ),
                 'apply' => array(
                    'label' => 'Como aplicar',
                    'type' => 'text',
                ),
            );
            parent::__construct();

            $this->belongs_to('category');
        }
    }
?>