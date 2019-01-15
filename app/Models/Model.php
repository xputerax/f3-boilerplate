<?php

use DB\SQL;
use DB\SQL\Mapper;

namespace App\Models;

class Model extends Mapper
{
    protected $f3;
    protected $database_instance;
    private $table_name = '';

    public function __construct()
    {
        $this->f3 = \Base::instance();
        $this->database_instance = $this->f3->get('database');
        
        parent::__construct($this->database_instance, $this->table_name);
    }
}
