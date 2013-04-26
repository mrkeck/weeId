# weeId
*Shorten Ids by a wee bit*

Light-weight php class that converts an integer into alphanumeric and vice versa with **stand-alone php** and **no database**

### weeId.com/id/1000000 => weeId.com/id/hfQ8.

#### One-to-One conversion with NO collisions

Based on a base-52 number system consisting of **case-sensitive alphanumerics**

**Side note**: 
> Using only letters created some unintended words that may be offensive.
> Thus, all vowels are translated into numbers, but not numbers that look like the vowel.

## Usage
```PHP
	$weeId = new weeId;
	echo $weeId->numberToWord(1000000);		//hfQ8
	echo $weeId->wordToNumber('hfQ8');		//1000000
```

## Requirements

- PHP

## Credit

Inspired by YouTube IDs

## Contact

- http://github.com/mrkeck

## License

weeId is available under the MIT license. See the LICENSE file for more info.