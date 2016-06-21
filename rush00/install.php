#!/usr/bin/php
<?php

if (!(file_exists("database")))
{
	mkdir ("database");
	$admin[0]['login'] = 'admin';
	$admin[0]['passwd'] = 'admin';
	$admin[0]['mail'] = 'admin@admin.admin';
	$admin[0]['admin'] = '1';
	file_put_contents("database/db_user.json", json_encode($admin));

	$product['name'] = 'chemise bleue';
	$product['price'] = 99;
	$product['img'] = 'http://www.cotondoux.com/23543-medium/chemise-homme-cintree-petit-col-pique-de-coton-bleu.jpg';
	$product['size'] = 'L';
	$product['color'] = 'blue';
	$product['id'] = uniqid();
	$product2['name'] = 'chemise rouge';
	$product2['price'] = 99;
	$product2['img'] = 'http://i2.cdscdn.com/pdt2/3/3/8/1/700x700/mp00308338/rw/marcoserussi-chemise-homme-cou-rouge.jpg';
	$product2['size'] = 'L';
	$product2['color'] = 'red';
	$product2['id'] = uniqid();
	$product3['name'] = 'chemise verte';
	$product3['price'] = 99;
	$product3['img'] = 'http://i11.twenga.com/mode/chemise-homme-cintree/chemise-coupe-cintree-slim-tp_8021604180089929522f.jpg';
	$product3['size'] = 'L';
	$product3['color'] = 'green';
	$product3['id'] = uniqid();
	$product4['name'] = 'chemise verte';
	$product4['price'] = 99;
	$product4['img'] = 'http://i11.twenga.com/mode/chemise-homme-cintree/chemise-coupe-cintree-slim-tp_8021604180089929522f.jpg';
	$product4['size'] = 'L';
	$product4['color'] = 'green';
	$product4['id'] = uniqid();
	$product5['name'] = 'chemise verte';
	$product5['price'] = 99;
	$product5['img'] = 'http://www.produit-pacifique.com/152-thickbox_default/chemise-hawaienne-vintage.jpg';
	$product5['size'] = 'L';
	$product5['color'] = 'other';
	$product5['id'] = uniqid();
	$prod[] = $product;
	$prod[] = $product2;
	$prod[] = $product3;
	$prod[] = $product4;
	$prod[] = $product5;
	file_put_contents("database/db_prod.json", json_encode($prod));

}
?>
