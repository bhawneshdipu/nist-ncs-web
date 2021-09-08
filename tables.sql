CREATE TABLE  IF NOT EXISTS guide_table  (
 guide_id SERIAL PRIMARY KEY , 
 guide_teacher VARCHAR(30) UNIQUE NOT NULL ,
 guide_student VARCHAR(30) UNIQUE NOT NULL 
 );

CREATE TABLE IF NOT EXISTS user_table (
  user_id  SERIAL PRIMARY KEY NOT NULL ,
  f_name varchar(30) NOT NULL,
  l_name varchar(30) NOT NULL,
  user_name varchar(30) NOT NULL UNIQUE ,
  user_pass varchar(30) NOT NULL,
  user_email varchar(30) NOT NULL UNIQUE ,
  user_nist_id VARCHAR(10) NOT NULL,
  user_branch VARCHAR(30) NOT NULL ,
  user_pin VARCHAR(4) NOT NULL,
  mobile VARCHAR (10) NOT NULL,
  user_account_type varchar(30) NOT NULL,
  user_gender varchar(10) NOT NULL,
  user_image VARCHAR(30) NOT NULL DEFAULT 'profile.jpg',
  guide_id SERIAL NOT NULL REFERENCES guide_table (guide_id), 
  user_priority INT NOT NULL DEFAULT '1'

)  ;


CREATE TABLE IF NOT EXISTS user_messages (
  id       SERIAL  PRIMARY KEY    ,
  sender   VARCHAR(30)  NOT NULL REFERENCES user_table (user_name),
  receiver VARCHAR(30)  NOT NULL REFERENCES user_table (user_name),
  msg      VARCHAR(512) NOT NULL,
  msg_time TIMESTAMP      NOT NULL
);

CREATE TABLE  IF NOT EXISTS  user_timeline (
  id SERIAL  PRIMARY KEY ,
  sender_name VARCHAR(30) NOT NULL  REFERENCES user_table(user_name),
  sender_post VARCHAR(512) NOT NULL ,
  post_time TIMESTAMP
);

CREATE TABLE IF NOT EXISTS admin_table (
 admin_id SERIAL NOT NULL  PRIMARY KEY ,
 admin_name VARCHAR(30) UNIQUE NOT NULL ,
 admin_pass VARCHAR(30) NOT NULL ,
 admin_email VARCHAR(30) UNIQUE NOT NULL ,
 admin_mobile VARCHAR(10) UNIQUE NOT NULL ,
 admin_master VARCHAR(30) NOT NULL 
);

CREATE TABLE IF NOT EXISTS notice_table (
 notice_id SERIAL NOT NULL  PRIMARY KEY ,
 notice_title VARCHAR(30) NOT NULL ,
 notice_subtitle VARCHAR(30) NOT NULL ,
 notice_date TIMESTAMP ,
 notice_body VARCHAR(2000) NOT NULL ,
 notice_master VARCHAR(30) NOT NULL,
 guide_id SERIAL NOT NULL REFERENCES guide_table (guide_id)
);

CREATE TABLE IF NOT EXISTS review_table (
 review_id SERIAL NOT NULL  PRIMARY KEY ,
 review_title VARCHAR(30) NOT NULL ,
 review_date TIMESTAMP ,
 review_msg VARCHAR(2000) NOT NULL ,
 review_marks SERIAL NOT NULL,
 review_master VARCHAR(30) NOT NULL,
 review_user_id SERIAL  NOT NULL REFERENCES user_table (user_id)
);
CREATE TABLE IF NOT EXISTS slide_table (
 slide_id  INTEGER NOT NULL  PRIMARY KEY ,
 slide_title VARCHAR(30) NOT NULL ,
 slide_msg VARCHAR(2000) NOT NULL
);
CREATE TABLE IF NOT EXISTS album_table (
 album_id SERIAL NOT NULL  PRIMARY KEY ,
 album_name VARCHAR(30) UNIQUE NOT NULL ,
 album_time TIMESTAMP
);
CREATE TABLE IF NOT EXISTS image_table (
 image_id  INTEGER NOT NULL  PRIMARY KEY ,
 image_title VARCHAR(100) NOT NULL ,
 album_id SERIAL NOT NULL  REFERENCES album_table (album_id) ,
 image_time TIMESTAMP
);

CREATE TABLE IF NOT EXISTS video_table (
 video_id  INTEGER NOT NULL  PRIMARY KEY ,
 video_title VARCHAR(100) UNIQUE  NOT NULL ,
 video_type VARCHAR(10)
);


CREATE TABLE IF NOT EXISTS thought_table (
  thought_id  SERIAL NOT NULL  PRIMARY KEY ,
  thought_msg VARCHAR(1000) NOT NULL ,
  thought_author VARCHAR(100)
);


INSERT INTO admin_table (admin_name, admin_pass, admin_email, admin_mobile, admin_master) VALUES ( 'admin', 'admin', 'admin@gmail.com', '7205772214', 'dipu')

