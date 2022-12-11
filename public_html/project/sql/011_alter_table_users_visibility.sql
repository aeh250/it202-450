ALTER table Users ADD COLUMN Visibility tinyint(1) 
default 0
COMMENT 'Boolean of public or not public profile';