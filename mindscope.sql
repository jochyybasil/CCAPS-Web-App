Drop database if exists MindScope;

Create database MindScope;
Use Mindscope;

CREATE TABLE Web_user (
    web_userID tinyint auto_increment,
    userFname varchar(20) NOT NULL,
    userLname varchar(27) NOT NULL,
    Inst_ID tinyint UNIQUE,
    DOB  date,
    phone_number varchar(14) NOT NULL UNIQUE,
    email_address varchar(60) NOT NULL UNIQUE,
    department varchar(50) NOT NULL,
    gender varchar(6) NOT NULL,
    
    PRIMARY KEY (web_userID)
);


CREATE TABLE Student(
    web_userID tinyint,
    year_group int NOT NULL,
    major varchar(25),
    
    PRIMARY KEY (web_userID)
);


CREATE TABLE CP_Staff (
     web_userID tinyint,
     user_role varchar(20) NOT NULL,
     title varchar (20) NOT NULL,
     dateJoined date,
     
     PRIMARY KEY(web_userID)
);


CREATE TABLE Therapy_session(
    therapyID int auto_increment,
    instructor_name varchar(47),
    duration time NOT NULL,
    location varchar(20),
    
    PRIMARY KEY(therapyID)
);


CREATE TABLE Individual_Sess(
     therapyID int,
     category varchar(20),
     PRIMARY KEY(therapyID)
);


CREATE TABLE Group_Session (
	therapyID int,
	topic varchar(20),
	PRIMARY KEY(therapyID)
);


CREATE TABLE Booking (
    bookingID int auto_increment,
    appointment_date date NOT NULL, 
    start_time time NOT NULL,
    StudentID tinyint NOT NULL, -- Student ID --
    InstructorID tinyint NOT NULL, -- Instructor ID --
    user_comment varchar(1000),
    therapyID int,
    
    PRIMARY KEY(bookingID),
    FOREIGN KEY(StudentID) REFERENCES Web_user(web_userID) ON DELETE CASCADE,
    FOREIGN KEY(InstructorID) REFERENCES Web_user(web_userID) ON DELETE CASCADE,
    FOREIGN KEY(therapyID) REFERENCES Therapy_session(therapyID)ON DELETE CASCADE


);


CREATE TABLE Review(
    reviewID tinyint auto_increment,
    event_name varchar(15) NOT NULL,
    review_date date,
    user_name varchar(47) NOT NULL,
    review text NOT NULL,
    bookingID int NULL,
    

    PRIMARY KEY(reviewID),
    FOREIGN KEY(bookingID) REFERENCES Booking(bookingID) ON DELETE CASCADE
);


CREATE TABLE Messages(
    messageID int auto_increment,
    sender_name varchar(50) NOT NULL,
    message_content text NOT NULL,
    receiver_name varchar(50) NOT NULL,
    
    PRIMARY KEY (messageID)
    
);

CREATE TABLE  MessageUser(
    web_userID tinyint,
    messageID int,
    
    FOREIGN KEY(web_userID) REFERENCES Web_User(web_userID) ON DELETE CASCADE,
    FOREIGN KEY(messageID) REFERENCES Messages(messageID) ON DELETE CASCADE
);

