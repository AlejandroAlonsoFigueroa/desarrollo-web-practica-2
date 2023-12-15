CREATE TABLE empleado
(
	clave integer,
	nombre character varying,
	direccion character varying,
	telefono character varying,
	CONSTRAINT pk_clave PRIMARY KEY (clave) 
);

INSERT INTO EMPLEADO(CLAVE, NOMBRE, DIRECCION, TELEFONO) VALUES(1, 'Alejandro', 'Mi casa', '3432423');
INSERT INTO EMPLEADO(CLAVE, NOMBRE, DIRECCION, TELEFONO) VALUES(2, 'Maria', 'su casa', '43289');
INSERT INTO EMPLEADO(CLAVE, NOMBRE, DIRECCION, TELEFONO) VALUES(3, 'Antonio', 'otra casa', '74834');
INSERT INTO EMPLEADO(CLAVE, NOMBRE, DIRECCION, TELEFONO) VALUES(4, 'Manuel', 'calle Allende', '9875349');
INSERT INTO EMPLEADO(CLAVE, NOMBRE, DIRECCION, TELEFONO) VALUES(5, 'Miguel', 'Desconocida', '8957934');