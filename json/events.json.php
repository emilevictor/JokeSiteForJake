<?php
header('Content-type: text/json');
echo '[';
$separator = "";
$days = 16;
	echo '	{ "date": "1314579600000", "type": "meeting", "title": "Test Last Year", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" },';
	echo '	{ "date": "1377738000000", "type": "meeting", "title": "Test Next Year", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" },';
for ($i = 1 ; $i < $days; $i= 1 + $i * 2) {
	echo $separator;
	$initTime = (intval(microtime(true))*1000) + (86400000 * ($i-($days/2)));
	echo '	{ "date": "'; echo $initTime; echo '", "type": "meeting", "title": "Turning ground", "description": "The first tree being planted at the Carbon Capture project in Pullenvale", "url": "http://greensmps.org.au/" },';
	echo '	{ "date": "'; echo $initTime+3600000; echo '", "type": "demo", "title": "Opening Kenmore Tavern refurbished", "description": "A highlight of Kenmore architecture and a centrepoint to the intellectualism that defines Kenmore, the Kenmore Tavern, or KT, is not just a place where your friend once sold pot to an undercover. Its back, refurbished, and the pokies are ready to take your post-tax wages", "url": "http://greensmps.org.au/" },';

	echo '	{ "date": "'; echo $initTime-7200000; echo '", "type": "meeting", "title": "Staff evaluation", "description": "Somehow a private calendar event for Jake has slipped on to his public site. Oops!", "url": "http://greensmps.org.au/" },';
	echo '	{ "date": "'; echo $initTime+10800000; echo '", "type": "test", "title": "Kissing babies", "description": "A core part of ebing a politician is the ability to kiss any baby, no matter how ugly. Jake will prove his skill with some of Brisbanes ugliest offspring being presented to him at the Moggill Ferry Terminal", "url": "http://greensmps.org.au/" },';
	echo '	{ "date": "'; echo $initTime+1800000; echo '", "type": "meeting", "title": "State Election - Voting", "description": "This is what it is all about.  The 2013 State Election. Get to your voting hall or church or school and Vote For Jake!", "url": "http://greensmps.org.au/" },';
	echo '	{ "date": "'; echo $initTime-7200000+2592000000; echo '", "type": "meeting", "title": "Petition against whaling", "description": "Jake presents the petition gathered over teh last six months to the Premier of Queensland, Campbell Newman, in a ceremony at Parliament House", "url": "http://greensmps.org.au/" },';
	echo '	{ "date": "'; echo $initTime+3600000+2592000000; echo '", "type": "demo", "title": "Roadside placard waving", "description": "You think those Greens MPs placard wavers are all bright-eyed volunteers? Wrong!  Jake is out there six days a week standing in the rain inhaling carbon monoxide, his own effort at carbon consumption.  This man is green to the heart. Well, technically, his lungs are black, but this is politics so I\'ll let it slide...", "url": "http://greensmps.org.au/" },';
	echo '	{ "date": "'; echo $initTime+10800000+2592000000; echo '", "type": "test", "title": "Fund raiser - Greens Qld", "description": "Mark this date down for the best fun to be had not aboard a whaling ship.  We have hired bands, guests and comperes to give this lifeless event the pretence of life.", "url": "http://greensmps.org.au/" },';
	echo '	{ "date": "'; echo $initTime+3600000-2592000000; echo '", "type": "demo", "title": "Project '; echo $i; echo ' demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://greensmps.org.au/" },';
	echo '	{ "date": "'; echo $initTime-7200000-2592000000; echo '", "type": "meeting", "title": "Meet the residents of Indooroopilly", "description": "Jake visits Indooroopilly Shoppingtown from 10am-12pm and wants to hear your bleating!", "url": "http://greensmps.org.au/" },';
	echo '	{ "date": "'; echo $initTime+10800000-2592000000; echo '", "type": "test", "title": "This is a sample of an event for teh Greens that has a very long title", "description": "Being able to write vapid and meaningless text for websites is a skill that has largely been eroded with the advent of teh lorem ipsum generator.  But like vinyl records, like woodcut block printing presses, old tech and skills always survive into the so-called modern age and find a way to creep into assessments like these..", "url": "http://greensmps.org.au/" }';
	$separator = ",";
}
echo ']';
?>