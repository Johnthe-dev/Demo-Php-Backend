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
	 * This is a representative of any attribute that is a double that will be rounded to two decimals in SQL.
	 * sampleClass Attribute sampleClassRoundedDecimalNotRequired, not required
	 * @var float|null $sampleClassRoundedDecimalNotRequired
	 */
	private float|null $sampleClassRoundedDecimalNotRequired;

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
	 * @param float|null $sampleClassRoundedDecimalNotRequired
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
		string|null $sampleClassJsonPackageNotRequired, float|null $sampleClassRoundedDecimalNotRequired,
		string $sampleClassSetLengthStringRequired, string $sampleClassVariableLengthStringRequired) {
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
			$this->setSampleClassRoundedDecimalNotRequired($sampleClassRoundedDecimalNotRequired);
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
	 * Method for 
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
	 * Method for 
	 */
	public function getSampleClassBitsRequired():string {
		return $this->sampleClassBitsRequired;
	}

	/**
	 * Method for 
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
	 * Method for 
	 */
	public function getSampleClassBlobNotRequired():null|string {
		return $this->sampleClassBlobNotRequired;
	}

	/**
	 * Method for 
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
	 * Method for 
	 */
	public function getSampleClassDateTimeFutureNotRequired(): null|\DateTime {
		return $this->sampleClassDateTimeFutureNotRequired;
	}

	/**
	 * Method for
	 * @throws \Exception
	 * @throws \RangeException
	 * @throws \TypeError
	 * @throws \InvalidArgumentException
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
			 * creating objects from database results.
			 */
		}
		//set DateTime variable or null to attribute in sampleClass object
		$this->sampleClassDateTimeFutureNotRequired=$newSampleClassDateTimeFutureNotRequired;
	}

	/**
	 * Method for 
	 */
	public function getSampleClassDateTimeNowRequired():\DateTime {
		return $this->sampleClassDateTimeNowRequired;
	}

	/**
	 * Method for 
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
	 * Method for 
	 */
	public function getSampleClassDateTimePastRequired():\DateTime {
		return $this->sampleClassDateTimePastRequired;
	}

	/**
	 * Method for 
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
	 * Method for 
	 */
	public function getSampleClassEnumStringRequired():string {
		return $this->sampleClassEnumStringRequired;
	}

	/**
	 * Method for 
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
			throw (new \RangeException("Sample Class Exception: sampleClassBitsRequired is a required field."));
		}
		/*
		 * Check if string has too many characters to be stored in the database
		 */
		elseif(strlen($newSampleClassEnumStringRequired)>200){
			throw (new \RangeException("Sample Class Exception: sampleClassBitsRequired has too many characters after sanitization."));
		}

		$this->sampleClassEnumStringRequired=$newSampleClassEnumStringRequired;
	}

	/**
	 * Method for 
	 */
	public function getSampleClassExactDecimalRequired():float {
		return $this->sampleClassExactDecimalRequired;
	}

	/**
	 * Method for 
	 */
	public function setSampleClassExactDecimalRequired(float $newSampleClassExactDecimalRequired):void {
		$this->sampleClassExactDecimalRequired=$newSampleClassExactDecimalRequired;
	}

	/**
	 * Method for 
	 */
	public function getSampleClassIntegerNotRequired() : int|null {
		return $this->sampleClassIntegerNotRequired;
	}

	/**
	 * Method for 
	 */
	public function setSampleClassIntegerNotRequired(int|null $newSampleClassIntegerNotRequired):void {
		$this->sampleClassIntegerNotRequired=$newSampleClassIntegerNotRequired;
	}

	/**
	 * Method for 
	 */
	public function getSampleClassJsonPackageNotRequired(): string|null {
		return $this->sampleClassJsonPackageNotRequired;
	}

	/**
	 * Method for 
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
	 * Method for 
	 */
	public function getSampleClassRoundedDecimalNotRequired():float|null {
		return $this->sampleClassRoundedDecimalNotRequired;
	}

	/**
	 * Method for 
	 */
	public function setSampleClassRoundedDecimalNotRequired(float|null $newSampleClassRoundedDecimalNotRequired):void {
		$this->sampleClassRoundedDecimalNotRequired=$newSampleClassRoundedDecimalNotRequired;
	}

	/**
	 * Method for 
	 */
	public function getSampleClassSetLengthStringRequired():string {
		return $this->sampleClassSetLengthStringRequired;
	}

	/**
	 * Method for 
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
	 * Method for 
	 */
	public function getSampleClassVariableLengthStringRequired():string {
		return $this->sampleClassVariableLengthStringRequired;
	}

	/**
	 * Method for 
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
	}