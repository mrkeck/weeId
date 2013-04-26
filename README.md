# weeId

#### Shorter IDs = Shorter URLs

Light-weight PHP class that converts an integer into alphanumeric and vice versa

**One-to-one** conversion with **no collisions,**  **no database,** and **no dependencies**

### weeId.com/id/1000000 => weeId.com/id/hfQ8

Based on a base-52 number system consisting of **case-sensitive alphanumerics**

**Side note**: 
> Using only letters created some unintended words that may be offensive.
> Thus, all vowels are translated into numbers, but not numbers that look like the vowel.

## Usage
```PHP
	include ('weeId.class.php');
	$weeId = new weeId;
	echo $weeId->numberToWord(1000000);		//hfQ8
	echo $weeId->wordToNumber('hfQ8');		//1000000
```

## Requirements

- PHP

##Limitations

- 32-bit: 2,147,483,647
- 64-bit: 9,000,000,000,000,000,000~

## Credit

Inspired by YouTube IDs

[http://www.youtube.com/watch?v=Vw4V_G3rwFQ] (http://www.youtube.com/watch?v=Vw4V_G3rwFQ)

## Contact

- http://github.com/mrkeck

## License

weeId is available under the MIT license. See the LICENSE file for more info.