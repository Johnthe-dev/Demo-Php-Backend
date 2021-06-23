DROP TABLE IF EXISTS sampleClass;

CREATE TABLE sampleClass  (
	sampleClassId BINARY(16) NOT NULL,
	sampleClassBitsRequired BINARY(200) NOT NULL,
	sampleClassBlobNotRequired BLOB NULL,
	sampleClassDateTimeFutureNotRequired DATETIME NULL,
	sampleClassDateTimeNowRequired DATETIME NOT NULL,
	sampleClassDateTimePastRequired DATETIME NOT NULL,
	sampleClassEnumStringRequired ENUM('itemOne','itemTwo','itemThree') NOT NULL,
	sampleClassExactDecimalRequired DECIMAL(15,2) NOT NULL,
	sampleClassIntegerNotRequired INT NULL,
	sampleClassJsonPackageNotRequired JSON NULL,
	sampleClassSetLengthStringRequired CHAR(10) NOT NULL,
	sampleClassVariableLengthStringRequired VARCHAR(250) NOT NULL,
	PRIMARY KEY (sampleClassId)
	)

