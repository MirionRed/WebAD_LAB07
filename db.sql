create table announcement(
  id int(11) AUTO_INCREMENT,
  subject varchar(255),
  message text,
  type char(1),
  posted datetime,
  primary key(id)
)
