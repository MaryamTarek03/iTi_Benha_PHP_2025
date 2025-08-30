<?php
/*
You are required to build a simple Library Management System using OOP in PHP.
Requirements:
    Class Book
        Properties: title, author, price.
        Methods:
            __construct($title, $author, $price) → initialize values.
            getDetails() → return book details as a string.
    Class Member
        Properties: name, memberId.
        Methods:
            __construct($name, $memberId) → initialize values.
            displayInfo() → display member details.
    Class Library
        Properties: array of books, array of members.
        Methods:
            addBook(Book $book) → add a new book.
            addMember(Member $member) → add a new member.
            showBooks() → display all books.
            showMembers() → display all members.
*/

class Book {
    private string $title;
    private string $author;
    private float $price;

    public function __construct(string $title, string $author, float $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getDetails() {
        return "Title: " . $this->title . ", Author: " . $this->author . ", Price: " . $this->price . " EGP";
    }
}

class Member {
    private string $name;
    private string $memberId;

    public function __construct(string $name, string $memberId) {
        $this->name = $name;
        $this->memberId = $memberId;
    }

    public function displayInfo() {
        return "Name: " . $this->name . ", Member ID: " . $this->memberId;
    }
}

class Library {
    private array $books = [];
    private array $members = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function addMember(Member $member) {
        $this->members[] = $member;
    }

    public function showBooks() {
        foreach ($this->books as $book) {
            echo $book->getDetails() . "\n";
        }
    }

    public function showMembers() {
        foreach ($this->members as $member) {
            echo $member->displayInfo() . "\n";
        }
    }
}
