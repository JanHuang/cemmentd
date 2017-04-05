
<?php

use FastD\Model\Migration;
use Phinx\Db\Table;

class Discussion extends Migration
{
    /**
     * @return Table
     */
    public function setUp()
    {
        $table = $this->table('discussions');

        $table
            ->addColumn('title', 'string', ['limit' => 200])
            ->addColumn('comments_count', 'integer')
            ->addColumn('participants_count', 'integer')
            ->addColumn('number_index', 'integer')
            ->addColumn('is_approved', 'integer')
            ->addColumn('is_locked', 'integer')
            ->addColumn('is_sticky', 'integer')
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime')
        ;

        return $table;
    }
    
    /**
     * @return mixed
     */
    public function dataSet(Table $table)
    {
    
    }
}