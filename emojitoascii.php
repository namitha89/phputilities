<?php 

// string to ascii conversion
//how to convert bunch of emojis to ascii

function emojiencoder($string) {
	$len = strlen($string);
	$char = array();
	for($i=0; $i<$len; $i++) {
		$char[] = ord(substr($string, $i, 1));
	}

	$result = json_encode($char);
    return $result;
}
$string ="😀 😃 😄 😁 😆 😅 😂";
$out = emojiencoder($string);;
echo $out;



//ascii to string conversion
//how to convert asciitoemoji

function emojidecoder($str) {
	$charCode = json_decode($str);
        $result = '';
        foreach ($charCode as $code) {
            $result .= chr($code);
        };
        return $result;

}

echo emojidecoder($out);
?>