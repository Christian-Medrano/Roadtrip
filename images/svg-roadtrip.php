<?php 
	
	$roadtrip = '
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 791">
	  <style type="text/css">
	    
	    .sky{fill:#5EC7F5;}
		.grass{fill:#4D944F;}
		.road{fill:#4D4D4D;}
		.dotted-line{fill:none;stroke:#FFFF00;stroke-width:25;stroke-miterlimit:10;stroke-dasharray:75,50,0,0,0,0;}
		.body{fill:#0071BC;}
		.rear-bumper{fill:#B3B3B3;}
		.front-bumper{fill:#B3B3B3;}
		.rear-rim{fill:#B3B3B3;}
		.front-rim{fill:#B3B3B3;}
		.rear-tire{fill:#1A1A1A;}
		.front-tire{fill:#1A1A1A;}

	  </style>
	    <rect class="sky" width="1920" height="791"/>
	    <rect y="225" class="grass" width="1920" height="566"/>
	    <rect y="368" class="road" width="1920" height="423"/>
	    <line class="dotted-line" x1="-124" y1="579.5" x2="2088" y2="579.5"/>
		<g id="car">
		<path class="body" d="M137 665l749.5-0.5L886 582c0 0-5.4-41.7-39-47 -146-23-146-23-146-23s-58-64-98-94 -312 0-312 0 -116 76-136 129S137 665 137 665z"/>

		<path class="rear-bumper" d="M162 674h-36c-6.6 0-12-5.4-12-12v-23c0-6.6 5.4-12 12-12h36c6.6 0 12 5.4 12 12v23C174 668.6 168.6 674 162 674z"/>

		<path class="front-bumper" d="M900 674h-36c-6.6 0-12-5.4-12-12v-23c0-6.6 5.4-12 12-12h36c6.6 0 12 5.4 12 12v23C912 668.6 906.6 674 900 674z"/>

		<path d="M270.7 432L203 512h-25.1C177.9 512 214.5 465 270.7 432z"/>

		<rect x="295" y="432" width="147" height="80"/>

		<polygon points="601.8 432.5 461 432 461 512 684 512 "/>
			
		<circle class="front-tire" cx="703" cy="665" r="73"/>
		<circle class="front-rim" cx="703" cy="665" r="41"/>
		<circle class="rear-tire" cx="263" cy="665" r="73"/>
		<circle class="rear-rim" cx="263" cy="665" r="41"/>
		</g>
		
	</svg>
	';

	echo $roadtrip;
