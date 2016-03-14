DROP DATABASE IF EXISTS horarioEscolar;
CREATE DATABASE horarioEscolar;
USE horarioEscolar;

CREATE TABLE Disciplina (
codigo_disciplina varchar(10) PRIMARY KEY,
disciplina varchar(20) not null
);

CREATE TABLE Professor (
matricula int PRIMARY KEY,
professor varchar(20) not null,
carga_horaria int not null, 	/* Numero de Aulas que o professor vai ter que ministrar */
data_contratacao varchar(10) not null,
codigo_disciplina varchar(10) not null,
FOREIGN KEY(codigo_disciplina) REFERENCES Disciplina (codigo_disciplina)
);

CREATE TABLE Restrição_Horario (
codigo_restricao serial PRIMARY KEY,
horario_inviavel int not null,
matricula int not null,
FOREIGN KEY(matricula) REFERENCES Professor (matricula)
);

CREATE TABLE Serie (
serie varchar(10) PRIMARY KEY,
codigo_disciplina varchar(10) not null,
aulas_disciplina int not null,		/* Esse campo é onde diz quantas aulas na semana cada disciplina vai ter */
FOREIGN KEY(codigo_disciplina) REFERENCES Disciplina (codigo_disciplina)
);

CREATE TABLE Turma (
turma varchar(10) PRIMARY KEY,
turno varchar(10) not null,
serie varchar(10) not null,
FOREIGN KEY(serie) REFERENCES Serie (serie)
);

CREATE TABLE Horario (
codigo_horario serial PRIMARY KEY,
aula int not null, 		/* horario da aula */
codigo_disciplina varchar(10) not null,
turma varchar(10) not null,
matricula int not null,
FOREIGN KEY(codigo_disciplina) REFERENCES Disciplina (codigo_disciplina),
FOREIGN KEY(turma) REFERENCES Turma (turma),
FOREIGN KEY(matricula) REFERENCES Professor (matricula)
);
