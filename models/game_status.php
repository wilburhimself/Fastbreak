<?php
class Game_status extends Model {
    public function __construct(){
        $this->type = 'game_status';
        $this->table_name = 'game_statuses';

        parent::__construct();
    }
}
