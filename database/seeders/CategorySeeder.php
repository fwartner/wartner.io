<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * @var array
     */
    private $categories = [
        'uncategorized' => [
            'title' => 'Uncategorized',
            'banner' => '.png?theme=light&packageManager=&packageName=&pattern=architect&style=style_2&description=&md=1&showWatermark=0&fontSize=100px&images=document-text&widths=350&heights=350',
        ],
        'infrastructure' => [
            'title' => 'Infrastructure',
            'banner' => '.png?theme=light&packageManager=&packageName=&pattern=architect&style=style_2&description=&md=1&showWatermark=0&fontSize=100px&images=cloud&widths=350&heights=350',
        ],
        'php' => [
            'title' => 'PHP',
            'banner' => '.png?theme=light&packageManager=&packageName=&pattern=architect&style=style_2&description=&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Fwww.php.net%2Fimages%2Flogos%2Fphp-logo.svg&widths=350&heights=350',
        ],
        'laravel' => [
            'title' => 'Laravel',
            'banner' => '.png?theme=light&packageManager=&packageName=&pattern=architect&style=style_2&description=&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg&widths=350&heights=350',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect($this->categories)->each(function ($category) {
            $category = Category::create($category);
        });
    }
}
