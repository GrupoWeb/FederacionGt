CREATE DATABASE dace;
use dace;

CREATE TABLE Persona(
dpi integer not null,
nombre varchar(200),
apellido varchar(200),
fechaNac date,
edad integer,
direccion varchar(200),
telefono varchar(200),
fecharegistro date,
PRIMARY KEY(dpi)
);

CREATE TABLE Rol(
idrol integer not null,
descripcion varchar(200),
PRIMARY KEY(idrol)
);


CREATE TABLE Capacitacion(
idCapacitacion integer not null,
descripcion varchar(200),
PRIMARY KEY(idCapacitacion)
);

CREATE TABLE Persona_Rol(
	idProl integer not null,
	idPersona integer not null,
	idRol integer not null,
	PRIMARY KEY(idProl),
	CONSTRAINT FK_PERSONA_ROL_PERSONA FOREIGN KEY(idPersona)  REFERENCES Persona(dpi),
	CONSTRAINT FK_PERSONA_ROL_ROL FOREIGN KEY(idRol) REFERENCES Rol(idrol)
);

CREATE TABLE Capacitacion_rol_tema(
	idCrolTema integer not null,
	idCapacitacion integer not null,
	idPersona_Rol integer not null,
	Cantidad_Persona integer not null,
	mujeres integer,
	hombres integer,
	observacion varchar(300),
	fecha_capacitacion date,
	horaInicial Datetime,
	horaFinal Datetime,
	adjuntoURL varchar(800)
	PRIMARY KEY(idCrolTema),
	CONSTRAINT FK_CAPACITACION_ROL_CAPACITACION FOREIGN KEY(idCapacitacion) REFERENCES Capacitacion(idCapacitacion),
	CONSTRAINT FK_CAPACITACION_ROL_PERSONA FOREIGN KEY(idPersona_Rol) REFERENCES Persona_Rol(idProl)
);

CREATE TABLE Pregunta(
	idPregunta integer not null,
	pregunta varchar(800),
	PRIMARY KEY(idPregunta)
);

CREATE TABLE Indicador(
	idIndicador integer not null,
	idPregunta integer not null,
	idCap_Tema integer not null,
	respuesta varchar(800),
	PRIMARY KEY(idIndicador),
	CONSTRAINT FK_INDICADOR_PREGUNTA FOREIGN KEY(idPregunta) REFERENCES Pregunta(idPregunta),
	CONSTRAINT FK_INDICADOR_CAP_TEMA FOREIGN KEY(idCap_Tema) REFERENCES Capacitacion_rol_tema(idCrolTema)
);