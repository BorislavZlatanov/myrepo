<?php 
function block_auto_translation() { 
	$current_lang_code = $_SERVER['HTTP_X_GT_LANG'];
	$trimmed = trim($current_lang_code, '%');
	$current_url = "http://" . $trimmed . '.' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$translated_pages = array(
	
//Bulgarian
//"http://bg.thevenusproject.com/about/aims-and-proposals",
"http://bg.thevenusproject.com/about/resource-based-economy",
//"http://bg.thevenusproject.com/about/resume",
//"http://bg.thevenusproject.com/about/interview",
"http://bg.thevenusproject.com/about/roxanne-meadows",
"http://bg.thevenusproject.com/about/research-center",
"http://bg.thevenusproject.com/technology/cities-in-the-sea",
"http://bg.thevenusproject.com/technology/city-systems",
"http://bg.thevenusproject.com/technology/construction",
"http://bg.thevenusproject.com/technology/energy",
"http://bg.thevenusproject.com/technology/housing",
//"http://bg.thevenusproject.com/extras/faq",

//French
"http://fr.thevenusproject.com/about/the-venus-project",
"http://fr.thevenusproject.com/about/resource-based-economy",
"http://fr.thevenusproject.com/about/aims-and-proposals",
"http://fr.thevenusproject.com/about/research-center",
"http://fr.thevenusproject.com/technology/city-systems",
"http://fr.thevenusproject.com/technology/cities-in-the-sea",
"http://fr.thevenusproject.com/technology/construction",
"http://fr.thevenusproject.com/technology/energy",
"http://fr.thevenusproject.com/technology/housing",
"http://fr.thevenusproject.com/technology/transportation",
"http://fr.thevenusproject.com/technology/space",
"http://fr.thevenusproject.com/get-involved/volunteer",
"http://fr.thevenusproject.com/get-involved/supporter",
"http://fr.thevenusproject.com/get-involved/mentor",
"http://fr.thevenusproject.com/tours",
"http://fr.thevenusproject.com/donate/website-development",
"http://fr.thevenusproject.com/donate/research-center",
"http://fr.thevenusproject.com/donate/tvp-education-show-upgrade",
"http://fr.thevenusproject.com/donate/major-motion-picture",
"http://fr.thevenusproject.com/donate/the-choice-is-ours-documentary-series",
"http://fr.thevenusproject.com/donate/tvp-magazine"

	);
	$partially_translated_pages = array(
	"http://dev.linguisticteam.org/index.php/en/",
	"http://dev.linguisticteam.org/index.php/en/2-uncategorised/2-%D0%B0%D0%B7"
	);
	if(in_array($current_url, $translated_pages) || $_SERVER['HTTP_X_GT_LANG'] === 'pt') {
	// if in the list of translated pages, do not insert "no translate" tag
	echo "<span class=\"testing\"><span class=\"$current_url\">";
	}
	elseif(in_array($current_url, $partially_translated_pages)) {
	// if in the list of partially translated pages, do not insert "no translate" tag
	echo "<span class=\"testing\"><span class=\"$current_url\">";
	}
	else {
		//block auto translation for all untranslated pages
		echo "<span class=\"notranslate\"><span class=\"$current_url\">";
	} 
}
?>
