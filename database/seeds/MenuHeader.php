<?php
use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuHeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = config('db.menu');


        foreach ($menu as $item) {
            $_item = new Menu();
            $_item->hrefRoute = $item['href'];
            $_item->nameRoute = $item['text'];
            $_item->save();
        }
    }
}
