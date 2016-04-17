
DROP DATABASE IF EXISTS horarioEscolar;
CREATE DATABASE horarioEscolar;
USE horarioEscolar;

CREATE TABLE Disciplinas (
sigla_disciplina varchar(10) PRIMARY KEY,
disciplina varchar(20) not null
);

CREATE TABLE Docentes (
matricula int PRIMARY KEY,
nome_professor varchar(20) not null,
carga_horaria int not null, 	/* Numero de Aulas que o professor vai ter que ministrar */
data_contratacao date not null
);

CREATE TABLE Disciplinas_Por_Docente ( /* para que seja associoada mais de uma disciplina para o professor*/
id_Disciplina_Docente int auto_increment PRIMARY KEY,
matricula int,	         /* Fica mais fácil de fazer as pesquisas e organizar os dados*/
sigla_disciplina varchar(10) not null, /*além disso é um das etapas do projeto de BD, criar essas relações*/
FOREIGN KEY(matricula) REFERENCES Docentes (matricula),
FOREIGN KEY(sigla_disciplina) REFERENCES Disciplinas (sigla_disciplina)
);

CREATE TABLE Restricoes (
id_restricao int auto_increment PRIMARY KEY,
horario_inviavel varchar(3) not null,
matricula int not null,
FOREIGN KEY(matricula) REFERENCES Docentes (matricula)
);

CREATE TABLE Series (
serie varchar(10) PRIMARY KEY
);

CREATE TABLE Disciplinas_Por_Serie (
id_Disciplinas_Serie int auto_increment primary key,
serie varchar(10),
sigla_disciplina varchar(10) not null,
aulasPorDisciplina int not null,		/* Esse campo é onde diz quantas aulas na semana cada disciplina vai ter */
FOREIGN KEY(sigla_disciplina) REFERENCES Disciplinas (sigla_disciplina),
FOREIGN KEY(serie) REFERENCES Series (serie)
);

create table Turnos (
turno varchar(10) primary key,
quantidade_de_Aulas int not null /* Quantas aulas semanais o turno terá */
);

CREATE TABLE Turmas (
id_turma int auto_increment primary key,
turma varchar(10) not null,
turno varchar(10) not null,
serie varchar(10) not null,
FOREIGN KEY(serie) REFERENCES Series (serie),
foreign key(turno) references Turnos (turno)
);

CREATE TABLE Horarios (
id_horario int auto_increment PRIMARY KEY,
aulas int not null, 		/* horario da aula */
sigla_disciplina varchar(10) not null,
id_turma int not null,
matricula int not null,
FOREIGN KEY(sigla_disciplina) REFERENCES Disciplinas (sigla_disciplina),
FOREIGN KEY(id_turma) REFERENCES Turmas (id_turma),
FOREIGN KEY(matricula) REFERENCES Docentes (matricula)
);
