<?php
namespace CureDAO\Client\Traits;
use CureDAO\Client\Types\QMStr;
use CureDAO\Client\UI\FontAwesome;
use CureDAO\Client\UI\ImageUrls;
trait ConstantSearch {
	use HasConstants;
	protected static $lowercase;
	protected static $searchResults;
	protected static $nameSearchResults;
	protected static $contains;
	protected static $containsEntireWord;
	/**
	 * @return string[]
	 */
	private static function getLowerCaseConstants(): array{
		if(!self::$lowercase){
			$constants = self::getConstants();
			foreach($constants as $constantName => $iconName){
				self::$lowercase[strtolower($constantName)] = $iconName;
			}
		}
		return self::$lowercase;
	}
	public static function findConstantValueWithNameLike(string $search, string $default = null): ?string{
		if(isset(self::$searchResults[$search])){
			if(self::$searchResults[$search] === false){
				return $default;
			}
			return self::$searchResults[$search];
		}
		$constants = static::getLowerCaseConstants();
		$arr = explode(" ", $search);
		usort($arr, function($a, $b){ return strlen($a) < strlen($b); });
		$lowerCaseNeedles = [];
		foreach($arr as $key => $upperCaseWord){
			if(!empty($upperCaseWord)){
				$lowerCaseNeedles[$key] = strtolower($upperCaseWord);
			}
		}
		foreach($lowerCaseNeedles as $word){
			foreach($constants as $constantName => $url){
				if(!isset(self::$contains[$constantName][$word])){
					self::$contains[$constantName][$word] = strpos($constantName, $word) !== false;
				}
				if(self::$contains[$constantName][$word]){
					return self::$searchResults[$search] = $url;
				}
			}
		}
		if(!$default){
			self::$searchResults[$search] = false;
			return $default;
		}
		return self::$searchResults[$search] = $default;
	}
	public static function findConstantNameWithValue($needleValue): ?string{
		$constants = self::getConstants();
		foreach($constants as $name => $value){
			if($value === $needleValue){
				return $name;
			}
		}
		return null;
	}
	public static function findConstantNameLike(string $search, string $default = null): string{
		if(isset(self::$nameSearchResults[$search])){
			if(self::$nameSearchResults[$search] === false){
				return $default;
			}
			return self::$nameSearchResults[$search];
		}
		$screamingSearch = QMStr::toScreamingSnakeCase($search);
		$constants = self::getConstants();
		foreach($constants as $constantName => $iconName){
			if($constantName === $screamingSearch){
				return self::$nameSearchResults[$search] = $constantName;
			}
		}
		$constants = static::getLowerCaseConstants();
		[$search, $lowerCaseNeedles] = self::explodeAndSingularize($search);
		foreach($lowerCaseNeedles as $word){
			foreach($constants as $constantName => $value){
				$wordsInConstName = explode('_', $constantName);
				if(!isset(self::$containsEntireWord[$constantName][$word])){
					self::$containsEntireWord[$constantName][$word] = in_array($word, $wordsInConstName);
				}
				if(self::$containsEntireWord[$constantName][$word]){
					return self::$nameSearchResults[$search] = strtoupper($constantName);
				}
			}
		}
		foreach($lowerCaseNeedles as $word){
			foreach($constants as $constantName => $value){
				if(!isset(self::$contains[$constantName][$word])){
					self::$contains[$constantName][$word] = strpos($constantName, $word) !== false;
				}
				if(self::$contains[$constantName][$word]){
					return self::$nameSearchResults[$search] = strtoupper($constantName);
				}
			}
		}
		if(!$default){
			self::$nameSearchResults[$search] = false;
			return $default;
		}
		return self::$nameSearchResults[$search] = $default;
	}



}
