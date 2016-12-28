CREATE TABLE user(
    user_no         int AUTO_INCREMENT,
    user_id         varchar(30),
    user_pw         varchar(30),
    user_name       varchar(30),
    user_birth      varchar(30),
    user_phone      varchar(30),
    user_addr       varchar(30),
    user_email      varchar(30),
    user_gender     varchar(30),
    user_joinDate   varchar(30),
PRIMARY KEY(user_no)
);

CREATE TABLE QnA(
    b_no            int AUTO_INCREMENT,
    b_title         varchar(30),
    b_content       varchar(5000),
    b_writer        varchar(30),
    b_date          varchar(30),
    b_viewed        int,
    b_fileURL       varchar(1000),
    b_owner         varchar(30),
    b_update        varchar(10),
    PRIMARY KEY(b_no)
);


CREATE TABLE item_board(
    item_no         int AUTO_INCREMENT,
    item_name       varchar(30),
    item_title      varchar(50),
    item_content    varchar(5000),
    item_titleImg   varchar(300),
    item_imgSRC     varchar(500),
    item_price      varchar(50),
    item_kind       varchar(30),
    item_owner      varchar(50),
    PRIMARY KEY(item_no)
);

CREATE TABLE delivery(
    d_no            int AUTO_INCREMENT,
    item_no         varchar(300),
    item_name       varchar(300),
    item_price      varchar(300),
    item_titleImg   varchar(300),
    item_quantity   varchar(20),
    user_addr       varchar(100),
    user_name       varchar(100),
    user_email      varchar(100),
    user_phone      varchar(100),
    user_id         varchar(100),
    d_date          varchar(100),
    PRIMARY KEY(d_no)
);

INSERT INTO QnA VALUES('','TESTTITLE','T_CONTENT','TESTER','2016-12-13/13:22:00',0,'X','1',0);
INSERT INTO QnA VALUES('','TESTTITLE','T_CONTENT','TESTER','2016-12-13/13:22:00',0,'X','1',0);
INSERT INTO QnA VALUES('','TESTTITLE','T_CONTENT','TESTER','2016-12-13/13:22:00',0,'X','1',0);
    INSERT INTO QnA VALUES('','TESTTITLE','T_CONTENT','TESTER','2016-12-13/13:22:00',0,'X','1',0);
    INSERT INTO QnA VALUES('','TESTTITLE','T_CONTENT','TESTER','2016-12-13/13:22:00',0,'X','1',0);
    INSERT INTO QnA VALUES('','TESTTITLE','T_CONTENT','TESTER','2016-12-13/13:22:00',0,'X','1',0);
INSERT INTO QnA VALUES('','TESTTITLE','T_CONTENT','TESTER','2016-12-13/13:22:00',0,'X','1',0);
INSERT INTO QnA VALUES('','TESTTITLE','T_CONTENT','TESTER','2016-12-13/13:22:00',0,'X','1',0);
INSERT INTO QnA VALUES('','TESTTITLE','T_CONTENT','TESTER','2016-12-13/13:22:00',0,'X','1',0);
INSERT INTO QnA VALUES('','TESTTITLE','T_CONTENT','TESTER','2016-12-13/13:22:00',0,'X','1',0);
