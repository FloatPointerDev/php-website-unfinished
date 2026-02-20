<?php

class Components {
    /**
     * Output a standard page header.
     * 
     * $pageTitle - string
     * $stylesheets - array
     * $scripts - array
     */
    public static function pageHeader($pageTitle, $stylesheets, $scripts) {
        require "components/header.php";
    }

    /**
     * Output a standard page footer.
     */
    public static function pageFooter() {
        require "components/footer.php";
    }


    public static function displayBooks($books)
    {
        if (empty($books)) {
            require "components/no-books-found.php";
            return;
        }

        foreach ($books as $book) {
            $bookId = Utils::escape($book["book_id"]);
            $title = Utils::escape($book["title"]);
            $author = Utils::escape($book["author"]);
            $price = Utils::escape($book["price"]);
            $category = Utils::escape($book["category"]);
            $filename = Utils::escape($book["filename"]);

            require "components/book-preview.php";
        }
    }

    public static function displaySingleBook($book)
    {
        if (empty($book)) {
            require "components/no-single-book-found.php";
            return;
        }

        $bookId = Utils::escape($book["book_id"]);
        $title = Utils::escape($book["title"]);
        $author = Utils::escape($book["author"]);
        $price = Utils::escape($book["price"]);
        $category = Utils::escape($book["category"]);
        $filename = Utils::escape($book["filename"]);

        require "components/single-book.php";
    }
}