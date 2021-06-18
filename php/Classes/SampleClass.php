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
			//construct Charge
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

UuidInterface | string $sampleClassId
 
string $sampleClassBitsRequired
 
null|string $sampleClassBlobNotRequired
 
null|string|\DateTime $sampleClassDateTimeFutureNotRequired
 
string|\DateTime $sampleClassDateTimeNowRequired
 
string|\DateTime $sampleClassDateTimePastRequired
 
string $sampleClassEnumStringRequired
 
float $sampleClassExactDecimalRequired
 
int|null $sampleClassIntegerNotRequired
 
string|null $sampleClassJsonPackageNotRequired
 
float|null $sampleClassRoundedDecimalNotRequired
 
string $sampleClassSetLengthStringRequired
 
string $sampleClassVariableLengthStringRequired
 
	
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
	public function getSampleClassId(UuidInterface) {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassId(UuidInterface | string $sampleClassId) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassBitsRequired():string {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassBitsRequired(string $sampleClassBitsRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassBlobNotRequired():null|string {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassBlobNotRequired(null|string $sampleClassBlobNotRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassDateTimeFutureNotRequired(): null|\DateTime {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassDateTimeFutureNotRequired(null|string|\DateTime $sampleClassDateTimeFutureNotRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassDateTimeNowRequired():\DateTime {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassDateTimeNowRequired(string|\DateTime $sampleClassDateTimeNowRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassDateTimePastRequired():\DateTime {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassDateTimePastRequired(string|\DateTime $sampleClassDateTimePastRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassEnumStringRequired():string {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassEnumStringRequired(string $sampleClassEnumStringRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassExactDecimalRequired():float {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassExactDecimalRequired(float $sampleClassExactDecimalRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassIntegerNotRequired() : int|null {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassIntegerNotRequired(int|null $sampleClassIntegerNotRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassJsonPackageNotRequired(): string|null {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassJsonPackageNotRequired(string|null $sampleClassJsonPackageNotRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassRoundedDecimalNotRequired():float|null {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassRoundedDecimalNotRequired(float|null $sampleClassRoundedDecimalNotRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassSetLengthStringRequired():string {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassSetLengthStringRequired(string $sampleClassSetLengthStringRequired) {
		
	}

	/**
	 * Method for 
	 */
	public function getSampleClassVariableLengthStringRequired():string {
		
	}

	/**
	 * Method for 
	 */
	public function setSampleClassVariableLengthStringRequired(string $sampleClassVariableLengthStringRequired) {
		
	}
	}