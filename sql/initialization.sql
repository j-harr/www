create table Room(
  RoomType varchar(25),
  RoomNumber int,
  Capacity int,
  PRIMARY KEY (RoomNumber)
  );
  
create table Guest1(
  GuestID int,
  F_Name varchar(25),
  M_Name varchar(25),
  L_Name varchar(25),
  Street varchar(50),
  City varchar(25),
  State varchar(25),
  Country varchar(25),
  ZIP int(6),
  Age int,
  NumInParty int,
  PRIMARY KEY (GuestID)
  );
  
create table Guest2(
  GuestID int,
  PhoneNumber varchar(10),
  PRIMARY KEY (GuestID, PhoneNumber),
  FOREIGN KEY (GuestID) references Guest1(GuestID)
  );
  
create table bill(
  BillNumber int(10),
  Date date,
  PRIMARY KEY (BillNumber)
  );
  
create table payment(
  BillNumber int(10),
  GuestID int,
  PaymentMethod varchar(25),
  PRIMARY KEY (GuestID, BillNumber),
  FOREIGN KEY (BillNumber) references bill(BillNumber),
  FOREIGN KEY (GuestID) references Guest1(GuestID)
  );

create table Booking(
  GuestID int,
  RoomNumber int,
  RoomRate int,
  DayStaying int,
  PRIMARY KEY (GuestID, RoomNumber),
  FOREIGN KEY (GuestID) references Guest1(GuestID),
  FOREIGN KEY (RoomNumber) references Room(RoomNumber)
  );
  
create table EmergencyContact(
  GuestID int,
  Name varchar(25),
  PhoneNumber varchar(10),
  Address varchar(50),
  PRIMARY KEY (GuestID),
  FOREIGN KEY (GuestID) references Guest1(GuestID)
  );
  
create table Food(
  FoodID int,
  FoodCost int,
  Tip int,
  PRIMARY KEY (FoodID)
  );
  
create table Restaurant(
  FoodID int,
  Name varchar(25),
  PRIMARY KEY (FoodID),
  FOREIGN KEY (FoodID) references Food(FoodID)
  );
  
create table Room_Service(
  FoodID int,
  RSFee int,
  PRIMARY KEY (FoodID),
  FOREIGN KEY (FoodID) references Food(FoodID)
  );
  

create table Buy(
  GuestID int,
  FoodID int,
  Quantity int,
  PaymentMethod varchar(25),
  PRIMARY KEY (GuestID, FoodID),
  FOREIGN KEY (GuestID) references Guest1(GuestID),
  FOREIGN KEY (FoodID) references Food(FoodID)
  );
  
create table FAndS(
  FacilityID int,
  FType varchar(25),
  FSRate int,
  PRIMARY KEY (FacilityID)
  );

create table UsedFS(
  GuestID int,
  FacilityID int,
  PRIMARY KEY (GuestID, FacilityID),
  FOREIGN KEY (GuestID) references Guest1(GuestID),
  FOREIGN KEY (FacilityID) references FAndS(FacilityID)
  );

insert into Room values('Single','100','2');
insert into Room values('Double','101','3');
insert into Room values('Single','102','2');
insert into Room values('Double','103','3');
insert into Room values('Single','104','2');
insert into Room values('Double','105','3');
insert into Room values('Single','106','2');
insert into Room values('Double','107','3');
insert into Room values('Single','108','2');
insert into Room values('Double','109','3');
insert into Room values('Single','200','2');
insert into Room values('Double','201','3');
insert into Room values('Single','202','2');
insert into Room values('Double','203','3');
insert into Room values('Single','204','2');
insert into Room values('Double','205','3');
insert into Room values('Single','206','2');
insert into Room values('Double','207','3');
insert into Room values('Single','208','2');
insert into Room values('Double','209','3');
insert into Room values('Suite','300','4');
insert into Room values('Suite','301','4');
insert into Room values('Suite','302','4');
insert into Room values('Suite','303','4');
insert into Room values('Suite','304','4');
insert into Room values('Suite','305','4');
insert into Room values('Suite','306','4');
insert into Room values('Suite','307','4');
insert into Room values('Suite','308','4');
insert into Room values('Suite','309','4');

insert into Guest1 values('0','Luke','Babes','Noble','111 3rd Street','Birchtree','Missouri','USA', '65438','20','1');
insert into Guest1 values('1','Cole','Bryan','Demming','1423 Oak Drive','Hillsboro','Illinois', 'USA','62049','19','4');
insert into Guest1 values('2','Dalton','Thomas','Loos','631 Washington Street','Ballwin', 'Missouri','USA','63011','20','2');
insert into Guest1 values('3','Benjamin','Clark','Wolfe','1242 Lake','Columbia','Missouri','USA', '65203','18','4');
insert into Guest1 values('4','Rashad','Donnell','Khoury','0310 Silk Road','Kfarshima',NULL, 'Lebanon',NULL,'19','3');
insert into Guest1 values('5','Erin','Paul','Fish','4424 Sunflower Lane','Raymore','Missouri', 'USA','64083','19','2');
insert into Guest1 values('6','Andrew','Kenneth','Floyd','313 Cliff Road','Wildwood','Missouri', 'USA','63040','19','2');
insert into Guest1 values('7','Robert','Daniel','Wyand','631 Washington Street','St. Charles', 'Missouri','USA','63303','18','3');
insert into Guest1 values('8','Savannah','Jane','Wittman','5123 Jame Street','Columbia', 'Missouri','USA','65203','18','3');
insert into Guest1 values('9','Joseph','Christian','Babcock','5424 Sunset Street','Bethalto','Illinois','USA','62010','19','2');

insert into Guest2 values('0','5802938493');
insert into Guest2 values('1','9086745645');
insert into Guest2 values('2','1834527481');
insert into Guest2 values('3','1638473093');
insert into Guest2 values('4','1264938467');
insert into Guest2 values('5','8759352672');
insert into Guest2 values('6','5834973843');
insert into Guest2 values('7','9783625347');
insert into Guest2 values('8','0687132654');
insert into Guest2 values('9','8362947263');

insert into Booking values('0','100','70','2');
insert into Booking values('1','300','100','1');
insert into Booking values('2','102','70','5');
insert into Booking values('3','301','100','2');
insert into Booking values('4','101','70','1');
insert into Booking values('5','104','70','3');
insert into Booking values('6','106','70','4');
insert into Booking values('7','103','70','2');
insert into Booking values('8','105','70','2');
insert into Booking values('9','108','70','1');



insert into EmergencyContact values('2','Bob','4729504320','631 Washington St Ballwin, MO, USA 63011');
insert into EmergencyContact values('4','Steven','9374857321','0310 Silk Rd Kfarshima, Lebanon');
insert into EmergencyContact values('9','Terry','2940394565','5424 Sunset St Bethalto, Illinois, USA 62010');

insert into bill values('1','2017-12-05');
insert into bill values('2','2017-12-06');
insert into bill values('3','2017-12-05');
insert into bill values('4','2017-12-03');

insert into payment values('1','0','cash');
insert into payment values('2','7','card');
insert into payment values('3','5','card');
insert into payment values('4','3','cash');

insert into Food values('0','10','2');
insert into Food values('1','14','4');
insert into Food values('2','8','1');
insert into Food values('3','15','4');
insert into Food values('4','7','2');

insert into Restaurant values('0','Chic-Fil-A');
insert into Restaurant values('1','Vending Machine 1');
insert into Restaurant values('2','Vending Machine 2');
insert into Restaurant values('3','Vending Machine 3');
insert into Restaurant values('4','McDonalds');


insert into Room_Service values('0','5');
insert into Room_Service values('1','5');
insert into Room_Service values('2','5');
insert into Room_Service values('3','5');
insert into Room_Service values('4','5');

insert into Buy values('0','3','1','cash');
insert into Buy values('2','1','2','card');
insert into Buy values('6','0','1','cash');

insert into FAndS values('0','Gym','10');
insert into FAndS values('1','Pool','5');
insert into FAndS values('2','Mini Golf','20');

insert into UsedFS values('2','0');
insert into UsedFS values('4','2');
insert into UsedFS values('6','1');
insert into UsedFS values('9','2');
