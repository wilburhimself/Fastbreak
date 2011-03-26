<?php
class controller_index extends controller_base {
    public function index() {
        $j = new Job;
        $this->t('jobs', partial_collection($j->get(), 'jobs/item'));
    }
}
?>