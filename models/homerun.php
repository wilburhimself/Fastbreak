<?php
class Homerun extends Model {
    public function __construct() {
        $this->type = 'homerun';
        $this->table_name = 'home_runs';

        $this->fields = array(
            'game_id', 'player_id'
        );

        $this->belongs_to('Game');
        $this->belongs_to('Player');

        parent::__construct();
    }
}
