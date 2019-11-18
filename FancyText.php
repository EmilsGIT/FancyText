<?php
/*
Plugin Name:  FancyText
Description:  Plugin that makes text fancy
Version:      1.0.0
Author:       Emil
Text Domain:  Blyat
 */

class FancyText{
    function __construct(){
        add_action("init", array($this, "RunFilters"));
    }

    function ReplaceSo($so){
        $so = str_replace (" so ", " thus ", $so);
        return $so;
    }
    function ReplaceYour($your){
        $your = str_replace (" your ", " thy ", $your);
        return $your;
    }
    function ReplaceWho($who){
        $who = str_replace (" who ", " whom ", $who);
        return $who;
    }
    
    function Replaceexceedingly($exceedingly){
        $exceedingly = str_replace (" very ", " exceedingly ", $exceedingly);
        return $exceedingly;
    }
    function Replaceimbecile($imbecile){
        $imbecile = str_replace (" idiot ", " imbecile ", $imbecile);
        return $imbecile;
    }
    function Replacegreetings($greetings){
        $greetings = str_replace (" hello ", "greetings", $greetings);
        return $greetings;
    }
    function Replaceunintelligent($unintelligent){
        $unintelligent = str_replace ("stupid ", " unintelligent ", $unintelligent);
        return $unintelligent;
    }

    function RunFilters(){
        add_filter("the_content", array($this, "ReplaceSo"));
        add_filter("the_content", array($this, "ReplaceYour"));
        add_filter("the_content", array($this, "ReplaceWho"));
        add_filter("the_content", array($this, "ReplaceExceedingly"));
        add_filter("the_content", array($this, "Replaceimbecile"));
        add_filter("the_content", array($this, "ReplaceGreetings"));
        add_filter("the_content", array($this, "Replaceunintelligent"));
    }

}

if (class_exists('FancyText')) {
    $makeChangesToText = new FancyText();
}
