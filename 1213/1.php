<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '10, 5, 11, 6, 9, 2, 7, 1, 4, 8, 3',
		'Pla Odds'  =>  '10, 5, 11, 6, 7, 9, 1, 2, 4, 8, 3',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '9',
		/** Black selection */
		'history w' => '6, 2',
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '6, 10, 9, 2, 1, 7, 5, 11, 8, 3, 4, 12',
		'Pla Odds'  =>  '6, 9, 10, 7, 1, 2, 5, 8, 11, 3, 4, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '6',
		/** Black selection */
		'history w' => '6',
		'SURE PLACE' => '6',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '6',
		'pla odds candidate(k = 8)' => '1',
		'history p' => '6, 11',
		'SURE PLACE' => '6',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '9, 12, 7, 2, 11, 1, 6, 3, 4, 8, 10, 5',
		'Pla Odds'  =>  '9, 12, 2, 11, 1, 6, 7, 3, 4, 8, 5, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '11, 6',
		/** Based on pla odds */
		'pla odds candidate(k = 7)' => '6',
		'history p' => '11, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '8, 6, 5, 1, 12, 3, 2, 7, 9, 11, 4, 10',
		'Pla Odds'  =>  '6, 8, 5, 1, 12, 3, 2, 7, 9, 11, 4, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '1',
		/** Based on pla odds */
		'pla odds candidate(k = 9)' => '1',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '6, 9, 5, 10, 4, 1, 3, 8, 7',
		'Pla Odds'  =>  '6, 9, 5, 10, 4, 1, 3, 8, 7',
		'Total Runners '  =>  9,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '9',
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '9',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '4, 1, 10, 6, 7, 11, 3, 5, 9, 12, 2, 8',
		'Pla Odds'  =>  '4, 1, 7, 10, 6, 11, 3, 9, 5, 12, 2, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '6',
		/** Black selection */
		'history w' => '6',
		/** Based on pla odds */
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '8, 2, 9, 11, 4, 7, 3, 6, 10, 1, 12, 5',
		'Pla Odds'  =>  '8, 2, 9, 11, 7, 4, 3, 6, 10, 1, 12, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '4',
		/** Based on pla odds */
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '7, 5, 4, 8, 9, 12, 3, 1, 2, 6, 10, 11',
		'Pla Odds'  =>  '7, 5, 4, 8, 9, 3, 12, 1, 2, 10, 6, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '4',
		'history p' => '4',
		'SURE PLACE' => '4',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 11, 7, 1, 3, 10, 4, 8, 5, 9, 2, 12',
		'Pla Odds'  =>  '6, 7, 11, 3, 10, 4, 1, 8, 5, 9, 2, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '6',
		'win odds candidate(k = 8)' => '3',
		/** Black selection */
		'history w' => '6, 10',
		'SURE PLACE' => '6',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '6',
		'pla odds candidate(k = 8)' => '10',
		'history p' => '6, 10, 4, 2',
		'SURE PLACE' => '6',
	],
];
