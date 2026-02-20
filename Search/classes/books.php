<?php

require_once "classes/connection.php";
require_once "classes/sql.php";
require_once "classes/utils.php";

class Books
{
    public static function getBooks($sql, $params = [])
    {
        $conn = Connection::create();

        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $conn = null;

        return $books;
    }

    public static function getSingleBook($bookId)
    {
        $conn = Connection::create();

        $stmt = $conn->prepare(SQL::$getSingleBook);
        $stmt->execute([$bookId]);
        $book = $stmt->fetch(PDO::FETCH_ASSOC);

        $conn = null;

        return $book;
    }
}