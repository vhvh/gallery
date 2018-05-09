<?php
/**
 * Created by PhpStorm.
 * User: gumeniuk.vlad
 * Date: 04.05.2018
 * Time: 17:58
 */

const title = 'homework';
$linkImg;
$pasteGallery;


$json_string = 'http://picsum.photos/list/'; // assign the value link that we need to decipher
$jsondata = file_get_contents($json_string); // get data from url
$linkImg = json_decode($jsondata,true);// decode content which we got from previous value and write the data into array
