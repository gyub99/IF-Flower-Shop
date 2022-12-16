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
    unique key uk_customer_id(customer_id)
);

create table product(
   product_id int not null AUTO_INCREMENT,
   product_name varchar(40) not null,
   product_description varchar(100),
   product_price int,
   product_sale boolean,
   product_best boolean,
   product_image varchar(400),
   primary key(product_id)
   
);

insert into product (product_name, product_price, product_description,product_image) values
  ("캄파눌라(초롱꽃)",20000, "종을 닮은 BELL FLOWER","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/0.PNG?raw=true"),
  ("스윗핑크 장미",25000, "선명한 핑크색상의 캔디","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/1.PNG?raw=true"),
  ("신지혜 파머 초이스",29000, "고민 많은 당신을 위한 제철 꽃 믹스","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/2.PNG?raw=true"),
  ("김규빈 파머 초이스",25000, "변함없는 사랑의 리시안셔스","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/3.PNG?raw=true"),
  ("옥시페탈룸",15000, "별을 닮은 꽃","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/4.PNG?raw=true"),
  ("양희진 파머 초이스",29000, "들꽃의 소박한 정취","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/5.PNG?raw=true"),
  ("딩가 파머 초이스",20000, "청초한 느낌의 제철 꽃 믹스","https://github.com/gyub99/IF-Flower-Shop/blob/master/picture/product/6.PNG?raw=true"),
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


drop table product;
desc customer;
desc product;

select * from product;