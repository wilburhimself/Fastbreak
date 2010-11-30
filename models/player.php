<?php
class Player extends Model {
    public function __construct() {
        $this->type = 'player';
        $this->table_name = 'players';

         $this->fields = array(
            'team_id', 'name', 'player_type_id'
        );

        $this->belongs_to('Player_type');

        parent::__construct();
    }
}
