<?php
class inning extends Model {
    public function __construct() {
        $this->type = 'inning';
        $this->table_name = 'innings';

        $this->fields = array(
            'game_id',
        );

        $this->belongs_to('Game');
        parent::__construct();
    }

    public function add_hit($type) {
        $data['hits_'.$type] = $this->{"hits_".$type} + 1;
        $this->update($data);
        return $data['hits_'.$type];
    }

    public function remove_hit($type) {
        if ($this->{"hits_".$type} == 0) return $this->{"hits_".$type};
        $data['hits_'.$type] = $this->{"hits_".$type} - 1;
        $this->update($data);
        return $data['hits_'.$type];
    }

    public function add_run($type) {
        $data['runs_'.$type] = $this->{"runs_".$type} + 1;
        $this->update($data);
        return $data['runs_'.$type];
    }

    public function remove_run($type) {
        if ($this->{"runs_".$type} == 0) return $this->{"runs_".$type};
        $data['runs_'.$type] = $this->{"runs_".$type} - 1;
        $this->update($data);
        return $data['runs_'.$type];

    }

    public function add_error($type) {
        $data['errors_'.$type] = $this->{'errors_'.$type} + 1;
        $this->update($data);
        return $data['errors_'.$type];
    }

    public function remove_error($type) {
        if ($this->{"errors_".$type} == 0) return $this->{"errors_".$type};
        $data['errors_'.$type] = $this->{'errors_'.$type} - 1;
        $this->update($data);
        return $data['errors_'.$type];        
    }
}
 
