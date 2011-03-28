<?php
class controller_index extends Controller {
    public function index() {
        $j = new Job;
        $this->t('jobs', partial_collection($j->get(array('limit' => 5)), 'jobs/item'));
        $c = new Category;
        $this->t('categories', partial_collection($c->get_non_empty(), 'categories/list_home'));
    }
}
?>