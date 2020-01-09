<?php
/*
Plugin Name:  Grand C0RRECT0R
Description:  Corrects common spelling errors automatically.
Version:      1.0.0
Author:       Emil
Text Domain:  ...
 */
defined( 'ABSPATH') or die ('excuse me?!');

class correctSpelling{
    function __construct(){
        add_filter('the_content', array($this,'findWords'));
        }
    function findWords($content) 
    {
        $wrongWords = 'abcense acceptible accidentaly aaccomodate acheive acknowlege acquaintence aquire aquit acrage adress adultary adviseable effect agression agressive allegaince alot amatuer anually apparant artic arguement athiest awfull becuase beatuful becomeing begining beleive bellweather bouy buisness calender camoflage capital Carribean catagory cauhgt cemetary changable cheif collaegue colum comming commited comparsion conceed congradulate consciencious concious concensus contraversy cooly dacquiri decieve definate definitly desparate diffrence dilema dissapoint disasterous drunkeness dumbell embarass equiptment excede exilerate existance experiance extreem facinating firey flourescent foriegn freind fullfil guage gratefull garantee guidence harrass heighth heirarchy humerous hygene hipocrit ignorence immitate imediately indite independant indispensible innoculate inteligence jewelery judgement kernal liesure liason libary lisence lightening maintainance medeval momento millenium miniture miniscule mischievious mispell neccessary neice nieghbor noticable occassion occasionaly occurrance occured ommision orignal outragous parliment passtime percieve perseverence personell plagerize playright posession potatos preceed presance principal privelege professer promiss pronounciation prufe prophesy publically quarentine que questionaire readible realy recieve reciept recomend refered referance relevent religous repitition restarant rime rythm secratary sieze seperate sargent similer skilfull speach sucessful supercede suprise tomatos tommorow twelth tyrany underate untill upholstry usible vaccuum vehical visious wether wierd wellfare wether wilfull withold writting'; 
        
        $rightWords = 'absence acceptable accidentally accommodate achieve acknowledge acquaintance acquire acquit acreage address adultery advisable affect aggression aggressive allegiance a-lot amateur annually apparent arctic argument atheist awful because beautiful becoming beginning believe bellwether buoy business calendar camouflage capitol Caribbean category caught cemetery changeable chief colleague column coming committed comparison concede congratulate conscientious conscious consensus controversy coolly daiquiri deceive definite definitely desperate difference dilemma disappoint disastrous drunkenness dumbbell embarrass equipment exceed exhilarate existence experience extreme fascinating fiery fluorescent foreign friend fulfil gauge grateful guarantee guidance harass height hierarchy humorous hygiene hypocrisy ignorance imitate immediately indict independent indispensable inoculate intelligence jewelry judgment kernel leisure liaison library license lightning maintenance medieval memento millennium miniature minuscule mischievous misspell necessary niece neighbor noticeable occasion occasionally occurrence occurred omission original outrageous parliament pastime perceive perseverance personnel plagiarize playwright possession potatoes precede presence principle privilege professor promise pronunciation proof prophecy publicly quarantine queue questionnaire readable really receive receipt recommend referred reference relevant religious repetition restaurant rhyme rhythm secretary seize separate sergeant similar skilful speech successful supersede surprise tomatoes tomorrow twelfth tyranny underrate until upholstery usable vacuum vehicle vicious weather weird welfare whether wilful withhold writing';

        $search = explode(" ", $wrongWords);

        $replace = explode(" ", $rightWords);
        
       return str_replace( $search, $replace, $content );
      

   }
};
   $makeChangesToText = new correctSpelling();
  



?>
