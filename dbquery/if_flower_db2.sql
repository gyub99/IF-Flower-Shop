create database if_flower_db;

use if_flower_db;

create table customer(
   ssn int not null AUTO_INCREMENT,
   customer_id varchar(20) not null,
   customer_pw varchar(20) not null,
   customer_name varchar(20) not null,
   customer_email varchar(45) not null,
   customer_address varchar(100) not null,
   primary key(ssn),
   unique key(customer_id)
);

create table product(
   product_id int not null AUTO_INCREMENT,
   product_name varchar(40) not null,
   product_description varchar(100),
   product_price int,
   product_sale boolean,
   product_best boolean,
   product_image varchar(400),
   product_recommendation boolean NULL DEFAULT NULL,
   primary key(product_id)
);


insert into product (product_name, product_price, product_description,product_image) values
  ("캄파눌라(초롱꽃)",20000, "종을 닮은 BELL FLOWER","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/0.PNG?raw=true"),
  ("스윗핑크 장미",25000, "선명한 핑크색상의 캔디","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/1.PNG?raw=true"),
  ("신지혜 파머 초이스",29000, "고민 많은 당신을 위한 제철 꽃 믹스","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/2.PNG?raw=true"),
  ("김규빈 파머 초이스",25000, "변함없는 사랑의 리시안셔스","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/3.PNG?raw=true"),
  ("옥시페탈룸",15000, "별을 닮은 꽃","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/4.PNG?raw=true"),
  ("양희진 파머 초이스",29000, "들꽃의 소박한 정취","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/5.PNG?raw=true"),
  ("IF 파머 초이스",20000, "청초한 느낌의 제철 꽃 믹스","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/6.PNG?raw=true"),
  ("골든볼 쏠리 믹스",19000, "옐로우로 즐기는 초여름 믹스","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/7.PNG?raw=true"),
  ("핑크 장미 믹스 2종",17000, "연인에게 장미로 전하는 마음","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/8.PNG?raw=true"),
  ("스프레이 델피늄",22000, "돌고래를 닮은 꽃잎","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/9.PNG?raw=true"),
  ("마가렛",22000, "진실한 사랑을 알고싶을 때","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/10.PNG?raw=true"),
  ("레인댄스 장미",28000, "연보라빛 첫사랑의 기억","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/11.PNG?raw=true"),
  ("알스트로메리아 믹스",13000, "남아메리카를 닮은 아름다움","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/12.PNG?raw=true"),
  ("해바라기",15000, "태양이 생각나는 꽃","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/13.PNG?raw=true"),
  ("수국",9900, "솜사탕같은 귀여운 모습","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/14.PNG?raw=true"),
  ("마트리카리아 캄파뉴",22000, "귀여운 들꽃느낌의 청초함","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/15.PNG?raw=true"),
  ("알륨",19000, "보라빛 꽃들의 둥근 모임","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/16.PNG?raw=true"),
  ("나르샤 장미",15000, "다크레드의 부드러운 벨벳 느낌","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/17.PNG?raw=true"),
  ("트롤리우스",19000, "섬세한 나비의 날개짓","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/18.PNG?raw=true"),
  ("옐로우 백합",15000, "순결, 변함없는 사랑","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/19.PNG?raw=true"),
  ("니겔라 컬러믹스",19000, "꿈길의 애정","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/20.PNG?raw=true"),
  ("우리타워 백합",15000, "순결, 변함없는 사랑","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/21.PNG?raw=true"),
  ("알스트로메리아",13000, "남아메리카를 닮은 아름다움","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/22.PNG?raw=true");

UPDATE product SET product_sale = true WHERE product_id in(1,8,10,15);
UPDATE product SET product_best = true WHERE product_id in(3,4,6,7);
UPDATE product SET product_recommendation = true WHERE product_id in(2,9,13,18);

create table cart(
   cart_id int not null AUTO_INCREMENT,
   cart_total int,
   customer_ssn int,
   primary key(cart_id),
   foreign key(customer_ssn) references customer(ssn)
);

create table cart_item(
   cart_item_id int not null AUTO_INCREMENT,
   product_id int,
   cart_id int,
   quantity int default 1,
   wrapping_color varchar(20),
   ribbon_color varchar(20),
   primary key(cart_item_id),
   foreign key(cart_id) references cart(cart_id),
   foreign key(product_id) references product(product_id)
);


create table custom_product(
    custom_product_id int not null AUTO_INCREMENT,
    customer_ssn int,
    cart_id int,
    quantity int,
    custom_product_total int,
    wrapping_color varchar(20),
    ribbon_color varchar(20),
    primary key(custom_product_id),
    foreign key (customer_ssn) references customer(ssn),
    foreign key (cart_id) references cart(cart_id)
);

create table custom_flower(
    custom_flower_id int not null AUTO_INCREMENT,
    custom_flower_name varchar(40),
    custom_flower_price int,
    custom_flower_image varchar(400),
    primary key(custom_flower_id)
);

insert into custom_flower (custom_flower_name, custom_flower_price, custom_flower_image) values
  ("flower1",7000, "https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/makingFlower/yellow1.png?raw=true"),
  ("flower2",9000, "https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/makingFlower/pink.png?raw=true"),
  ("flower3",9000, "https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/makingFlower/white1.png?raw=true"),
  ("flower4",7000, "https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/makingFlower/red1.png?raw=true"),
  ("flower5",6000, "https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/makingFlower/purple1.png?raw=true"),
  ("flower6",5000, "https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/makingFlower/orange.png?raw=true"),
  ("flower7",6000, "https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/makingFlower/skyblue.png?raw=true"),
  ("flower8",5000, "https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/makingFlower/blue2.png?raw=true");

create table custom_making(
    custom_making_id int not null AUTO_INCREMENT,
    custom_flower_id int,
    custom_product_id int,
    quantity int,
    custom_making_total int,
    primary key(custom_making_id),
    foreign key (custom_flower_id) references custom_flower(custom_flower_id),
    foreign key (custom_product_id) references custom_product(custom_product_id)
);


-- QNA 테이블 추가
CREATE TABLE `if_flower_db`.`qna` (
  `question_id` INT NOT NULL AUTO_INCREMENT,
  `user_id` VARCHAR(45) NOT NULL,
  `question_contents` VARCHAR(500) NOT NULL,
  `answer_contents` VARCHAR(500) NULL,
    PRIMARY KEY (`question_id`),
    INDEX `FK_QNA_idx` (`user_id` ASC) VISIBLE,
    CONSTRAINT `FK_QNA`
    FOREIGN KEY (`user_id`)
    REFERENCES `if_flower_db`.`customer` (`customer_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
  );



  CREATE TABLE `if_flower_db`.`coupon` (
    `coupon_id` INT NOT NULL,
    `coupon_content` VARCHAR(45) NULL,
    PRIMARY KEY (`coupon_id`));

    INSERT INTO `if_flower_db`.`coupon` (`coupon_id`, `coupon_content`) VALUES ('1', '주문제작 10%할인');
INSERT INTO `if_flower_db`.`coupon` (`coupon_id`, `coupon_content`) VALUES ('2', '배송비 무료');

CREATE TABLE `if_flower_db`.`customer_coupon_list` (
  `customer_id` INT NOT NULL,
  `coupon_id` INT NOT NULL,
  `expired_date` VARCHAR(45) NULL default null,
  PRIMARY KEY (`customer_id`, `coupon_id`),
  INDEX `fk_coupon_idx` (`coupon_id` ASC) VISIBLE,
  CONSTRAINT `fk_coupon`
    FOREIGN KEY (`coupon_id`)
    REFERENCES `if_flower_db`.`coupon` (`coupon_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_customer`
    FOREIGN KEY (`customer_id`)
    REFERENCES `if_flower_db`.`customer` (`ssn`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


  CREATE TABLE `if_flower_db`.`order_information` (
  `order_id` INT NOT NULL AUTO_INCREMENT,
  `ssn` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `zip_code` VARCHAR(45) NOT NULL,
  `delivery_address` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `delivery_message` VARCHAR(500) NOT NULL,
    PRIMARY KEY (`order_id`),
    CONSTRAINT `ORDER_INFO_SSN` FOREIGN KEY (`ssn`) REFERENCES `if_flower_db`.`customer` (`ssn`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
  );
