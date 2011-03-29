<?php
class Index extends Controller {
    public function index() {
        $c = new Category;
        $this->t('categories', partial_collection($c->get_non_empty(), 'categories/list_home'));
    }
}
?>