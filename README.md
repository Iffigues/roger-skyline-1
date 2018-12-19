# roger-skyline-1
website loginfor roger-skyline-1 make with php7 apache2 and mysql

Pls in template/func/register.php put your mysql user name and your mysql user password to appropriate field

work with database name rose, table name rose and one row name login and row name pwd
CREATE TABLE rose (
login VARCHAR(100)  CHARACTER SET utf8 COLLATE utf8_bin NOT NULL UNIQUE,
pwd VARCHAR(255) NOT NULL
);
