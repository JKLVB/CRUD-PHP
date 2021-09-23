CREATE SEQUENCE projeto.sq_funcionario
  INCREMENT 1
  MINVALUE 0
  MAXVALUE 2147483647
  START 1
  CACHE 1;
ALTER TABLE projeto.sq_funcionario
  OWNER TO postgres;
GRANT ALL ON SEQUENCE projeto.sq_funcionario TO postgres;
CREATE TABLE projeto.funcionario
(
  id integer NOT NULL DEFAULT nextval('projeto.sq_funcionario'::regclass),
  nome varchar(50) NOT NULL,
  login varchar(20) NOT NULL,
  senha varchar(8) NOT NULL,
  cpf varchar(11) NOT NULL,
  salario real NOT NULL,
  CONSTRAINT pk_funcionario PRIMARY KEY (id),
  CONSTRAINT uk_funcionario_login UNIQUE (login),
  CONSTRAINT uk_funcionario_cpf UNIQUE (cpf)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE projeto.funcionario
  OWNER TO postgres;
  
GRANT ALL ON TABLE projeto.funcionario TO postgres;