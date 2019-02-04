drop table if exists `tasks`;

CREATE TABLE `tasks` (
  `id` int(10) unsigned not null auto_increment,
  `name` varchar(255) not null,
  `created_at` timestamp not null default current_timestamp,
  `updated_at` timestamp not null default current_timestamp,
  primary key (`id`)
) engine=innodb;
