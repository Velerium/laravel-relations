<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Author;
use App\Category;
use App\Tag;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $authorIDList = [];

        for ($i = 0; $i < 5; $i++) {
            $authorObject = new Author();
            $authorObject->name = $faker->name();
            $authorObject->eMail = $faker->email();
            $authorObject->postsMade = $faker->randomNumber(3, false);
            $authorObject->save();
            $authorIDList[] = $authorObject->id;
        };

        $tagIDList = [];

        for ($i = 0; $i < 15; $i++) {
            $tagObject = New Tag();
            $tagObject->name = $faker->word();
            $tagObject->save();
            $tagIDList[] = $tagObject->id;
        }

        $categoryList = [
            'News & Affairs',
            'Health & Medicine',
            'Technology',
            'Art & Culture',
            'Politics',
            'Sports',
            'Lifestyle',
        ];

        $listOfCategoryID = [];

        foreach ($categoryList as $category) {
            $categoryObject = New Category();
            $categoryObject->name = $category;
            $categoryObject->save();

            $listOfCategoryID[] = $categoryObject->id;
        }

        for ($i = 0; $i < 30; $i++) {
            $articleObject = new Article();
            $articleObject->title = $faker->sentence(3);
            $articleObject->date = $faker->date();
            $articleObject->subtitle = $faker->sentence(3);
            
            $categoryKey = array_rand($listOfCategoryID);
            $categoryID = $listOfCategoryID[$categoryKey];
            $articleObject->category_id = $categoryID;
            
            $articleObject->content = $faker->paragraphs(15, true);
            $articleObject->picture = $faker->imageUrl(640, 480, 'person', true);
            $articleObject->author_id = array_rand(array_flip($authorIDList), 1);

            $tagKey = array_rand($tagIDList, 2);
            $tag1 = $tagIDList[$tagKey[0]];
            $tag2 = $tagIDList[$tagKey[1]];
            
            $articleObject->save();

            $articleObject->tag()->sync([$tag1, $tag2]);
        }
    }
}
