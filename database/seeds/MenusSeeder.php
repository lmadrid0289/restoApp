<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Menu;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

            $dummyCategory = collect([
                'soups', 'chicken Main course', 'Non-veg Rice', 'Non-veg Noodles'
            ]);
            $dummyCategory->each(function($value){
                factory(Category::class)->create(['name' => $value]);
            });
            $this->addSoups();
            $this->addMainCourse();
            $this->addNonVegRice();
            $this->addNonVegNoodles();

    }
    private function addSoups()
    {
        factory(Menu::class)->create([
            'name' => 'Chicken Barmee Soup',
            'price' => 170,
            'category_id' => 1,
            'description' => 'Chicken soup delicios with other ingredients and stuff like rice and carrots'
        ]);
        factory(Menu::class)->create([
            'name' => 'wonton soup',
            'price' => 80,
            'category_id' => 1,
            'description' => 'Chinese soup with dumplings'
        ]);
        factory(Menu::class)->create([
            'name' => 'Ajiaco',
            'price' => 120,
            'category_id' => 1,
            'description' => 'Colombian soup with chicken, potatos, carrots and peas'
        ]);
    }

    private function addMainCourse()
    {
        factory(Menu::class)->create([
            'name' => 'brazilian steak',
            'price' => 300,
            'category_id' => 2,
            'description' => 'Big grilled meat cut from brazil '
        ]);
        factory(Menu::class)->create([
            'name' => 'general Tao',
            'price' => 150 ,
            'category_id' => 2,
            'description' => 'Sweet chinese chicken with steam rice and an eggroll'
        ]);
        factory(Menu::class)->create([
            'name' => 'Sapo Chicken',
            'price' => 310,
            'category_id' => 2,
            'description' => 'Chinese indonesian tofy dish traditionally cooked and
                              serve in claypot.'
        ]);

    }

    private function addNonVegRice()
    {
        factory(Menu::class)->create([
            'name' => 'Chicken Fried Rice',
            'price' => 220,
            'category_id' => 3,
            'description' => 'Fried rice is a dish of cooked rice that has been stir-fried in a wok or a frying pan
                              and is usually mixed with other ingridients such as eggs,'
        ]);
        factory(Menu::class)->create([
            'name' => 'Hainanese Chicken Rice',
            'price' => 250,
            'category_id' => 3,
            'description' => 'Hainanese chicken rice is a dish adapted from early Chinese immigrants
                              oroginally from hainan province in souther China.'
        ]);
        factory(Menu::class)->create([
            'name' => 'Bandeja Paisa',
            'price' => 400,
            'category_id' => 3,
            'description' => 'Colombian tradicional dish serve with beans and avocado and arepa made from corn flour'
        ]);
    }

    private function addNonVegNoodles()
    {
        factory(Menu::class)->create([
            'name' => 'Singapor noodles',
            'price' => 180,
            'category_id' => 4,
            'description' => 'spicy noodles singaporean style with chicken'
        ]);
        factory(Menu::class)->create([
            'name' => 'chow mein noodles',
            'price' => 280,
            'category_id' => 4,
            'description' => 'Chow mein or Chinese stir-fried noodles, the name being the
                              romanization of the Tishanese chau-meing. the dish is popular throught
                              Chinese diaspora and appears on the menus of most Chinese restaurants'
        ]);
        factory(Menu::class)->create([
            'name' => 'vietnamese noodles',
            'price' => 200,
            'category_id' => 4,
            'description' => 'traditional vietnamese style noodles made from rice in floating
                              in a soup with vegetables'
        ]);
    }

}
