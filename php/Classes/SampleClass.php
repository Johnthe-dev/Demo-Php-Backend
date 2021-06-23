<?php

//namespace declaration
namespace JohnTheDev\DemoPhpBackend;
require_once(dirname(__DIR__) . "/Classes/autoload.php");
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

use Ramsey\Uuid\UuidInterface;

/**
 * @package DemoPhpBackend\SampleClass
 *
 * Description: This is a sample class that I may use to boilerplate classes in the future.
 *
 * @author John Johnson-Rodgers <John@johnthe.dev>
 * @version 1.0.0
 */
class SampleClass implements \JsonSerializable {
	use ValidateDate;
	use ValidateUuid;

	/**
	 * This is representative of any attribute that is a UUID and is stored as a 16 Bit Binary in MySQL.
	 * this is a
	 * SampleClass Attribute sampleClassId, required
	 * @var UuidInterface $sampleClassId
	 */
	private UuidInterface $sampleClassId;

	/**
	 * This is representative of any attribute that is a binary string and is stored as a Bit Binary in MySQL.
	 * sampleClass Attribute sampleClassBitsRequired, required
	 * @var  string $sampleClassBitsRequired
	 */
	private string $sampleClassBitsRequired;

	/**
	 * This is a representative of any attribute that is a blob (aka a binary large object).
	 * sampleClass Attribute sampleClassBlobNotRequired, not required
	 * @var string|null $sampleClassBlobNotRequired
	 */
	private string|null $sampleClassBlobNotRequired;

	/**
	 * This is a representative of any attribute that is a datetime that, if provided, must be in the future.
	 * sampleClass Attribute sampleClassDateTimeFutureNotRequired, not required
	 * @var string|\DateTime|null $sampleClassDateTimeFutureNotRequired
	 */
	private string|\DateTime|null $sampleClassDateTimeFutureNotRequired;

	/**
	 * This is a representative of any attribute that is a datetime and, when entered into the database, is always today's date.
	 * sampleClass Attribute sampleClassDateTimeNowNotRequired, required
	 * @var string|\DateTime $sampleClassDateTimeNowRequired
	 */
	private string|\DateTime $sampleClassDateTimeNowRequired;

	/**
	 * This is a representative of any attribute that is a datetime that must be provided and must be in the past.
	 * sampleClass Attribute sampleClassDateTimePastRequired, required
	 * @var string|\DateTime $sampleClassDateTimePastRequired
	 */
	private string|\DateTime $sampleClassDateTimePastRequired;

	/**
	 * This is a representative of any attribute that is one of the enumerated strings laid out in the creation of the table.
	 * sampleClass Attribute sampleClassEnumStringRequired, required
	 * @var string $sampleClassEnumStringRequired
	 */
	private string $sampleClassEnumStringRequired;

	/**
	 * This is a representative of any attribute that is a decimal that is required and where not rounding is important.
	 * sampleClass Attribute sampleClassExactDecimalRequired, required
	 * @var float $sampleClassExactDecimalRequired
	 */
	private float $sampleClassExactDecimalRequired;

	/**
	 * This is a representative of any attribute that is an integer and is not required.
	 * sampleClass Attribute sampleClassIntegerNotRequired, not required
	 * @var int|null $sampleClassIntegerNotRequired
	 */
	private int|null $sampleClassIntegerNotRequired;

	/**
	 * This is a representative of any attribute that is a json package that is not required.
	 * sampleClass Attribute sampleClassJsonPackageNotRequired, not required
	 * @var string|null $sampleClassJsonPackageNotRequired
	 */
	private string|null $sampleClassJsonPackageNotRequired;

	/**
	 * This is a representative of any attribute that is a required string with a specific length
	 * sampleClass Attribute sampleClassSetLengthStringRequired, required
	 * @var string $sampleClassSetLengthStringRequired
	 */
	private string $sampleClassSetLengthStringRequired;

	/**
	 * This is a representative of any attribute that is a string whose length can vary.
	 * sampleClass Attribute sampleClassVariableLengthStringRequired, required
	 * @var string $sampleClassVariableLengthStringRequired
	 */
	private string $sampleClassVariableLengthStringRequired;

	/***
	 *       _____    ____    _   _    _____   _______   _____    _    _    _____   _______    ____    _____
	 *      / ____|  / __ \  | \ | |  / ____| |__   __| |  __ \  | |  | |  / ____| |__   __|  / __ \  |  __ \
	 *     | |      | |  | | |  \| | | (___      | |    | |__) | | |  | | | |         | |    | |  | | | |__) |
	 *     | |      | |  | | | . ` |  \___ \     | |    |  _  /  | |  | | | |         | |    | |  | | |  _  /
	 *     | |____  | |__| | | |\  |  ____) |    | |    | | \ \  | |__| | | |____     | |    | |__| | | | \ \
	 *      \_____|  \____/  |_| \_| |_____/     |_|    |_|  \_\  \____/   \_____|    |_|     \____/  |_|  \_\
	 */

	/**
	 * Sample Class constructor.
	 * @param UuidInterface | string $sampleClassId
	 * @param string $sampleClassBitsRequired
	 * @param null|string $sampleClassBlobNotRequired
	 * @param null|string|\DateTime $sampleClassDateTimeFutureNotRequired
	 * @param string|\DateTime $sampleClassDateTimeNowRequired
	 * @param string|\DateTime $sampleClassDateTimePastRequired
	 * @param string $sampleClassEnumStringRequired
	 * @param float $sampleClassExactDecimalRequired
	 * @param int|null $sampleClassIntegerNotRequired
	 * @param string|null $sampleClassJsonPackageNotRequired
	 * @param string $sampleClassSetLengthStringRequired
	 * @param string $sampleClassVariableLengthStringRequired
	 * @throws \InvalidArgumentException if data is empty or Invalid
	 * @throws \RangeException if data is not the correct length
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception
	 */
	public function __construct(
		UuidInterface | string $sampleClassId, string $sampleClassBitsRequired, null|string $sampleClassBlobNotRequired,
		null|string|\DateTime $sampleClassDateTimeFutureNotRequired, string|\DateTime $sampleClassDateTimeNowRequired,
		string|\DateTime $sampleClassDateTimePastRequired, string $sampleClassEnumStringRequired,
		float $sampleClassExactDecimalRequired, int|null $sampleClassIntegerNotRequired,
		string|null $sampleClassJsonPackageNotRequired, string $sampleClassSetLengthStringRequired,
		string $sampleClassVariableLengthStringRequired) {
		try {
			//construct SampleClass
			$this->setSampleClassId($sampleClassId);
			$this->setSampleClassBitsRequired($sampleClassBitsRequired);
			$this->setSampleClassBlobNotRequired($sampleClassBlobNotRequired);
			$this->setSampleClassDateTimeFutureNotRequired($sampleClassDateTimeFutureNotRequired);
			$this->setSampleClassDateTimeNowRequired($sampleClassDateTimeNowRequired);
			$this->setSampleClassDateTimePastRequired($sampleClassDateTimePastRequired);
			$this->setSampleClassEnumStringRequired($sampleClassEnumStringRequired);
			$this->setSampleClassExactDecimalRequired($sampleClassExactDecimalRequired);
			$this->setSampleClassIntegerNotRequired($sampleClassIntegerNotRequired);
			$this->setSampleClassJsonPackageNotRequired($sampleClassJsonPackageNotRequired);
			$this->setSampleClassSetLengthStringRequired($sampleClassSetLengthStringRequired);
			$this->setSampleClassVariableLengthStringRequired($sampleClassVariableLengthStringRequired);
		} // determine which exception was thrown, if any
		catch(\InvalidArgumentException | \RangeException | \TypeError | \Exception $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}
	
	/***
	 *       _____   ______   _______   _______   ______   _____     _____       __   _____   ______   _______   _______   ______   _____     _____
	 *      / ____| |  ____| |__   __| |__   __| |  ____| |  __ \   / ____|     / /  / ____| |  ____| |__   __| |__   __| |  ____| |  __ \   / ____|
	 *     | |  __  | |__       | |       | |    | |__    | |__) | | (___      / /  | (___   | |__       | |       | |    | |__    | |__) | | (___
	 *     | | |_ | |  __|      | |       | |    |  __|   |  _  /   \___ \    / /    \___ \  |  __|      | |       | |    |  __|   |  _  /   \___ \
	 *     | |__| | | |____     | |       | |    | |____  | | \ \   ____) |  / /     ____) | | |____     | |       | |    | |____  | | \ \   ____) |
	 *      \_____| |______|    |_|       |_|    |______| |_|  \_\ |_____/  /_/     |_____/  |______|    |_|       |_|    |______| |_|  \_\ |_____/
	 */
	
	/**
	 * Method for retrieving sampleClassId
	 * Primary Key
	 * 
	 * @return UuidInterface
	 */
	public function getSampleClassId():UuidInterface{
		return $this->sampleClassId;
	}

	/**
	 * Method for setting sampleClassId
	 * @param UuidInterface|string $newSampleClassId
	 * @throws \Exception
	 * @throws \RangeException
	 * @throws \InvalidArgumentException
	 * @throws \TypeError
	 */
	public function setSampleClassId(UuidInterface | string $newSampleClassId):void {
		/*
		 * Check if sampleClassId is empty, throw an exception if it is
		 */
		if(empty($newSampleClassId)) {
			throw (new \RangeException("Sample Class Exception: sampleClassId is a required field."));
		}

		/**
		 * Try to convert new string or UuidInterface to UuidInterface, if it fails throw the appropriate exception
		 * Note: A new variable is used when converting to UuidInterface in order to avoid potential typing issues
		 */
		try {
			$uuid = self::validateUuid($newSampleClassId);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}

		//store value as sampleClassId in sampleClass object
		$this->sampleClassId = $uuid;
	}

	/**
	 * Method for retrieving sampleClassBitsRequired
	 *
	 * @return string
	 */
	public function getSampleClassBitsRequired():string {
		return $this->sampleClassBitsRequired;
	}

	/**
	 * Method for setting sampleClassBitsRequired
	 * 
	 * @param string $newSampleClassBitsRequired
	 * @throws \RangeException
	 */
	public function setSampleClassBitsRequired(string $newSampleClassBitsRequired):void {
		/*
		 * trim and run built in php sanitization on new string
		 */
		$newSampleClassBitsRequired=trim($newSampleClassBitsRequired);
		$newSampleClassBitsRequired=filter_var($newSampleClassBitsRequired, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		/*
		 * Check if string is null or has no characters, throw an exception if true
		 */
		if(empty($newSampleClassBitsRequired) || strlen($newSampleClassBitsRequired)<=0){
			throw (new \RangeException("Sample Class Exception: sampleClassBitsRequired is a required field."));
		}
		/*
		 * Check if string has too many characters to be stored in the database
		 */
		elseif(strlen($newSampleClassBitsRequired)>200){
			throw (new \RangeException("Sample Class Exception: sampleClassBitsRequired has too many characters after sanitization."));
		}

		$this->sampleClassBitsRequired=$newSampleClassBitsRequired;
	}

	/**
	 * Method for retrieving sampleClassBlobNotRequired
	 *
	 * @return string|null
	 */
	public function getSampleClassBlobNotRequired():null|string {
		return $this->sampleClassBlobNotRequired;
	}

	/**
	 * Method for setting the sampleClassBlobNotRequired
	 *
	 * @param string|null $newSampleClassBlobNotRequired
	 * @throws \RangeException
	 */
	public function setSampleClassBlobNotRequired(null|string $newSampleClassBlobNotRequired):void {
		if(empty($newSampleClassBlobNotRequired)){
			$newSampleClassBlobNotRequired=null;
		}
		/*
		 * trim and run built in php sanitization on new string
		 */
		$newSampleClassBlobNotRequired=trim($newSampleClassBlobNotRequired);
		$newSampleClassBlobNotRequired=filter_var($newSampleClassBlobNotRequired, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		/*
		 * Check if string is null or has no characters, throw an exception if true
		 */
		if(strlen($newSampleClassBlobNotRequired)<=0){
			throw (new \RangeException("Sample Class Exception: sampleClassBitsRequired is a required field."));
		}

		$this->sampleClassBlobNotRequired=$newSampleClassBlobNotRequired;
	}

	/**
	 * Method for retrieving sampleClassDateTimeFutureNotRequired
	 *
	 * @return null|\DateTime
	 */
	public function getSampleClassDateTimeFutureNotRequired(): null|\DateTime {
		return $this->sampleClassDateTimeFutureNotRequired;
	}

	/**
	 * Method for setting the sampleClassDateTimeFutureNotRequired
	 *
	 * @param string|null|\DateTime $newSampleClassDateTimeFutureNotRequired
	 * @throws \RangeException
	 * @throws \Exception
	 * @throws \InvalidArgumentException
	 * @throws \TypeError
	 */
	public function setSampleClassDateTimeFutureNotRequired(null|string|\DateTime $newSampleClassDateTimeFutureNotRequired):void {
		//checks if $newSampleClassDateTimeFutureNotRequired is empty, if so skip additional validation
		if(empty($newSampleClassDateTimeFutureNotRequired) === true) {
			$newSampleClassDateTimeFutureNotRequired = null;
		} else {
			/*
			 * validate datetime object
			 */
			try {
				$newSampleClassDateTimeFutureNotRequired = self::validateDateTime($newSampleClassDateTimeFutureNotRequired);
			} catch(\InvalidArgumentException | \RangeException | \TypeError | \Exception $exception) {
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exception->getMessage(), 0, $exception));
			}
			/*
			 * date time checked to ensure it is in the future on insert. If it was verified here it would interfere with
			 * creating objects from database results with sampleClassDateTimeFutureNotRequired that was in the future at
			 * time of creation, but no longer is.
			 */
		}
		//set DateTime variable or null to attribute in sampleClass object
		$this->sampleClassDateTimeFutureNotRequired=$newSampleClassDateTimeFutureNotRequired;
	}

	/**
	 * Method for retrieving sampleClassDateTimeNowRequired
	 *
	 * @return \DateTime
	 */
	public function getSampleClassDateTimeNowRequired():\DateTime {
		return $this->sampleClassDateTimeNowRequired;
	}

	/**
	 * Method for setting the sampleClassDateTimeNowRequired
	 *
	 * @param string|\DateTime $newSampleClassDateTimeNowRequired
	 * @throws \RangeException
	 * @throws \Exception
	 * @throws \InvalidArgumentException
	 * @throws \TypeError
	 */
	public function setSampleClassDateTimeNowRequired(string|\DateTime $newSampleClassDateTimeNowRequired):void {
		//checks if $newSampleClassDateTimeNowRequired is empty, if so set to now
		if(empty($newSampleClassDateTimeNowRequired) === true) {
			$newSampleClassDateTimeNowRequired = new \DateTime();
		} else {
			/*
			 * validate datetime object
			 */
			try {
				$newSampleClassDateTimeNowRequired = self::validateDateTime($newSampleClassDateTimeNowRequired);
			} catch(\InvalidArgumentException | \RangeException | \TypeError | \Exception $exception) {
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exception->getMessage(), 0, $exception));
			}
		}
		//set DateTime variable or null to attribute in sampleClass object
		$this->sampleClassDateTimeNowRequired=$newSampleClassDateTimeNowRequired;
	}

	/**
	 * Method for retrieving sampleClassDateTimePastRequired
	 *
	 * @return \DateTime
	 */
	public function getSampleClassDateTimePastRequired():\DateTime {
		return $this->sampleClassDateTimePastRequired;
	}

	/**
	 * Method for setting the sampleClassDateTimePastRequired
	 *
	 * @param string|\DateTime $newSampleClassDateTimePastRequired
	 * @throws \RangeException
	 * @throws \Exception
	 * @throws \InvalidArgumentException
	 * @throws \TypeError
	 */
	public function setSampleClassDateTimePastRequired(string|\DateTime $newSampleClassDateTimePastRequired):void {
		//checks if $newSampleClassDateTimePastRequired is empty, if so throw error
		if(empty($newSampleClassDateTimePastRequired) === true) {
			throw (new \RangeException("Sample Class Exception: sampleClassDateTimePastRequired is required."));
		} else {
			/*
			 * validate datetime object
			 */
			try {
				$newSampleClassDateTimePastRequired = self::validateDateTime($newSampleClassDateTimePastRequired);
			} catch(\InvalidArgumentException | \RangeException | \TypeError | \Exception $exception) {
				$exceptionType = get_class($exception);
				throw(new $exceptionType($exception->getMessage(), 0, $exception));
			}
		}
		/*
		 * ensure that datetime provided is in the past. Since all dates in the database should have been in the past
		 * when they were entered, this can be done in setter.
		 */
		$currentDatetime= new \DateTime();
		if($currentDatetime<$newSampleClassDateTimePastRequired){
			throw (new \RangeException("Sample Class Exception: sampleClassDateTimePastRequired needs to be a date in the past."));
		}
		//set DateTime variable or null to attribute in sampleClass object
		$this->sampleClassDateTimePastRequired=$newSampleClassDateTimePastRequired;
	}

	/**
	 * Method for retrieving sampleClassEnumStringRequired
	 *
	 * @return string
	 */
	public function getSampleClassEnumStringRequired():string {
		return $this->sampleClassEnumStringRequired;
	}

	/**
	 * Method for setting the sampleClassEnumStringRequired
	 *
	 * @param string $newSampleClassEnumStringRequired
	 * @throws \RangeException
	 */
	public function setSampleClassEnumStringRequired(string $newSampleClassEnumStringRequired):void {
		/*
		 * trim and run built in php sanitization on new string
		 */
		$newSampleClassEnumStringRequired=trim($newSampleClassEnumStringRequired);
		$newSampleClassEnumStringRequired=filter_var($newSampleClassEnumStringRequired, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		/*
		 * Check if string is null or has no characters, throw an exception if true
		 */
		if(empty($newSampleClassEnumStringRequired) || strlen($newSampleClassEnumStringRequired)<=0){
			throw (new \RangeException("Sample Class Exception: sampleClassEnumStringRequired is a required field."));
		}
		/*
		 * Check if string is one of the valid strings
		 */
		$stringOptionsArray=['itemOne','itemTwo','itemThree'];
		if(!in_array($newSampleClassEnumStringRequired, $stringOptionsArray, true)){
			throw (new \RangeException("Sample Class Exception: sampleClassEnumStringRequired is not one of the predefined acceptable values."));
		}

		$this->sampleClassEnumStringRequired=$newSampleClassEnumStringRequired;
	}

	/**
	 * Method for retrieving sampleClassExactDecimalRequired
	 *
	 * @return float
	 */
	public function getSampleClassExactDecimalRequired():float {
		return $this->sampleClassExactDecimalRequired;
	}

	/**
	 * Method for setting the sampleClassExactDecimalRequired
	 *
	 * @param float $newSampleClassExactDecimalRequired
	 * @throws \RangeException
	 */
	public function setSampleClassExactDecimalRequired(float $newSampleClassExactDecimalRequired):void {

		$newSampleClassExactDecimalRequired = filter_var($newSampleClassExactDecimalRequired, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		if(empty($newSampleClassExactDecimalRequired)&&$newSampleClassExactDecimalRequired!==0){
			throw (new \RangeException("Sample Class Exception: sampleClassExactDecimalRequired is a required field."));
		}
		/*
		 * Checking if value is too large or too small
		 */
		if($newSampleClassExactDecimalRequired>9999999999999.99){
			throw (new \RangeException("Sample Class Exception: sampleClassExactDecimalRequired is too large of a number."));
		}
		if($newSampleClassExactDecimalRequired<-9999999999999.99){
			throw (new \RangeException("Sample Class Exception: sampleClassExactDecimalRequired is too small of a number."));
		}
		/*
		 * Make variable a two decimal float.
		 */
		$newSampleClassExactDecimalRequired=round($newSampleClassExactDecimalRequired,2);
		$this->sampleClassExactDecimalRequired=$newSampleClassExactDecimalRequired;
	}

	/**
	 * Method for retrieving sampleClassIntegerNotRequired
	 *
	 * @return int|null
	 */
	public function getSampleClassIntegerNotRequired() : int|null {
		return $this->sampleClassIntegerNotRequired;
	}

	/**
	 * Method for setting the sampleClassIntegerNotRequired
	 *
	 * @param int|null $newSampleClassIntegerNotRequired
	 * @throws \RangeException
	 */
	public function setSampleClassIntegerNotRequired(int|null $newSampleClassIntegerNotRequired):void {
		$newSampleClassIntegerNotRequired = filter_var($newSampleClassIntegerNotRequired, FILTER_SANITIZE_NUMBER_INT);
		if(empty($newSampleClassIntegerNotRequired)&&$newSampleClassIntegerNotRequired!==0){
			$this->sampleClassIntegerNotRequired=null;
		} else {
			/*
			 * Checking if value is too large or too small
			 */
			if($newSampleClassIntegerNotRequired>2147483647){
				throw (new \RangeException("Sample Class Exception: sampleClassExactDecimalRequired is too large of a number."));
			}
			if($newSampleClassIntegerNotRequired<-2147483647){
				throw (new \RangeException("Sample Class Exception: sampleClassExactDecimalRequired is too small of a number."));
			}
			$this->sampleClassIntegerNotRequired=$newSampleClassIntegerNotRequired;
		}
	}

	/**
	 * Method for retrieving sampleClassJsonPackageNotRequired
	 *
	 * @return string|null
	 */
	public function getSampleClassJsonPackageNotRequired(): string|null {
		return $this->sampleClassJsonPackageNotRequired;
	}

	/**
	 * Method for setting the sampleClassJsonPackageNotRequired
	 *
	 * @param string|null $newSampleClassJsonPackageNotRequired
	 * @throws \RangeException
	 */
	public function setSampleClassJsonPackageNotRequired(string|null $newSampleClassJsonPackageNotRequired):void {
		/*
		 * trim and run built in php sanitization on new string
		 */
		$newSampleClassJsonPackageNotRequired=trim($newSampleClassJsonPackageNotRequired);
		$newSampleClassJsonPackageNotRequired=filter_var($newSampleClassJsonPackageNotRequired, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		/*
		 * Check if string is null or has no characters, throw an exception if true
		 */
		if(empty($newSampleClassJsonPackageNotRequired) || strlen($newSampleClassJsonPackageNotRequired)<=0){
			throw (new \RangeException("Sample Class Exception: sampleClassBitsRequired is a required field."));
		}
		/*
		 * Check if string has too many characters to be stored in the database
		 */
		elseif(strlen($newSampleClassJsonPackageNotRequired)>200){
			throw (new \RangeException("Sample Class Exception: sampleClassBitsRequired has too many characters after sanitization."));
		}

		$this->sampleClassJsonPackageNotRequired=$newSampleClassJsonPackageNotRequired;
	}

	/**
	 * Method for retrieving sampleClassSetLengthStringRequired
	 *
	 * @return string
	 */
	public function getSampleClassSetLengthStringRequired():string {
		return $this->sampleClassSetLengthStringRequired;
	}

	/**
	 * Method for setting the sampleClassSetLengthStringRequired
	 *
	 * @param string $newSampleClassSetLengthStringRequired
	 * @throws \RangeException
	 */
	public function setSampleClassSetLengthStringRequired(string $newSampleClassSetLengthStringRequired):void {
		/*
		 * trim and run built in php sanitization on new string
		 */
		$newSampleClassSetLengthStringRequired=trim($newSampleClassSetLengthStringRequired);
		$newSampleClassSetLengthStringRequired=filter_var($newSampleClassSetLengthStringRequired, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		/*
		 * Check if string is null or has no characters, throw an exception if true
		 */
		if(empty($newSampleClassSetLengthStringRequired) || strlen($newSampleClassSetLengthStringRequired)<=0){
			throw (new \RangeException("Sample Class Exception: sampleClassBitsRequired is a required field."));
		}
		/*
		 * Check if string has too many characters to be stored in the database
		 */
		elseif(strlen($newSampleClassSetLengthStringRequired)>200){
			throw (new \RangeException("Sample Class Exception: sampleClassBitsRequired has too many characters after sanitization."));
		}

		$this->sampleClassSetLengthStringRequired=$newSampleClassSetLengthStringRequired;
	}

	/**
	 * Method for retrieving sampleClassVariableLengthStringRequired
	 *
	 * @return string
	 */
	public function getSampleClassVariableLengthStringRequired():string {
		return $this->sampleClassVariableLengthStringRequired;
	}

	/**
	 * Method for setting the sampleClassVariableLengthStringRequired
	 *
	 * @param string $newSampleClassVariableLengthStringRequired
	 * @throws \RangeException
	 */
	public function setSampleClassVariableLengthStringRequired(string $newSampleClassVariableLengthStringRequired):void {
		/*
		 * trim and run built in php sanitization on new string
		 */
		$newSampleClassVariableLengthStringRequired=trim($newSampleClassVariableLengthStringRequired);
		$newSampleClassVariableLengthStringRequired=filter_var($newSampleClassVariableLengthStringRequired, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		/*
		 * Check if string is null or has no characters, throw an exception if true
		 */
		if(empty($newSampleClassVariableLengthStringRequired) || strlen($newSampleClassVariableLengthStringRequired)<=0){
			throw (new \RangeException("Sample Class Exception: sampleClassBitsRequired is a required field."));
		}
		/*
		 * Check if string has too many characters to be stored in the database
		 */
		elseif(strlen($newSampleClassVariableLengthStringRequired)>200){
			throw (new \RangeException("Sample Class Exception: sampleClassVariableLengthStringRequired has too many characters after sanitization."));
		}
		$this->sampleClassVariableLengthStringRequired=$newSampleClassVariableLengthStringRequired;
	}


	/***
	 *      __  __   ______   _______   _    _    ____    _____     _____
	 *     |  \/  | |  ____| |__   __| | |  | |  / __ \  |  __ \   / ____|
	 *     | \  / | | |__       | |    | |__| | | |  | | | |  | | | (___
	 *     | |\/| | |  __|      | |    |  __  | | |  | | | |  | |  \___ \
	 *     | |  | | | |____     | |    | |  | | | |__| | | |__| |  ____) |
	 *     |_|  |_| |______|    |_|    |_|  |_|  \____/  |_____/  |_____/
	 */

	/**
	 * INSERT
	 * Inserts sampleClass into MySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException if MySQL errors occur
	 * @throws \TypeError if $PDO is not a PDO connection object
	 */
	public function insert(\PDO $pdo): void {
		//create query template
		$query = "INSERT INTO sampleClass(loginAttemptId, loginAttemptDatetime, loginAttemptUsername) VALUES(:loginAttemptId, :loginAttemptDatetime, :loginAttemptUsername)";
		$statement = $pdo->prepare($query);
		//create parameters for query
		$parameters = [
			"loginAttemptId" => $this->loginAttemptId->getBytes(),
			"loginAttemptDatetime" => $this->loginAttemptDatetime->format("Y-m-d H:i:s"),
			"loginAttemptUsername" => $this->loginAttemptUsername
		];
		$statement->execute($parameters);
	}

	/**
	 * UPDATE
	 * updates sampleClass in MySQL database
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when MySQL related error occurs
	 * @throws \TypeError if $pdo is not pdo connection object
	 */
	public function update(\PDO $pdo): void {
		//create query template
		$query = "UPDATE sampleClass SET loginAttemptId = :loginAttemptId, loginAttemptDatetime = :loginAttemptDatetime, loginAttemptUsername = :loginAttemptUsername WHERE loginAttemptId = :loginAttemptId";
		$statement = $pdo->prepare($query);
		// set parameters to execute query
		$parameters = [
			"loginAttemptId" => $this->loginAttemptId->getBytes(),
			"loginAttemptDatetime" => $this->loginAttemptDatetime->format("Y-m-d H:i:s"),
			"loginAttemptUsername" => $this->loginAttemptUsername
		];
		$statement->execute($parameters);
	}

	/**
	 * DELETE
	 * deletes sampleClass from MySQL database
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mysql related errors occur
	 * @throws \TypeError when $pdo is not a PDO object
	 */
	public function delete(\PDO $pdo): void {
		//create query template
		$query = "DELETE FROM sampleClass WHERE sampleClassId = :sampleClassId";
		$statement = $pdo->prepare($query);
		//set parameters to execute query
		$parameters = ["sampleClassId" => $this->sampleClassId->getBytes()];
		$statement->execute($parameters);
	}
	}