<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        Model::reguard();
    }
}
class BooksTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('books')->delete();

        Book::create(['title' => 'A Tale of Two Cities', 'author' => 'Charles Dickens', 'year' => '1859']);
        Book::create(['title' => 'The Lord of the Rings', 'author' => 'J. R. R. Tolkien', 'year' => '1954']);
        Book::create(['title' => 'And Then There Were None', 'author' => 'Agatha Christie', 'year' => '1939']);
        Book::create(['title' => 'The Hobbit', 'author' => 'J. R. R. Tolkien', 'year' => '1937']);
        Book::create(['title' => 'She: A History of Adventure', 'author' => 'H. Rider Haggard', 'year' => '1887']);
        Book::create(['title' => 'The Lion the Witch and the Wardrobe', 'author' => 'C. S. Lewis', 'year' => '1950']);
        Book::create(['title' => 'The Da Vinci Code', 'author' => 'Dan Brown', 'year' => '2003']);
        Book::create(['title' => 'The Catcher in the Rye', 'author' => 'J. D. Salinger', 'year' => '1951']);
        Book::create(['title' => 'Lolita', 'author' => 'Vladimir Nabokov', 'year' => '1955']);
        Book::create(['title' => 'Anne of Green Gables', 'author' => 'Lucy Maud Montgomery', 'year' => '1908']);
        Book::create(['title' => 'The Name of the Rose', 'author' => 'Umberto Eco','year' => '1980']);
        Book::create(['title' => 'The Eagle Has Landed', 'author' => 'Jack Higgins', 'year' => '1975']);
        Book::create(['title' => 'Watership Down', 'author' => 'Richard Adams', 'year' => '1972	']);
        Book::create(['title' => 'The Ginger Man', 'author' => 'J. P. Donleavy', 'year' => '1955']);
        Book::create(['title' => 'The Bridges of Madison County', 'author' => 'Robert James Waller', 'year' => '1991']);
        Book::create(['title' => 'The Tale of Peter Rabbit', 'author' => 'Beatrix Potter', 'year' => '1902']);
        Book::create(['title' => 'Harry Potter and the Deathly Hallows', 'author' => 'J. K. Rowling', 'year' => '2007']);
        Book::create(['title' => 'Jonathan Livingston Seagull', 'author' => 'Richard Bach', 'year' => '1970']);
        Book::create(['title' => 'A Message to Garcia', 'author' => 'Elbert Hubbard', 'year' => '1899']);
        Book::create(['title' => 'Flowers in the Attic', 'author' => 'V. C. Andrews', 'year' => '1979']);
        Book::create(['title' => 'War and Peace', 'author' => 'Leo Tolstoy', 'year' => '1869']);
        Book::create(['title' => 'The Adventures of Pinocchio', 'author' => 'Carlo Collodi', 'year' => '1881']);
        Book::create(['title' => 'Kane and Abel', 'author' => 'Jeffrey Archer', 'year' => '1979']);
        Book::create(['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'year' => '1960']);
        Book::create(['title' => 'Valley of the Dolls', 'author' => 'Jacqueline Susann', 'year' => '1966']);
        Book::create(['title' => 'Gone with the Wind', 'author' => 'Margaret Mitchell', 'year' => '1936']);
        Book::create(['title' => 'The Diary of a Young Girl', 'author' => 'Anne Frank', 'year' => '1947']);
        Book::create(['title' => 'One Hundred Years of Solitude', 'author' => 'Gabriel Garcia Marquez', 'year' => '1967']);
        Book::create(['title' => 'The Thorn Birds', 'author' => 'Colleen McCullough', 'year' => '1977']);
        Book::create(['title' => 'The Revolt of Mamie Stover', 'author' => 'William Bradford Huie', 'year' => '1951']);
        Book::create(['title' => 'The Girl with the Dragon Tattoo', 'author' => 'Stieg Larsson', 'year' => '2005']);

    }
}
