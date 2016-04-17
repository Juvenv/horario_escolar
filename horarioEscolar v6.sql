
DROP DATABASE IF EXISTS horarioEscolar;
CREATE DATABASE horarioEscolar;
USE horarioEscolar;

CREATE TABLE disciplinas (
id_disciplina int auto_increment PRIMARY KEY,
sigla_disciplina varchar(20) not null,
nome_disciplina varchar(20) not null,
login varchar(50) not null
);

CREATE TABLE docentes (
id_docente int auto_increment PRIMARY KEY,
matricula int not null,
nome_professor varchar(20) not null,
carga_horaria int not null, 	/* Numero de Aulas que o professor vai ter que ministrar */
data_contratacao date not null,
login varchar(50) not null
);

CREATE TABLE restricoes (
id_restricao int auto_increment PRIMARY KEY,
horario_inviavel varchar(3) not null,
id_docente int not null,
login varchar(50) not null,
FOREIGN KEY(id_docente) REFERENCES docentes (id_docente)
);

CREATE TABLE disciplinas_por_docente ( /* para que seja associoada mais de uma disciplina para o professor*/
id_disciplina_docente int auto_increment PRIMARY KEY,
id_disciplina int not null,
id_docente int not null,
login varchar(50) not null,
FOREIGN KEY(id_disciplina) REFERENCES disciplinas (id_disciplina),
FOREIGN KEY(id_docente) REFERENCES docentes (id_docente)
);

CREATE TABLE series (
id_serie int auto_increment PRIMARY KEY,
nome_serie varchar(20) not null,
login varchar(50) not null
);

CREATE TABLE disciplinas_por_serie (
id_disciplinas_serie int auto_increment primary key,
id_disciplina int not null,
id_serie int not null,
aulas_por_disciplina int not null,		/* Esse campo é onde diz quantas aulas na semana cada disciplina vai ter */
login varchar(50) not null,
FOREIGN KEY(id_disciplina) REFERENCES disciplinas (id_disciplina),
FOREIGN KEY(id_serie) REFERENCES series (id_serie)
);

create table turnos (
id_turno int auto_increment PRIMARY KEY,
nome_turno varchar(10) not null,
quantidade_de_aulas int not null, /* Quantas aulas semanais o turno terá */
login varchar(50) not null
);

CREATE TABLE turmas (
id_turma int auto_increment primary key,
nome_turma varchar(3) not null,
id_serie int not null,
id_turno int not null,
login varchar(50) not null,
FOREIGN KEY(id_serie) REFERENCES series (id_serie),
foreign key(id_turno) references turnos (id_turno)
);

CREATE TABLE horarios (
id_horario int auto_increment PRIMARY KEY,
aula int not null, 		/* horario da aula */
id_disciplina int not null,
id_docente int not null,
id_turma int not null,
login varchar(50) not null,
FOREIGN KEY(id_disciplina) REFERENCES disciplinas (id_disciplina),
FOREIGN KEY(id_docente) REFERENCES docentes (id_docente),
FOREIGN KEY(id_turma) REFERENCES turmas (id_turma)
);

create table usuarios (
login varchar(50) primary key,
senha varchar(50) not null,
nome_usuario varchar(50) not null,
sobrenome_usuario varchar(50) not null
);
