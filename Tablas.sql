CREATE TABLE `user` (  
  `rut` varchar(20) NOT NULL PRIMARY KEY,
  `dv`  varchar(1) NOT null,
  `name` varchar(500) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;