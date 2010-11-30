<?php
class Team extends Model {
    public function __construct() {
        $this->type = 'Team';
        $this->table_name = 'teams';
        $this->has_many('Player', 'players');
        parent::__construct();
    }

    public function get_pitchers() {
        $p = new Player;
        $p->where('team_id='.$this->id);
        $p->where('player_type_id=2');
        return $p->get();
    }

    public function get_batters() {
        $p = new Player;
        $p->where('team_id='.$this->id);
        $p->where('player_type_id=1');
        return $p->get();
    }
    
}
