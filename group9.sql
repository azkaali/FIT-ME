
DROP TABLE MEMBER CASCADE CONSTRAINTS;
DROP TABLE PLAN CASCADE CONSTRAINTS;
DROP TABLE WORKOUT CASCADE CONSTRAINTS;
DROP TABLE EXERCISE CASCADE CONSTRAINTS;
DROP TABLE EQUIPMENT CASCADE CONSTRAINTS;
DROP TABLE DIETPLAN CASCADE CONSTRAINTS;
DROP TABLE LOG CASCADE CONSTRAINTS;


CREATE TABLE MEMBER(
M_ID NUMBER(4) PRIMARY KEY, 
NAME VARCHAR2(20),
AGE NUMBER(3),
GENDER VARCHAR2(6),
HEIGHT_IN_METERS FLOAT(5),
WEIGHT_IN_KGS FLOAT(5)
);

CREATE TABLE PLAN(
P_ID NUMBER(4) PRIMARY KEY,
M_ID NUMBER(9),
CATEGORY VARCHAR2(30),
CONSTRAINT MID_FK
FOREIGN KEY(M_ID)
REFERENCES MEMBER(M_ID)
);

CREATE TABLE WORKOUT(
W_ID NUMBER(4) PRIMARY KEY,
P_ID NUMBER(4),
DURATION VARCHAR(20),
CONSTRAINT PID_FK
FOREIGN KEY(P_ID)
REFERENCES PLAN(P_ID)
);

CREATE TABLE EXERCISE(
EX_ID NUMBER(4) PRIMARY KEY,
W_ID NUMBER(4),
REPITIONS NUMBER(4),
EX_NAME VARCHAR2(25),
CONSTRAINT WID_FK
FOREIGN KEY(W_ID)
REFERENCES WORKOUT(W_ID)
);

CREATE TABLE EQUIPMENT(
EQ_ID NUMBER(4) PRIMARY KEY,
EX_ID NUMBER(4),
EQ_NAME VARCHAR2(25),
CONSTRAINT EXID_FK
FOREIGN KEY(EX_ID)
REFERENCES EXERCISE(EX_ID)
);

CREATE TABLE DIETPLAN(
D_ID NUMBER(4) PRIMARY KEY,
P_ID NUMBER(4),
DIET_TYPE VARCHAR2(20),
DIET_NAME VARCHAR2(50),
CONSTRAINT PID2_FK
FOREIGN KEY(P_ID)
REFERENCES PLAN(P_ID)
);

CREATE TABLE LOG(
LOG_ID NUMBER(4) PRIMARY KEY,
M_ID NUMBER(4),
NEW_HEIGHT FLOAT(5),
NEW_WEIGHT NUMBER(5),
LOG_DATE DATE,
CONSTRAINT MID2_FK
FOREIGN KEY(M_ID)
REFERENCES MEMBER(M_ID)
);


insert into member values(1,'Vara',19,'Female',1.5,55);
insert into member values(2,'Warda',18,'Female',1.6,75);
insert into member values(3,'Hasan',21,'Male',1.56,45);
insert into member values(4,'Husain',21,'Male',1.3,61);
insert into member values(5,'Ali',30,'Male',1.7,51);
insert into member values(6,'Ayesha',13,'Female',1.2,45);
insert into member values(7,'Zaid',21,'Male',1.5,65);
insert into member values(8,'Zain',22,'Male',1.5,56);
insert into member values(9,'Nisa',18,'Female',1.2,57);
insert into member values(10,'Zahra',55,'Female',1.3,51);
insert into member values(11,'Abid',35,'Male',1.6,52);
insert into member values(12,'Vasay',31,'Male',1.5,42);
insert into member values(13,'Mahnoor',23,'Female',1.65,65);
insert into member values(14,'Kinza',21,'Female',1.4,85);
insert into member values(15,'Laiba',16,'Female',1.3,55);


insert into plan values(1,1,'Weight Loss');
insert into plan values(2,2,'Weight Gain');
insert into plan values(3,3,'Weight Gain');
insert into plan values(4,4,'Weight Loss');
insert into plan values(5,4,'Weight Loss');
insert into plan values(6,5,'Weight Loss');



insert into workout values(1,1,'40 MINUTES');
insert into workout values(2,2,'30 MINUTES');
insert into workout values(3,3,'1 HOUR');
insert into workout values(4,4,'1.5 HOURS');
insert into workout values(5,4,'50 MINUTES');
insert into workout values(6,5,'20 MINUTES');

insert into EXERCISE values(1,1,4,'Muscle shredding');
insert into EXERCISE values(2,2,3,'Benchpress');
insert into EXERCISE values(3,3,5,'Squats');
insert into EXERCISE values(4,4,5,'Burpee');
insert into EXERCISE values(5,4,2,'Side shuffles');
insert into EXERCISE values(6,5,3,'Planks');

insert into equipment values(1,1,'Treadmill');
insert into equipment values(2,2,'Dumbbell');
insert into equipment values(3,3,'Stability Ball');
insert into equipment values(4,4,'Smith machine');
insert into equipment values(5,4,'Rowing Machine');
insert into equipment values(6,6,'Bar-bell');


insert into dietplan values(1,1,'Intermittent fasting','Zero-cal beverages,coffee,max-water intake');
insert into dietplan values(2,2,'Plant based','Stir-fry veges,Vege topped pizza');
insert into dietplan values(3,3,'Low-carb','Oat-meal breakfast,zucchini');
insert into dietplan values(4,4,'Mediterranean','Mashed cauliflower,extra-virgin olive-oil,nuts');
insert into dietplan values(5,4,'Low-fat','Beans, sweetpotatoes,mushrooms,garlic');
insert into dietplan values(6,5,'Protein-enriched','Shrimps,spinach,caesar salad');insert into dietplan values(1,1,'Intermittent fasting','Zero-cal beverages,coffee,max-water intake');
insert into dietplan values(2,2,'Plant based','Stir-fry veges,Vege topped pizza');
insert into dietplan values(3,3,'Low-carb','Oat-meal breakfast,zucchini');
insert into dietplan values(4,4,'Mediterranean','Mashed cauliflower,extra-virgin olive-oil,nuts');
insert into dietplan values(5,4,'Low-fat','Beans, sweetpotatoes,mushrooms,garlic');
insert into dietplan values(6,5,'Protein-enriched','Shrimps,spinach,caesar salad');


insert into log values(1,1,1.5,50,'27-Aug-2020');
insert into log values(2,2,1.6,78,'1-Dec-2020');
insert into log values(3,3,1.56,50,'10-Sept-2020');
insert into log values(4,4,1.3,57,'18-Jul-2019');
insert into log values(5,5,1.7,49,'17-May-2021');
insert into log values(6,6,1.2,44,'7-Mar-2020');






