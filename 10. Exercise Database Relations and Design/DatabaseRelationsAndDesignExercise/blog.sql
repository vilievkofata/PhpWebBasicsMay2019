CREATE DATABASE IF NOT EXISTS blog;
CREATE TABLE IF NOT EXISTS blog.posts
(
    id      INT AUTO_INCREMENT,
    title   VARCHAR(255)                       NOT NULL,
    content TEXT                               NOT NULL,
    author  VARCHAR(255)                       NULL,
    date    DATETIME DEFAULT CURRENT_TIMESTAMP NULL,
    CONSTRAINT posts_pk
        PRIMARY KEY (id)
);