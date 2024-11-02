<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Writer;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $faker=Faker::create();
        $writers=Writer::all();
        
        $imageMapping=[
            'Machine Learning'=>'img/Machine Learning.jpeg',
            'Deep Learning'=>'img/Deep Learning.jpeg',
            'Natural Language Processing'=>'img/Natural Language Processing.jpeg',
            'Software Security'=>'img/Software Security.jpeg',
            'Network Administration'=>'img/Network Administration.jpeg',
            'Popular Network Technology'=>'img/Popular Network Technology.jpeg',
        ];

        $categories=[
            'Data Science'=>['Machine Learning', 'Deep Learning', 'Natural Language Processing'],
            'Network Security'=>['Software Security', 'Network Administration', 'Popular Network Technology']
        ];

        foreach ($writers as $writer){
            foreach ($categories as $category=>$topics){
                foreach ($topics as $topic){
                    Article::create([
                        'title'=>ucfirst($topic),
                        'author'=>$writer->name,
                        'writer_id'=>$writer->id,
                        'date'=>$faker->date(),
                        'category'=>$category,
                        'topic'=>$topic,
                        'content'=>$faker->paragraphs(5, true),
                        'image'=>$imageMapping[$topic] ?? 'img/default.jpeg',
                    ]);
                }
            }
        }
    }
}