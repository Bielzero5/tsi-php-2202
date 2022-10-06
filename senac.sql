# mysql -u root -p

use senac

create table alunos (id bigint unsigned not null primary key auto_increment, nome varchar(255), turno enum('matutino', 'vespertino', 'noturno'), inicio date);

INSERT INTO alunos (nome, turno, inicio) VALUES ('Bono', 'noturno', CURRENT_DATE());