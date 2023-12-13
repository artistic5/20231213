<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '10, 5, 6, 11, 2, 1, 4, 7, 9, 8, 3',
		'Pla Odds'  =>  '5, 10, 6, 11, 2, 7, 9, 1, 4, 8, 3',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '6',
		/** Black selection */
		'history w' => '6, 2',
		'SURE PLACE' => '6',
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '6, 1, 10, 2, 9, 7, 11, 3, 8, 5, 4, 12',
		'Pla Odds'  =>  '6, 10, 1, 2, 9, 7, 11, 3, 8, 5, 4, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '6',
		/** Black selection */
		'history w' => '6',
		'SURE PLACE' => '6',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '6',
		'history p' => '6, 11',
		'SURE PLACE' => '6',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '1, 2, 9, 12, 11, 6, 7, 3, 4, 8, 10, 5',
		'Pla Odds'  =>  '9, 2, 11, 12, 1, 6, 7, 3, 4, 10, 8, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '6',
		/** Black selection */
		'history w' => '6',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '11',
		'pla odds candidate(k = 7)' => '6',
		'history p' => '11, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '6, 8, 5, 1, 3, 2, 12, 9, 11, 4, 7, 10',
		'Pla Odds'  =>  '5, 1, 6, 8, 3, 9, 2, 11, 12, 7, 4, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '6, 9, 5, 4, 1, 10, 3, 7, 8',
		'Pla Odds'  =>  '6, 9, 5, 4, 1, 10, 3, 7, 8',
		'Total Runners '  =>  9,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '4, 7, 1, 10, 6, 3, 12, 5, 11, 9, 2, 8',
		'Pla Odds'  =>  '4, 7, 10, 1, 6, 3, 5, 12, 11, 9, 2, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '8, 2, 9, 4, 7, 3, 11, 1, 6, 10, 12, 5',
		'Pla Odds'  =>  '8, 2, 7, 9, 3, 4, 11, 10, 1, 6, 12, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '9',
		/** Black selection */
		'history w' => '4',
		/** Based on pla odds */
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '7, 5, 8, 12, 3, 9, 4, 1, 2, 6, 11, 10',
		'Pla Odds'  =>  '7, 8, 12, 3, 5, 1, 4, 9, 11, 2, 6, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '5',
		/** Based on pla odds */
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 7, 11, 10, 1, 4, 3, 8, 5, 9, 2, 12',
		'Pla Odds'  =>  '6, 7, 10, 11, 1, 4, 3, 9, 8, 5, 2, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '6',
		'win odds candidate(k = 8)' => '1',
		/** Black selection */
		'history w' => '6',
		'SURE PLACE' => '6',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '6',
		'history p' => '6, 10, 2',
		'SURE PLACE' => '6',
	],
];
