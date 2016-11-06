<?php

class WordCounter {

	const ASC = 1;
	const DESC = 2;
	private $words;
	private $file_content;

	public function __construct($filename) {
		$file_content = file_get_contents($filename);
		$this->file_content = $file_content;
		$this->words = array_count_values(str_word_count(strtolower($file_content), 1));
	}

	public function getContent() {
		return $this->file_content;
	}

	public function words($order) {

		if($order == self::ASC) {
			asort($this->words);
		} elseif ($order == self::DESC) {
			arsort($this->words);
		}

		foreach ($this->words as $key => $value) {
			echo $key . ' = ' . $value . '<br/>';
		}
	}
}



$file = new WordCounter('job.txt');
echo $file->getContent();
echo '<br/>';
$file->words(WordCounter::DESC);


