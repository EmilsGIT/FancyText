<?php
/*
Plugin Name:  FancyText
Description:  Plugin that makes text fancy
Version:      1.0.0
Author:       Emil
Text Domain:  Da Boi
 */

if(! function_exists("add_action")){
echo "What do you think you're doing?";
exit;
}

class FancyText{
    function __construct(){
        add_action("init", array($this, "RunFilters"));
    }

    function FancyWordThing($and){
        $and = str_replace ("and", "further more", $and);
        return $and;
    }

    function RunFilters(){
        add_filter("the_content", array($this, "FancyWordThing"));
    }
}

if (class_exists('FancyText')) {
    $makeChangesToText = new FancyText();
}
