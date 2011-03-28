<?php
class controller_index extends Controller {
    public function index() {
        $j = new Job;
        $this->t('jobs', partial_collection($j->get(), 'jobs/item'));
    }
}
?>