<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '10, 5, 6, 11, 2, 4, 7, 9, 1, 8, 3',
		'Pla Odds'  =>  '10, 5, 9, 6, 11, 2, 1, 7, 4, 8, 3',
		'Total Runners '  =>  11,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '2',
		/** Black selection */
		'history w' => '2',
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '6, 1, 10, 9, 2, 11, 5, 7, 3, 8, 4, 12',
		'Pla Odds'  =>  '6, 1, 10, 2, 11, 9, 7, 5, 8, 3, 12, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '6',
		/** Black selection */
		'history w' => '6',
		'SURE PLACE' => '6',
		/** Based on pla odds */
		'pla odds candidate(k = 7)' => '9',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '2, 9, 12, 11, 1, 6, 7, 4, 8, 3, 10, 5',
		'Pla Odds'  =>  '2, 11, 9, 1, 6, 12, 4, 7, 8, 3, 10, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '6',
		/** Black selection */
		'history w' => '6',
		/** Based on pla odds */
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '6, 8, 5, 3, 1, 2, 12, 4, 11, 9, 7, 10',
		'Pla Odds'  =>  '5, 8, 6, 1, 9, 3, 2, 11, 12, 7, 4, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '6, 9, 5, 4, 7, 1, 10, 3, 8',
		'Pla Odds'  =>  '6, 9, 7, 1, 4, 5, 10, 3, 8',
		'Total Runners '  =>  9,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '4, 7, 10, 1, 6, 3, 12, 11, 9, 2, 5, 8',
		'Pla Odds'  =>  '4, 7, 6, 10, 12, 9, 3, 11, 1, 5, 2, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '1',
		/** Based on pla odds */
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '2, 8, 9, 4, 7, 11, 3, 1, 6, 12, 10, 5',
		'Pla Odds'  =>  '8, 4, 2, 9, 11, 7, 3, 1, 6, 12, 10, 5',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '5, 7, 9, 8, 12, 4, 1, 3, 6, 2, 11, 10',
		'Pla Odds'  =>  '5, 12, 8, 7, 9, 6, 1, 4, 2, 11, 3, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '7',
		/** Based on pla odds */
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 11, 1, 7, 10, 2, 3, 12, 4, 5, 8, 9',
		'Pla Odds'  =>  '10, 6, 11, 3, 9, 2, 7, 1, 4, 5, 8, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '10',
		'pla odds candidate(k = 7)' => '2',
		'history p' => '10, 2',
	],
];
