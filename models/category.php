<?php
class Category extends Model {
    public function __construct() {
        $this->type = 'category';
        $this->table_name = 'categories';

        parent::__construct();
    }
}
