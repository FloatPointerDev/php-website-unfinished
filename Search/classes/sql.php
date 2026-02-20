<?php

class SQL
{
    public static $getAllBooks = "SELECT
        book_id, title, author, price, category, filename
        FROM books";
    public static $getSingleBook = "SELECT
        book_id, title, author, price, category, filename
        FROM books
        WHERE book_id = ?";

    public static function getBooksWithParams($params)
    {
        $sql = self::$getAllBooks;

        if (isset($params["category"]) && isset($params["searchTerm"])) {
            $sql .= " WHERE category = ? AND title LIKE ?";
        } else if (isset($params["category"])) {
            $sql .= " WHERE category = ?";
        } else if (isset($params["searchTerm"])) {
            $sql .= "WHERE title LIKE ?";
        }

        // Assumes that these fields are always set in $params
        $sql .= $params["sortField"] == "title" ? " ORDER BY title" : " ORDER BY price";
        $sql .= $params["sortBy"] == "ASC" ? " ASC" : " DESC";

        return $sql;
    }
}