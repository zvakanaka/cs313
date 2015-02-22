<?php
function getChordX($stringNum, $border, $fretSpacing) {
    if ($stringNum > 0) {
        $originX = ($border+$border+$border/2)+($stringNum-1)*($fretSpacing/2);
        return $originX;
    }
}
function getChordY($stringNum, $fretSpacing) {
    if ($stringNum > 0) {
        $originY  =  (($stringNum-1)*$fretSpacing) + $fretSpacing/2; 
        return $originY;
    }
}
function drawChord($one, $two, $three, $four, $five, $six, $outFile) {
    $strings = array($one, $two, $three, $four, $five, $six);
    $strokeColor = 'black'; 
    $backgroundColor = 'white';
    $draw = new ImagickDraw();
    $draw->setStrokeColor($strokeColor);
    $draw->setStrokeWidth(3);
    $draw->setFontSize(72);
    
    $border = 10;
    //width and height of image
    $maxX = 300;
    $maxY = 400;
    //vertical lines
    for ($i = $border+$border+$border/2; $i < $maxX; $i+=50) {
        $draw->line($i, 0, $i, $maxY);
    }
    //horizontal lines
    $fretSpacing = $maxY/4;
    for ($i = $fretSpacing; $i <= $maxY; $i+=$fretSpacing) {
        $draw->line($border, $i, $maxX-$border, $i);
    }
    //add border
    $imagick = new Imagick();
    $imagick->newImage($maxX, $maxY, $backgroundColor);
    $imagick->setImageFormat("gif");
    $imagick->borderImage('gray', 5, 5);
    $imagick->drawImage($draw);
    //DONE WITH FRETBOARD, drawing circles for fingers
    $lineOffset = 15;
    $radius = 13;
    $draw->setFillColor('red');
    for ($i = 0; $i < 6; $i++) {
        $originX = getChordX($i+1, $border, $fretSpacing);

        //if string[$i] == 5 then draw x where 1 goes
        if ($strings[$i] == 5) {
            $draw->setStrokeColor('gray');
            $originY = getChordY(1, $fretSpacing);
            $draw->setStrokeWidth(5);
            $draw->line($originX-$lineOffset+3, $originY-$lineOffset, $originX+$lineOffset-3, $originY+$lineOffset);
            $draw->line($originX-$lineOffset+3, $originY+$lineOffset, $originX+$lineOffset-3, $originY-$lineOffset);
        }
        $draw->setStrokeColor($strokeColor);
        $draw->setStrokeWidth(1);
        $originY = getChordY($strings[$i], $fretSpacing);
        if ($strings[$i] > 0 && $strings[$i] != 5) {
            $draw->circle($originX, $originY, $originX+$radius, $originY+$radius);
        }
    }
   $imagick->drawImage($draw);
   $imagick->writeImage($outFile);
}
?>