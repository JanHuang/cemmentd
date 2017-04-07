
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
            ->addColumn('target_id', 'string', ['limit' => 60, 'comment' => '留言目标id，接受非整数类型id'])
            ->addColumn('user_id', 'string', ['limit' => 60])
            ->addColumn('nickname', 'string', ['limit' => 60])
            ->addColumn('title', 'string', ['limit' => 200])
            ->addColumn('content', 'text')
            ->addColumn('reply_id', 'integer')
            ->addColumn('reply_user_id', 'string', ['limit' => 60])
            ->addColumn('reply_nickname', 'string', ['limit' => 60])
            ->addColumn('comments_count', 'integer', ['comment' => '留言数量'])
            ->addColumn('like_count', 'integer')
            ->addColumn('is_locked', 'integer')
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