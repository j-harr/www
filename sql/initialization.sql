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
  PhoneNumber int,
  PRIMARY KEY (GuestID),
  FOREIGN KEY (GuestID) references Guest1(GuestID)
  );
  
create table bill(
  BillNumber int(10),
  Date int,
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
  CheckInDate int,
  CheckOutDate int,
  Occupied int,
  PRIMARY KEY (GuestID, RoomNumber),
  FOREIGN KEY (GuestID) references Guest1(GuestID),
  FOREIGN KEY (RoomNumber) references Room(RoomNumber)
  );
  
create table EmergencyContact(
  GuestID int,
  Name varchar(25),
  PhoneNumber int,
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
  
create table Resturant(
  FoodID int,
  Name varchar(25),
  DateReserved int,
  TimeReserved int,
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

insert into room values('Single','100','2');
insert into room values('Double','101','3');
insert into room values('Single','102','2');
insert into room values('Double','103','3');
insert into room values('Single','104','2');
insert into room values('Double','105','3');
insert into room values('Single','106','2');
insert into room values('Double','107','3');
insert into room values('Single','108','2');
insert into room values('Double','109','3');
insert into room values('Single','200','2');
insert into room values('Double','201','3');
insert into room values('Single','202','2');
insert into room values('Double','203','3');
insert into room values('Single','204','2');
insert into room values('Double','205','3');
insert into room values('Single','206','2');
insert into room values('Double','207','3');
insert into room values('Single','208','2');
insert into room values('Double','209','3');
insert into room values('Suite','300','4');
insert into room values('Suite','301','4');
insert into room values('Suite','302','4');
insert into room values('Suite','303','4');
insert into room values('Suite','304','4');
insert into room values('Suite','305','4');
insert into room values('Suite','306','4');
insert into room values('Suite','307','4');
insert into room values('Suite','308','4');
insert into room values('Suite','309','4');

