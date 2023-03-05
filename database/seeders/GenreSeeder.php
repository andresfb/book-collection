<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::factory(['name' => 'Art', 'slug' => Str::slug('Art')])->create();
        Genre::factory(['name' => 'Biography', 'slug' => Str::slug('Biography')])->create();
        Genre::factory(['name' => 'Business', 'slug' => Str::slug('Business')])->create();
        Genre::factory(['name' => 'Chick Lit', 'slug' => Str::slug('Chick Lit')])->create();
        Genre::factory(['name' => "Children's", 'slug' => Str::slug("Children's")])->create();
        Genre::factory(['name' => 'Christian', 'slug' => Str::slug('Christian')])->create();
        Genre::factory(['name' => 'Classics', 'slug' => Str::slug('Classics')])->create();
        Genre::factory(['name' => 'Comics', 'slug' => Str::slug('Comics')])->create();
        Genre::factory(['name' => 'Contemporary', 'slug' => Str::slug('Contemporary')])->create();
        Genre::factory(['name' => 'Cookbooks', 'slug' => Str::slug('Cookbooks')])->create();
        Genre::factory(['name' => 'Crime', 'slug' => Str::slug('Crime')])->create();
        Genre::factory(['name' => 'Dystopian', 'slug' => Str::slug('Dystopian')])->create();
        Genre::factory(['name' => 'Ebooks', 'slug' => Str::slug('Ebooks')])->create();
        Genre::factory(['name' => 'Erotic', 'slug' => Str::slug('Erotic')])->create();
        Genre::factory(['name' => 'Fantasy', 'slug' => Str::slug('Fantasy')])->create();
        Genre::factory(['name' => 'Fiction', 'slug' => Str::slug('Fiction')])->create();
        Genre::factory(['name' => 'Gay and Lesbian', 'slug' => Str::slug('Gay and Lesbian')])->create();
        Genre::factory(['name' => 'Graphic Novels', 'slug' => Str::slug('Graphic Novels')])->create();
        Genre::factory(['name' => 'Historical Fiction', 'slug' => Str::slug('Historical Fiction')])->create();
        Genre::factory(['name' => 'History', 'slug' => Str::slug('History')])->create();
        Genre::factory(['name' => 'Horror', 'slug' => Str::slug('Horror')])->create();
        Genre::factory(['name' => 'Humor and Comedy', 'slug' => Str::slug('Humor and Comedy')])->create();
        Genre::factory(['name' => 'Literary', 'slug' => Str::slug('Literary')])->create();
        Genre::factory(['name' => 'Manga', 'slug' => Str::slug('Manga')])->create();
        Genre::factory(['name' => 'Memoir', 'slug' => Str::slug('Memoir')])->create();
        Genre::factory(['name' => 'Music', 'slug' => Str::slug('Music')])->create();
        Genre::factory(['name' => 'Mystery', 'slug' => Str::slug('Mystery')])->create();
        Genre::factory(['name' => 'Nonfiction', 'slug' => Str::slug('Nonfiction')])->create();
        Genre::factory(['name' => 'Paranormal', 'slug' => Str::slug('Paranormal')])->create();
        Genre::factory(['name' => 'Philosophy', 'slug' => Str::slug('Philosophy')])->create();
        Genre::factory(['name' => 'Poetry', 'slug' => Str::slug('Poetry')])->create();
        Genre::factory(['name' => 'Psychology', 'slug' => Str::slug('Psychology')])->create();
        Genre::factory(['name' => 'Religion', 'slug' => Str::slug('Religion')])->create();
        Genre::factory(['name' => 'Romance', 'slug' => Str::slug('Romance')])->create();
        Genre::factory(['name' => 'Science', 'slug' => Str::slug('Science')])->create();
        Genre::factory(['name' => 'Science Fiction', 'slug' => Str::slug('Science Fiction')])->create();
        Genre::factory(['name' => 'Self Help', 'slug' => Str::slug('Self Help')])->create();
        Genre::factory(['name' => 'Suspense', 'slug' => Str::slug('Suspense')])->create();
        Genre::factory(['name' => 'Spirituality', 'slug' => Str::slug('Spirituality')])->create();
        Genre::factory(['name' => 'Sports', 'slug' => Str::slug('Sports')])->create();
        Genre::factory(['name' => 'Thriller', 'slug' => Str::slug('Thriller')])->create();
        Genre::factory(['name' => 'Travel', 'slug' => Str::slug('Travel')])->create();
        Genre::factory(['name' => 'Young Adult', 'slug' => Str::slug('Young Adult')])->create();
    }
}
