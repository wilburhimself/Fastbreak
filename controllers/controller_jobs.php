<?php
class controller_jobs extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function create() {
        $this->t('form', form(new Job));
    }

    public function save() {
        $j = new Job;
        $job = $this->Request->object;
        print_r($job);
        $j->save($job);
        #redirect('');
    }

    public function edit($params) {
        $j = new Job;
        $j->pk($params[0]);
        $this->t('form', $j->get()->form());
    }

    public function delete($params) {
        $j = new Job;
        $j->id = $params[0];
        $j->delete();
        redirect('');
    }
}
