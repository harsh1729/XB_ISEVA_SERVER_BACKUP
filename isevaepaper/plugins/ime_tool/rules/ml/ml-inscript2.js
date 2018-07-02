( function ( $ ) {
	'use strict';

	var mlInScript2 = {
		id: 'ml-inscript2',
		name: 'ഇൻസ്ക്രിപ്റ്റ് 2',
		description: 'Enhanced InScript for Malayalam InScript',
		date: '2013-01-16',
		URL: 'http://github.com/wikimedia/jquery.ime',
		author: 'Parag Nemade',
		license: 'GPLv3',
		version: '1.0',
		contextLength: 0,
		maxKeyLength: 2,
		patterns: [
			['1', '൧'],
			['2', '൨'],
			['3', '൩'],
			['\\#', '്ര'],
			['4', '൪'],
			['5', '൫'],
			['6', '൬'],
			['7', '൭'],
			['\\&', 'ക്ഷ'],
			['8', '൮'],
			['\\*', 'ൾ'],
			['\\(', '('],
			['9', '൯'],
			['\\)', ')'],
			['0', '൦'],
			['\\_', 'ഃ'],
			['\\-', '-'],
			['\\+', 'ഋ'],
			['\\=', 'ൃ'],
			['Q', 'ഔ'],
			['q', 'ൗ'],
			['W', 'ഐ'],
			['w', 'ൈ'],
			['E', 'ആ'],
			['e', 'ാ'],
			['R', 'ഈ'],
			['r', 'ീ'],
			['T', 'ഊ'],
			['t', 'ൂ'],
			['Y', 'ഭ'],
			['y', 'ബ'],
			['U', 'ങ'],
			['u', 'ഹ'],
			['I', 'ഘ'],
			['i', 'ഗ'],
			['O', 'ധ'],
			['o', 'ദ'],
			['P', 'ഝ'],
			['p', 'ജ'],
			['\\{', 'ഢ'],
			['\\[', 'ഡ'],
			['\\}', 'ഞ'],
			['\\\\', 'ർ'],
			['A', 'ഓ'],
			['a', 'ോ'],
			['S', 'ഏ'],
			['s', 'േ'],
			['D', 'അ'],
			['d', '്'],
			['F', 'ഇ'],
			['f', 'ി'],
			['G', 'ഉ'],
			['g', 'ു'],
			['H', 'ഫ'],
			['h', 'പ'],
			['J', 'റ'],
			['j', 'ര'],
			['K', 'ഖ'],
			['k', 'ക'],
			['L', 'ഥ'],
			['l', 'ത'],
			[':', 'ഛ'],
			[';', 'ച'],
			['"', 'ഠ'],
			['\\\'', 'ട'],
			['\\~', 'ഒ'],
			['\\`', 'ൊ'],
			['Z', 'എ'],
			['z', 'െ'],
			['X', 'ൺ'],
			['x', 'ം'],
			['C', 'ണ'],
			['c', 'മ'],
			['V', 'ൻ'],
			['v', 'ന'],
			['B', 'ഴ'],
			['b', 'വ'],
			['N', 'ള'],
			['n', 'ല'],
			['M', 'ശ'],
			['m', 'സ'],
			['\\<', 'ഷ'],
			[',', ','],
			['\\>', 'ൽ'],
			['\\.', '.'],
			['/', 'യ']
		],
		patterns_x: [
			['1', '\u200d'],
			['\\!', '൰'],
			['2', '\u200c'],
			['\\@', '൱'],
			['\\#', '൲'],
			['\\$', '൳'],
			['4', '₹'],
			['\\%', '൴'],
			['\\^', '൵'],
			['\\+', 'ൠ'],
			['\\=', 'ൄ'],
			['q', 'ൌ'],
			['R', 'ൡ'],
			['r', 'ൣ'],
			['F', 'ഌ'],
			['f', 'ൢ'],
			['j', 'ർ'],
			['k', 'ൿ'],
			['c', 'ൺ'],
			['v', '൹'],
			['N', 'ൾ'],
			['n', 'ൽ'],
			['\\>', 'ഽ'],
			['\\.', '॥']
		]
	};

	$.ime.register( mlInScript2 );
}( jQuery ) );
