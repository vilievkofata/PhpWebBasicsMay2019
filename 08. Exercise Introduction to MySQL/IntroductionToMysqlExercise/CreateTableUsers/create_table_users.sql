CREATE TABLE users
(
    id              BIGINT AUTO_INCREMENT,
    username        CHAR(30)   NOT NULL,
    password        CHAR(26)   NOT NULL,
    profile_picture MEDIUMBLOB NULL,
    last_login_time TIMESTAMP  NULL,
    is_deleted      BOOL       NULL,
    CONSTRAINT users_pk
        PRIMARY KEY (id)
);
CREATE UNIQUE INDEX users_username_uindex
    ON users (username);
INSERT INTO users (username, password, profile_picture, last_login_time, is_deleted)
VALUES ('vilievkofata', 'VRI', NULL, NULL, FALSE),
       ('valchoemnqk', 'imenievboqna', NULL, NULL, FALSE),
       ('seksbog', 'sakskoborgotski69', NULL, NULL, TRUE),
       ('baumqu', 'interesnobesno', NULL, NULL, FALSE),
       ('dingdong', 'bamumamata', NULL, NULL, FALSE);