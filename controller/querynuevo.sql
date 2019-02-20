-- cambio de dato para la columna adjuntoURL
ALTER TABLE Capacitacion_rol_tema ALTER COLUMN adjuntoURL integer;

use dace

CREATE TABLE documentos(
	idDocument integer not null,
	fecharegistro date,
	titulo varchar(500),
	namearchivo varchar(500),
	estado integer,
	PRIMARY KEY(idDocument)
);


ALTER TABLE Capacitacion_rol_tema ADD CONSTRAINT FK_DOCUMENTOS FOREIGN KEY(adjuntoURL) REFERENCES documentos(idDocument);

-- CREAR PROCEDIMIENTO PARA AGREGAR CAPACITACIONES Y ADJUNTOS

CREATE PROCEDURE SP_ADD_CAPACITACION_ADJUNTO
	@IDCAPACITACION INTEGER,
	@IDPERSONA INTEGER,
	@CANTIDADASISTENCIA INTEGER,
	@MUJERES INTEGER,
	@HOMBRES INTEGER,
	@FECHA VARCHAR(200),
	@HINICIAL VARCHAR(200),
	@HFINAL VARCHAR(200),
	@OBSERVACION VARCHAR(200),
	@TITULO VARCHAR(200),
	@NAMEDOCUMENT VARCHAR(200)
AS 
BEGIN 
	DECLARE
		@id integer

		SET @id = NEXT VALUE FOR SC_DOCUMENTOS;

	INSERT INTO Capacitacion_rol_tema(idCrolTema,idCapacitacion,idPersona_Rol,Cantidad_Persona,mujeres,hombres,observacion,fecha_capacitacion,horaInicial,horaFinal,adjuntoURL)
		VALUES(NEXT VALUE FOR SC_INGRESO_CAPACITACION,@IDCAPACITACION,@IDPERSONA,@CANTIDADASISTENCIA,@MUJERES,@HOMBRES,@OBSERVACION,@FECHA,@HINICIAL,@HFINAL,@id);

	INSERT INTO documentos(idDocument,fecharegistro,titulo,namearchivo,estado) 
	VALUES(@id,GETDATE(),@TITULO,@NAMEDOCUMENT,1);
END;



CREATE PROCEDURE SP_ADD_ADJUNTO_CAPACITACION

AS
BEGIN
	SELECT  C.idCrolTema,CAPA.descripcion,concat(Persona.nombre,' ', Persona.apellido),
			C.Cantidad_Persona,C.mujeres,C.hombres,Doc.titulo, Doc.namearchivo FROM Capacitacion_rol_tema C
		INNER JOIN Capacitacion CAPA ON CAPA.idCapacitacion = C.idCapacitacion
		INNER JOIN Persona_Rol P ON P.idProl = C.idPersona_Rol
		INNER JOIN Persona Persona ON Persona.dpi = P.idPersona
		INNER JOIN Documentos Doc ON Doc.idDocument = C.adjuntoURL;
END;


CREATE PROCEDURE SP_ALL_COMBO_CAPACITACION
AS
BEGIN
	SELECT  C.idCrolTema,CAPA.descripcion FROM Capacitacion_rol_tema C
		INNER JOIN Capacitacion CAPA ON CAPA.idCapacitacion = C.idCapacitacion;
END;



CREATE PROCEDURE SP_ADD_INDICADOR
	@IDPREGUNTA INTEGER,
	@IDCAPA INTEGER,
	@RESPUESTA VARCHAR(800)
AS
BEGIN
	INSERT INTO Indicador(idIndicador,idPregunta,idCap_Tema,respuesta)
		VALUES(NEXT VALUE FOR SC_INDICADOR,@IDPREGUNTA,@IDCAPA,@RESPUESTA);
END;

CREATE PROCEDURE SP_VIEW_INDICADOR
AS
BEGIN
	SELECT idIndicador as ID,P.pregunta AS PREGUNTA,respuesta AS RESPUESTA,CAP.descripcion AS CAPACITACION FROM Indicador I
		INNER JOIN Pregunta P ON P.idPregunta = I.idPregunta 
		INNER JOIN Capacitacion_rol_tema T ON T.idCrolTema = I.idCap_Tema
		INNER JOIN Capacitacion CAP ON CAP.idCapacitacion = T.idCapacitacion
END;


--graficos

CREATE PROCEDURE SP_GRAFICO_CAPACITACIONES_SEXO
	
AS
BEGIN
SELECT SUM(mujeres) as mujeres, sum(hombres) as hombres FROM Capacitacion_rol_Tema T
	INNER JOIN Capacitacion C ON C.idCapacitacion = T.idCapacitacion
		WHERE YEAR(T.fecha_capacitacion) = 2018
	GROUP BY C.descripcion
END;

