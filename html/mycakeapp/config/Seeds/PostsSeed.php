<?php
use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        foreach (range(1, 10) as $id) {
            $data[] = [
                'title' => "{$id}番目の投稿タイトル",
                'description' => "{$id}番目の投稿の概要",
                'body' => "{$id}番目の投稿の本文",
                'published' => 1,
                'created' => '2020-05-02 10:00:00',
                'modified' => '2020-05-02 10:00:00',
            ];
        }

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
