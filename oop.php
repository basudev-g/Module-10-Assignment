<?php 
/**
 * You are required to create a simple Library System in PHP using Object-Oriented Programming (OOP) principles.
 */

 class Book{
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies){
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getAvailableCopies(){
        return $this->availableCopies;
    }

    public function borrowBook(){
        // borrow book 
        $this->availableCopies--;
    }

    public function returnBook(){
        // return book
        $this->availableCopies++;
    }
}

 class Member{
     private $name;

     public function __construct($name){
        $this->name = $name;
     }
     public function getName(){
        return $this->name;
     }

     public function borrowBook(Book $book){
        // borrow book
        $book->borrowBook();        
     }

     public function returnBook(Book $book){
        // return book
        $book->returnBook(); 
     }
 }

 $book1 = new Book("The Great Gatsby", 5);
 $book2 = new Book("To Kill a Mockingbird", 3);

 $member1 = new Member("John Doe");
 $member2 = new Member("Jane Smith");

 $member1->borrowBook($book1);
 $member2->borrowBook($book2);

 printf("Available Copies of '%s': %d\n\n", $book1->getTitle(), $book1->getAvailableCopies());
 printf("Available Copies of '%s': %d\n\n", $book2->getTitle(), $book2->getAvailableCopies());
