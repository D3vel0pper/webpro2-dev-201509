/**
    1. XAMPP コントロールパネルを開いて、MySQL を起動する。
    2. コマンドプロンプトを開き、次のコマンドを入力する
        mysql -u root -h 127.0.0.1
    3. 下記の SQL を順番に実行し、データベースを作成する。
 */

create database chat default character set utf8;

use chat;

create table users (
  id integer PRIMARY KEY AUTO_INCREMENT,
  login_id varchar(255)
);

create table rooms (
  id integer PRIMARY KEY AUTO_INCREMENT,
  title varchar(255),
  last_messaged_at timestamp
);

create table messages (
  id integer PRIMARY KEY AUTO_INCREMENT,
  user_id integer,
  room_id integer,
  body varchar(255),
  messaged_at timestamp
);
