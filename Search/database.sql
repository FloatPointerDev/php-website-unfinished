DROP DATABASE IF EXISTS booklist;
CREATE DATABASE booklist;

USE booklist;

CREATE TABLE books (
  book_id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(128) NOT NULL,
  author VARCHAR(48) NOT NULL,
  price DECIMAL(8, 2) NOT NULL,
  category VARCHAR(16) NOT NULL,
  filename VARCHAR(64)
);

INSERT INTO books (title, author, price, category, filename) VALUES
("Complete Fairy Tales", "Hans Christian Andersen", 8.99, "Paperback", "fairy-tales.jpg"),
("Faust", "Johann Wolfgang von Goethe", 13.49, "Hardback", "faust.jpg"),
("Great Expectations", "Charles Dickens", 7.99, "Paperback", "great-expectations.jpg"),
("Gulliver's Travels", "Jonathan Swift", 8.49, "Paperback", "gullivers-travels.jpg"),
("Hamlet", "William Shakespeare", 12.49, "Hardback", "hamlet.jpg"),
("History: A Novel", "Elsa Morante", 14.99, "Hardback", "history.jpg"),
("Hunger", "Knut Hamsun", 6.99, "Paperback", "hunger.jpg"),
("Independent People", "Halldor Laxness", 8.99, "Paperback", "independent-people.jpg"),
("Invisible Man", "Ralph Ellison", 7.99, "Paperback", "invisible-man.jpg"),
("King Lear", "William Shakespeare", 15.99, "Hardback", "king-lear.jpg"),
("Leaves of Grass", "Walt Whitman", 8.49, "Paperback", "leaves-of-grass.jpg"),
("Love in the Time of Cholera", "Gabriel Garcia Marquez", 9.49, "Paperback", "love-in-the-time-of-cholera.jpg"),
("Medea", "Euripedes", 6.99, "Paperback", "medea.jpg"),
("Memoirs of Hadrian", "Marguerite Yourcenar", 7.99, "Paperback", "memoirs-of-hadrian.jpg"),
("Middlemarch", "George Eliot", 12.99, "Hardback", "middlemarch.jpg"),
("Midnight's Children", "Salman Rushdie", 10.49, "Paperback", "midnights-children.jpg"),
("Moby Dick", "Herman Melville", 8.49, "Paperback", "moby-dick.jpg"),
("Mrs Dalloway", "Virginia Woolf", 11.99, "Hardback", "mrs-dalloway.jpg"),
("Nineteen Eighty-Four", "George Orwell", 13.99, "Hardback", "nineteen-eighty-four.jpg");