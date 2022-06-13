<?php
namespace CureDAO\Client\Properties;
use CureDAO\Client\Types\Enum;
use CureDAO\Client\Types\QMStr;
abstract class EnumProperty extends BaseProperty{
	public function getFilterOptions(): array{
		$opts = $this->getEnumOptions();
		$arr = [];
		foreach($opts as $opt){
			$arr[QMStr::titleCaseSlow($opt)] = $opt;
		}
		if($this->canBeChangedToNull){
			$arr["Null"] = Enum::NULL;
		}
		return $arr;
	}
	/**
	 * Apply the filter to the given query.
	 * @param Builder $query
	 * @param mixed $type
	 * @return Builder
	 */
	public function applyFilter($query, $type): Builder{
		/** @var BaseProperty $this */
		$this->applyWhere($query, "=", $type);
		return $query;
	}
	/**
	 * @param null $resolveCallback
	 * @param string|null $name
	 * @return Field|DateTime|Text
	 */
	public function getIndexField($resolveCallback = null, string $name = null): Field{
		return $this->getSelectField($name);
	}
	/**
	 * @param null $resolveCallback
	 * @param string|null $name
	 * @return Field
	 */
	public function getUpdateField($resolveCallback = null, string $name = null): Field{
		return $this->getSelectField($name);
	}
	/**
	 * @param null $resolveCallback
	 * @param string|null $name
	 * @return Field
	 */
	public function getCreateField($resolveCallback = null, string $name = null): Field{
		return $this->getSelectField($name);
	}
	/**
	 * @param null $resolveCallback
	 * @param string|null $name
	 * @return Field
	 */
	public function getDetailsField($resolveCallback = null, string $name = null): Field{
		return $this->getSelectField($name);
	}
	/**
	 * @param null $name
	 * @return Select
	 */
	protected function getSelectField($name = null): Select{
		return Select::make($name ?? $this->getTitleAttribute())->options(function(){
			return $this->getSelectorOptions();
		})->displayUsingLabels();
	}
	/**
	 * @return mixed|string
	 */
	public function getExample(){
		return $this->getEnumOptions()[0];
	}
	protected function getSelectorOptions(): array{
		$arr = [];
		foreach($this->getEnumOptions() as $opt){
			$arr[$opt] = QMStr::titleCaseFast($opt);
		}
		return $arr;
	}
	abstract protected function isLowerCase(): bool;
	abstract public function getEnumOptions(): array;
	/**
	 * @throws InvalidAttributeException
	 */
	public function validate(): void {
		$this->validateEnum();
	}
	/**
	 * @throws \CureDAO\Client\Exceptions\InvalidAttributeException
	 */
	public function validateEnum(): void{
		$val = $this->getDBValue();
		if(!$val){
			if($this->isRequired()){
				$this->throwException("required");
			}
			return;
		}
		$allowed = $this->getEnumOptions();
		if(!in_array($val, $allowed)){
			$this->throwException("Value:
$val
is not one of the allowed values:\n\t- " . implode(",\n\t- ", $allowed));
		}
	}
}
