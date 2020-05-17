CREATE TABLE 'Products' (
  'ProductID' int(15) NOT NULL AUTO_INCREMENT,
  'ProductName' varchar(255) NOT NULL,
  'Description' varchar(255) NOT NULL,
  'Price' double(15,2) NOT NULL,
  'Image' varchar(255) NOT NULL,
  'Domain' varchar(20) NOT NULL,
  'Visit' int(15) NOT NULL,
  'ProductURL' varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE 'Reviews' (
  'CommentID' int(11) NOT NULL AUTO_INCREMENT,
  'ProductID' int(15) NOT NULL,
  'UserID' int(15) NOT NULL,
  'Domain' varchar(20) NOT NULL,
  'Rating' int(2) NOT NULL,
  'Comment' varchar(255) NOT NULL,
  FOREIGN KEY (ProductID) REFERENCES Products(ProductID),
  FOREIGN KEY (UserID) REFERENCES Users(UserID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;