<?php

namespace GPlane\SkinUtilities;

use App\Models\Texture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkinnrController extends Controller
{
    public function tid($tid)
    {
        //drawSkin("Div ID", "Div Class", "Container Class", "Pixels Wide(x)", "Pixels High(y)", "Offset X", "Offset Y");
        function drawSkin($id, $class, $cClass, $px, $py, $ox, $oy) {
        $i = 0;
        global $im;
        $out = "\n\t\t <div id='".$id."' class='".$cClass."'>\n\t\t";
        for($y=0;$y<$py; $y++){
            $out .= "<div class='line'>";
            for($x=0;$x<$px; $x++){
                $rgb = imagecolorat($im, $ox+$x, $oy+$y);
                $cols = imagecolorsforindex($im, $rgb);
                $r = dechex($cols['red']);
                $g = dechex($cols['green']);
                $b = dechex($cols['blue']);
                if (strlen($r) == 1) {
                    $r = "0" . $r;
                }
                if (strlen($g) == 1) {
                    $g = "0" . $g;
                }
                if (strlen($b) == 1) {
                    $b = "0" . $b;
                }
                $out .= "<div class='pixel ".$class.$x."x".$y." ".$class."' style='background-color: #".$r.$g.$b."' onclick='inputClick(\"".$class.$x."x".$y."\", \"".$class."\")' onmouseover='inputOver(\"".$class.$x."x".$y."\")' ondragstart='return false;' ondrop='return false;'></div>"; 
            }
            $out .= "</div> \n\t\t";
            $i++;
        }
        $out .= "</div> \n";
        echo $out;
        }

        function drawSkinB($id, $class, $cClass, $px, $py, $ox, $oy) {
        $i = 0;
        global $im;
        $out = "\n\t\t <div id='".$id."' class='".$cClass." hidden'>\n\t\t";
        for($y=0;$y<$py; $y++){
            $out .= "<div class='line'>";
            for($x=($px-1);$x>=0; $x--){
                $rgb = imagecolorat($im, $ox+$x, $oy+$y);
                $cols = imagecolorsforindex($im, $rgb);
                $r = dechex($cols['red']);
                $g = dechex($cols['green']);
                $b = dechex($cols['blue']);
                if (strlen($r) == 1) {
                    $r = "0" . $r;
                }
                if (strlen($g) == 1) {
                    $g = "0" . $g;
                }
                if (strlen($b) == 1) {
                    $b = "0" . $b;
                }
                $out .= "<div class='pixel ".$class.$x."x".$y." ".$class."2".$x."x".$y."' style='background-color: #".$r.$g.$b."' onclick='inputClick(\"".$class.$x."x".$y."\", \"".$class."\")' onmouseover='inputOver(\"".$class.$x."x".$y."\")' ondragstart='return false;' ondrop='return false;'></div>"; 
            }
            $out .= "</div> \n\t\t";
            $i++;
        }
        $out .= "</div> \n";
        echo $out;
        }

        global $im;
        if ($tid === 'steve')
            $im = imagecreatefrompng(plugin_assets('skin-utilities', 'assets/common/images/steve.png'));
        else {
            $tid = (Int) $tid;
            $texture = Texture::find($tid);
            if (!$texture)
                return;
            $im = imagecreatefrompng(storage_path('textures/'.$texture->hash));
        }
        echo '&nbsp;&nbsp;&nbsp;&nbsp;<div class="front in">';
        drawSkin("headf", "headf", "in", 8, 8, 8, 8);
        echo '<br />';
        drawSkin("larmf", "armf", "in", 4, 12, 44, 20);
        drawSkin("bodyf", "bodyf", "in", 8, 12, 20, 20);
        drawSkin("rarmf", "armf", "in flip", 4, 12, 44, 20);
        echo '<br />';
        drawSkin("llegf", "legf", "in", 4, 12, 4, 20);
        drawSkin("rlegf", "legf", "in flip", 4, 12, 4, 20);
        echo '<br /><br />';
        echo '</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '<div class="back in">';
        drawSkin("headbk", "headbk", "in", 8, 8, 24, 8);
        echo '<br />';
        drawSkin("larmbk", "armbk", "in", 4, 12, 52, 20);
        drawSkin("bodybk", "bodybk", "in", 8, 12, 32, 20);
        drawSkin("rarmbk", "armbk", "in flip", 4, 12, 52, 20);
        echo '<br />';
        drawSkin("llegbk", "legbk", "in", 4, 12, 12, 20);
        drawSkin("rlegbk", "legbk", "in flip", 4, 12, 12, 20);
        echo '<br /><br />';
        echo '</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '<div class="sides in">';
        drawSkin("headsl", "headsl", "in", 8, 8, 0, 8);
        drawSkinB("headsl", "headsl", "in", 8, 8, 0, 8);
        echo '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        drawSkin("bodys", "bodys", "in", 4, 12, 16, 20);
        drawSkin("arms", "arms", "in", 4, 12, 48, 20);
        echo '<br />';
        drawSkin("legs", "legs", "in", 4, 12, 0, 20);
        echo '<br /><br />';
        echo '</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '<div id="tops" class="tops in">';
        drawSkin("headt", "headt", "in", 8, 8, 8, 0);
        echo '<br />';
        drawSkin("armt", "armt", "in", 4, 4, 44, 16);
        drawSkin("bodyt", "bodyt", "in", 8, 4, 20, 16);
        drawSkin("armt", "armt", "in flip", 4, 4, 44, 16);
        echo '<br />';
        drawSkin("legt", "legt", "in", 4, 4, 4, 16);
        drawSkin("legt", "legt", "in flip", 4, 4, 4, 16);
        echo '<br /><br />';
        drawSkin("headb", "headb", "in", 8, 8, 16, 0);
        echo '<br />';
        drawSkin("armb", "armb", "in", 4, 4, 48, 16);
        drawSkin("bodyb", "bodyb", "in", 8, 4, 28, 16);
        drawSkin("armb", "armb", "in flip", 4, 4, 48, 16);
        echo '<br />';
        drawSkin("legb", "legb", "in", 4, 4, 8, 16);
        drawSkin("legb", "legb", "in flip", 4, 4, 8, 16);
        echo '</div>&nbsp;&nbsp;&nbsp;&nbsp;';
        echo '<br /><br />';        
    }

    public function out(Request $request)
    {
        // Draw Section/Face function
	    function draw($skin, $part, $w, $h, $ox, $oy) {
		    $i = 0; // Set incrementer
		    for($y=0;$y<$h; $y++){ 		// Loop function Y (down - column)
			    for($x=0;$x<$w; $x++){ 	// Loop function X (left - row)
				    $r = $part[$i]; 	// Get RED value
				    $g = $part[($i+1)]; // Get GREEN value
				    $b = $part[($i+2)]; // Get BLUE value
				    $col = imagecolorallocate($skin, $r, $g, $b); 	// Set colour variable
				    imagesetpixel($skin, $x+$ox, $y+$oy, $col);		// Draw pixel in location (using offsets), to correct colour
				    $i+=3; 	// Move to next colour (0 = r, 1 = g, 2 = b | So jump in 3's)
			    }
		    }
	    }

        // Create image variable, to 64px by 32px (exact skin size)
	    $skin = imagecreatetruecolor(64, 32);
        imagealphablending($skin, false);
        imagesavealpha($skin, true);
	
        // Grab colours for each section and face, split by comma.
        $headf = $request->headf;
        $headf = explode(",", $headf);
        $headbk = $request->headbk;
        $headbk = explode(",", $headbk);
        $headsl = $request->headsl;
        $headsl = explode(",", $headsl);
        $headsr = $request->headsr;
        $headsr = explode(",", $headsr);
        $headt = $request->headt;
        $headt = explode(",", $headt);
        $headb = $request->headb;
        $headb = explode(",", $headb);

        $bodyf = $request->bodyf;
        $bodyf = explode(",", $bodyf);
        $bodybk = $request->bodybk;
        $bodybk = explode(",", $bodybk);
        $bodys = $request->bodys;
        $bodys = explode(",", $bodys);
        $bodyt = $request->bodyt;
        $bodyt = explode(",", $bodyt);
        $bodyb = $request->bodyb;
        $bodyb = explode(",", $bodyb);
           
        $armf = $request->armf;
        $armf = explode(",", $armf);
        $armbk = $request->armbk;
        $armbk = explode(",", $armbk);
        $arms = $request->arms;
        $arms = explode(",", $arms);
        $armt = $request->armt;
        $armt = explode(",", $armt);
        $armb = $request->armb;
        $armb = explode(",", $armb);
           
        $legf = $request->legf;
        $legf = explode(",", $legf);
        $legbk = $request->legbk;
        $legbk = explode(",", $legbk);
        $legs = $request->legs;
        $legs = explode(",", $legs);
        $legt = $request->legt;
        $legt = explode(",", $legt);
        $legb = $request->legb;
        $legb = explode(",", $legb);

        // Draw each section to the correct size and location
        // Structure: draw(img, face, width, height, offsetX, offsetY);
        draw($skin, $headf, 8, 8, 8, 8);
        draw($skin, $headbk, 8, 8, 24, 8);
        draw($skin, $headsl, 8, 8, 0, 8);
        draw($skin, $headsr, 8, 8, 16, 8);
        draw($skin, $headt, 8, 8, 8, 0);
        draw($skin, $headb, 8, 8, 16, 0);
           
        draw($skin, $bodyf, 8, 12, 20, 20);
        draw($skin, $bodybk, 8, 12, 32, 20);
        draw($skin, $bodys, 4, 12, 16, 20);
        draw($skin, $bodys, 4, 12, 28, 20);
        draw($skin, $bodyt, 8, 4, 20, 16);
        draw($skin, $bodyb, 8, 4, 28, 16);
           
        draw($skin, $armf, 4, 12, 44, 20);
        draw($skin, $armbk, 4, 12, 52, 20);
        draw($skin, $arms, 4, 12, 40, 20);
        draw($skin, $arms, 4, 12, 48, 20);
        draw($skin, $armt, 4, 4, 44, 16);
        draw($skin, $armb, 4, 4, 48, 16);
           
        draw($skin, $legf, 4, 12, 4, 20);
        draw($skin, $legbk, 4, 12, 12, 20);
        draw($skin, $legs, 4, 12, 0, 20);
        draw($skin, $legs, 4, 12, 8, 20);
        draw($skin, $legt, 4, 4, 4, 16);
        draw($skin, $legb, 4, 4, 8, 16);

        // Export image
        ob_start();
        imagepng($skin);
        $image = ob_get_contents();
        ob_end_clean();
           
        // Return string in data response
        echo base64_encode($image);
    }
}
