<?php
class Player_type extends Model {
    public function __construct() {
        $this->type = 'player_type';
        $this->table_name = 'player_types';

        parent::__construct();
    }
}
