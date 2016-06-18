#!/usr/bin/php
<?php

if (!(file_exists("database")))
{
	mkdir ("database");
	$admin['login'] = 'admin';
	$admin['passwd'] = 'admin';
	$admin['mail'] = 'admin@admin.admin';
	$admin['admin'] = '1';
	file_put_contents("database/db_user.json", json_encode($admin));

	$product['name'] = 'chemise bleue';
	$product['price'] = 99;
	$product['img'] = 'http://www.cotondoux.com/23543-medium/chemise-homme-cintree-petit-col-pique-de-coton-bleu.jpg';
	$product['size'] = 'L';
	$product['cat'] = 'chemise';
	$product2['name'] = 'chemise rouge';
	$product2['price'] = 99;
	$product2['img'] = 'http://i2.cdscdn.com/pdt2/3/3/8/1/700x700/mp00308338/rw/marcoserussi-chemise-homme-cou-rouge.jpg';
	$product2['size'] = 'L';
	$product2['cat'] = 'chemise';
	$product3['name'] = 'chemise verte';
	$product3['price'] = 99;
	$product3['img'] = 'http://i11.twenga.com/mode/chemise-homme-cintree/chemise-coupe-cintree-slim-tp_8021604180089929522f.jpg';
	$product3['size'] = 'L';
	$product3['cat'] = 'chemise';
	$prod[] = $product;
	$prod[] = $product2;
	$prod[] = $product3;
	file_put_contents("database/db_prod.json", json_encode($prod));

}


?>
