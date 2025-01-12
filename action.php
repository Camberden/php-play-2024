<?php

// NOTES:
// Testing Server >>>>> php -S localhost:8000
// Close Server >>>>> "Control C"
// Open Command Line >>>>> "Command J"
// Clear Command Line >>>>> "Command K"
// Check Version >>>>> php --version
// Composer is PHP's NPM
// Import Dependencies >>>>> require, use.
// Make folder, load into VS Code, create repo in-app, git add . , git commit -m "", 
// THEN, configure push: git remote add origin https://github.com/Camberden/namenamename.git
// FINALLY, git push --set-upstream origin master, DONE
//

// This Slugify dependency basically just turns stuff into Slug (kebab) case!
require __DIR__ . "/vendor/autoload.php";
use Cocur\Slugify\Slugify;

$slugify = new Slugify();

echo $slugify->slugify("The sky is green and the grass is blue!");

function isLegit(bool $b) {
	if ($b == true) {
		echo "true";
	} else {
		echo "false";
	}
}



isLegit(true);