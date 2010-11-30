<?php
class Venue extends Model {
    public function __construct() {
        $this->type = 'venue';
        $this->table_name = 'venues';

        parent::__construct();
    }
}
