<?php
class Category extends Model {
    public function __construct() {
        $this->type = 'category';
        $this->table_name = 'categories';
        $this->has_many('Job', 'jobs');
        parent::__construct();

    }

    public function get_non_empty() {
        unset($this->id);
        $cats = $this->get();
        $output = array();
        foreach ($cats as $cat) {
            $cat->load_related();
            if (sizeof($cat->jobs) > 0) {
                $output[] = $cat;
            }
        }
        return $output;
    }
}
