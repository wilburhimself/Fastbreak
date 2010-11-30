<?php
class Game extends Model {
    public function __construct() {
        $this->type = 'game';
        $this->table_name = 'games';
        $this->fields = array(
            'game_date', 'visitor', 'home', 'current_batter_id'
        );
        $this->belongs_to('Team', 'home_team');
        $this->belongs_to('Team', 'visitor_team');
        $this->belongs_to('Player', 'visitor_probable_pitcher');
        $this->belongs_to('Player', 'home_probable_pitcher');
        $this->belongs_to('Game_status', 'game_status');
        $this->belongs_to('Venue');

        $this->has_many('Inning', 'innings');
        $this->has_many('Homerun', 'homeruns');
        parent::__construct();
    }

    function current_inning() {
        $i = new Inning;
        $i->where('game_id='.$this->id);
        $options['order'] = 'id DESC';
        $inning = $i->get($options);
        $this->inning = $inning[0];
    }

    function games_today() {
        $games = new Game;
        $games->where('DATE(game_date) = "'.timeformat('date', time()).'"');

        return $games->get();
    }
}
