
DROP DATABASE IF EXISTS horarioEscolar;
CREATE DATABASE horarioEscolar;
USE horarioEscolar;

CREATE TABLE Disciplina (
#id_disciplina serial PRIMARY KEY,
sigla_disciplina varchar(10) PRIMARY KEY,
disciplina varchar(20) not null
);

CREATE TABLE Professor (
#id_professor serial PRIMARY KEY,
matricula int PRIMARY KEY,
nome_professor varchar(20) not null,
carga_horaria int not null, 	/* Numero de Aulas que o professor vai ter que ministrar */
data_contratacao varchar(10) not null
);

CREATE TABLE DisciplinasPorProfessor ( /* para que seja associoada mais de uma disciplina para o professor*/
id_DisciplinasPorProfessor serial PRIMARY KEY,
matricula int,	         /* Fica mais fácil de fazer as pesquisas e organizar os dados*/
sigla_disciplina varchar(10) not null, /*além disso é um das etapas do projeto de BD, criar essas relações*/
FOREIGN KEY(matricula) REFERENCES Professor (matricula),
FOREIGN KEY(sigla_disciplina) REFERENCES Disciplina (sigla_disciplina)
);

CREATE TABLE Restricao (
id_restricao serial PRIMARY KEY,
horario_inviavel int not null,
matricula int not null,
FOREIGN KEY(matricula) REFERENCES Professor (matricula)
);

CREATE TABLE Serie (
#id_serie serial primary key,
serie varchar(10) PRIMARY KEY
);

CREATE TABLE DisciplinasPorSerie (
id_DisciplinasPorSerie serial primary key,
serie varchar(10),
sigla_disciplina varchar(10) not null,
aulasPorDisciplina int not null,		/* Esse campo é onde diz quantas aulas na semana cada disciplina vai ter */
FOREIGN KEY(sigla_disciplina) REFERENCES Disciplina (sigla_disciplina),
FOREIGN KEY(serie) REFERENCES Serie (serie)
);

create table Turno (
turno varchar(10) primary key,
quantidadeAulas int not null /* Quantas aulas semanais o turno terá */
);

CREATE TABLE Turma (
#id_turma serial primary key,
turma varchar(10) PRIMARY KEY,
turno varchar(10) not null,
serie varchar(10) not null,
FOREIGN KEY(serie) REFERENCES Serie (serie),
foreign key(turno) references Turno (turno)
);

CREATE TABLE Horario (
id_horario serial PRIMARY KEY,
aula int not null, 		/* horario da aula */
sigla_disciplina varchar(10) not null,
turma varchar(10) not null,
matricula int not null,
FOREIGN KEY(sigla_disciplina) REFERENCES Disciplina (sigla_disciplina),
FOREIGN KEY(turma) REFERENCES Turma (turma),
FOREIGN KEY(matricula) REFERENCES Professor (matricula)
);
