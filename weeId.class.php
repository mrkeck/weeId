<?php 
	class weeId{
		private $vowels = "a0e1i2o3u4A5E6I7O8U9";	//Vowel to number conversion (Avoid Bad Words)
		private function letterToDigit ($letter){	//Ascii to Number
			//Get ascii of letter
			$num = ord($letter);
			//Ascii >=97 is lowercase >=65 is uppercase
			
			//If not alpha convert to Vowel
			$num = ($num >= 48 && $num <= 57) ? $this->numberToVowel($letter) : $num;
			
			//a-z 0-25	//A-Z 26-51
			$digit = ($num % 97) > 25 ? ($num % 65) + 26 : ($num % 97);
					
			return $digit;
		}
		
		private function numberToVowel ($letter){	//Convert Number to Vowel (Avoid Bad Words)
			//Find number in vowels string
			$pos = strpos($this->vowels,$letter);
			//If found translate to vowel if not pass it thru (Should never hit the pass thru)
			return $pos === false ? ord($letter) : ord($this->vowels[$pos-1]);
		}
		
		private function digitToLetter ($digit){	//Number to Ascii
			//Ascii >=97 is lowercase >=65 is uppercase
			//0-25 a-z	//26-51 A-Z
			$letter = $digit < 26 ? chr(97 + $digit) : chr(65 + $digit - 26);
			//If Vowel convert to a Number
			return $this->vowelToNumber($letter);
		}
		
		private function vowelToNumber ($letter){	//Convert Vowel to Number (Avoid Bad Words)
			//Find vowel in vowels string
			$pos = strpos($this->vowels,$letter);
			//If found translate to number if not pass it thru
			return $pos === false ? $letter : $this->vowels[$pos+1];
		}
		
		public function wordToNumber ($word){
			if(preg_match("/^[a-zA-Z0-9]+$/",$word)===1){
				//Loop thru each letter, convert, and squeeze out the number
				for ($i = 0, $len = strlen($word), $num = 0, $total = 0; $i < $len; $i++){
					//Have to work from Right to Left
					$num = $this->letterToDigit ($word[($len-1)-$i]);
					//Carry the 1 kind of thing
					$total += $num * pow ( 52, $i );
				}
				return $total;
			}else{
				return false;
			}
		}
		
		public function numberToWord ($num){
			if(preg_match("/^[0-9]+$/",$num)===1){
				//If 0 then 'a' other wise blank string
				$word = $num > 0 ? '' : 'a';
				//Loop thru until nothing to work with
				while ($num >= 1){
					//Have to work from Left to Right
					$word = $this->digitToLetter ($num % 52) . $word;
					//Get down to the next level
					$num = $num / 52;
				}
				return $word;
			}else{
				return false;
			}
		}
	}
?>