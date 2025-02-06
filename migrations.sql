/* CREATE DATABASE Blog;
USE Blog;
CREATE TABLE Comments(
ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
Content VARCHAR(1000)
);

INSERT INTO Comments(Content)
VALUES("IM 1");
SELECT * FROM comments;

/*USE Blog;

SELECT * FROM comments WHERE id = 1;

SELECT * FROM comments WHERE content
LIKE "Otrais%";*/

SELECT posts.*, categories.category_name FROM posts
LEFT JOIN categories
ON posts.category_id = categories.id
WHERE posts.id = 1;