<?php
if (!file_exists('private'))
  mkdir('private', 0755);

//Users File Creation
$users = [];
$user = [];
$user['login'] = "admin";
$user['passwd'] = hash('whirlpool', "admin");
$user['admin'] = 1;
$user['command'] = [];
array_push($users, $user);
$user = [];
$user['login'] = "user";
$user['passwd'] = hash('whirlpool', "user");
$user['admin'] = 0;
$user['command'] = [];
array_push($users, $user);
file_put_contents('private/users', serialize($users));

// Commands File Creation
$commands = [];
file_put_contents('private/commands', serialize($commands));

// Articles File Creation
$articles = [];
$article = [];
$article['name'] = "MacBook";
$article['price'] = 1199.99;
$article['img_url'] = "http://pngimg.com/uploads/macbook/macbook_PNG68.png";
$article['command'] = [];
$article['categories'] = [];
$article['categories'][0] = 0;
$article['categories'][1] = 1;
array_push($articles, $article);
$article = [];
$article['name'] = "Asus";
$article['price'] = 799.99;
$article['img_url'] = "https://ar.toppng.com/public/uploads/preview/asus-laptop-11526908054f59kqoq2ed.png";
$article['command'] = [];
$article['categories'] = [];
$article['categories'][0] = 0;
$article['categories'][1] = 1;
array_push($articles, $article);
$article = [];
$article['name'] = "Iphone";
$article['price'] = 1099.99;
$article['img_url'] = "https://boltmobile.ca/wp-content/uploads/2017/10/apple-iphone-x-bolt-mobile-sasktel-space-grey-front.png";
$article['command'] = [];
$article['categories'] = [];
$article['categories'][0] = 0;
$article['categories'][1] = 2;
array_push($articles, $article);
$article = [];
$article['name'] = "Samsung";
$article['price'] = 599.99;
$article['img_url'] = "http://www.proximus.be/dam/jcr:d25a1e12-e998-4858-95d5-b94c9ecbc3ab/cdn/sites/iportal/images/products/device/p/px-samsung-galaxy-s9-blue-g960f-plus-sim/detail/px-samsung-galaxy-s9-blue-g960f-plus-sim-XS-1~2018-03-01-15-43-28~cache.png";
$article['command'] = [];
$article['categories'] = [];
$article['categories'][0] = 0;
$article['categories'][1] = 2;
array_push($articles, $article);
$article = [];
$article['name'] = "OnePlus";
$article['price'] = 589.99;
$article['img_url'] = "http://purepng.com/public/uploads/large/purepng.com-oneplus-6notchoneplus6phone-31531430332nbxom.png";
$article['command'] = [];
$article['categories'] = [];
$article['categories'][0] = 0;
$article['categories'][1] = 2;
array_push($articles, $article);
$article = [];
$article['name'] = "Airpods";
$article['price'] = 179.99;
$article['img_url'] = "https://www.airpodsshop.com/wp-content/uploads/sites/3/2016/09/airpods-charging-case-mood3.png";
$article['command'] = [];
$article['categories'] = [];
$article['categories'][0] = 0;
$article['categories'][1] = 3;
array_push($articles, $article);
file_put_contents('private/articles', serialize($articles));

// Categories File Creation

$categories = [];
$categorie = [];
$categorie['name'] = "high-tech";
$categorie['articles'] = [];
$categorie['articles'] = 0;
$categorie['articles'] = 1;
$categorie['articles'] = 2;
$categorie['articles'] = 3;
$categorie['articles'] = 4;
$categorie['articles'] = 5;
array_push($categories, $categorie);
$categorie = [];
$categorie['name'] = "laptop";
$categorie['articles'] = [];
$categorie['articles'] = 0;
$categorie['articles'] = 1;
array_push($categories, $categorie);
$categorie = [];
$categorie['name'] = "phone";
$categorie['articles'] = [];
$categorie['articles'] = 2;
$categorie['articles'] = 3;
$categorie['articles'] = 4;
array_push($categories, $categorie);
$categorie = [];
$categorie['name'] = "headphone";
$categorie['articles'] = [];
$categorie['articles'] = 5;
array_push($categories, $categorie);
file_put_contents('private/categories', serialize($categories));
?>
