<?

// -------------------------------------------------------------------------------------
// Captcha Genie PHP Configuration File.
// Copyright (c) 2010 Alexandru Marias. All rights reserved
// Web: http://www.captchagenie.com
// Phone: +40722486348
// ----------------------------------------------------------------

// You can customize the look and feel of the Captcha Image by changing the settings below.
// We recommend that you save a backup copy of the initial configuration file, because if you
// make unwanted or inappropriate changes that result in the script not working, you will be
// able to easily restore it back

// The font used, can be 1 if random chosed from a fonts directory or 0 if specified
$CFontUsed = 0; 
$CFontURL = 'fonts/font23.ttf'; 

// The number of fonts in the font directory
$FontNo = 34; 
// The script will automatically chose a font between 1 and this value

// The fonts directory
$fonts_dir = 'fonts';

/* font size range, angle range, character padding */

// Everytime a captcha is shown, a new random code will be generated
// This code is a string of letters and numbers, and it's length can be chosen random as well

// Captcha Type
$CType = 0;  // 0 is letters and numbers, 1 is math
$CMinSize = 4;  
$CMaxSize = 5;  

// For example if the Minimum Length is 4 and Maximum Length is 5, Captcha Codes will
// sometimes be of 4 characters in length and sometimes of 5 characters in length

// Image Size can be either variable, random within some parameters, or fixed
$CSize = 1; // 1 is variable, 0 is fixed
$CSizeWidth = 0; 
$CSizeHeight = 0; // 1 is variable, 0 is fixed

// The Code Characters
$CSrc = 'abcdefghijkmnpqrstuvwxyz23456789';

// Background can be either random ( generated by the script ) or specified by a file
$CBackgroundType = 0; // 1 is random, 0 is fixed
$CBackgroundColor = '#FFFFFF';
$CBackgroundFile = 'backgrounds/bluecircles.gif'; // 1 is random, 0 is fixed
$CBackgroundFillType = 1; // 1 is tiled, 0 is resized

// Color of text
$CFontColorType = 3; // 1 is random, 2 is black, 3 is white, 4 is custom
$CFontColor = '#0A268C'; // font color

// The font can vary as well
$CFontSizeMin = 25;
$CFontSizeMax = 30;

// Leters and numbers inside the Captcha can be rotated
$CFontRotMin = -15;
$CFontRotMax = 15;

// The space around the characters
$CFontPadding = 2;

// The space around the characters
$CNoise = 0;  // 0 no noise, 1 noise
$CNoiseType = 0;  // 0 Random, 1 Grid, 2 Circles, 3 Triangles, 4 Lines
$CNoiseColor = '#FFFFFF';  // 0 no noise, 1 noise

// The output type ( jpeg, png )
# $output_type='jpeg';
 $output_type='png';

// Captcha Type
 $captcha_type = 1;


 ?>
