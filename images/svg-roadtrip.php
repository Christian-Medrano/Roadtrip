<?php 
	
	$roadtrip = '
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 791">
	  <style type="text/css">
	    
	    .sky{fill:#5EC7F5;}
		.grass{fill:#4D944F;}
		.road{fill:#4D4D4D;}
		.dotted-line{fill:none;stroke:#FFFFFF;stroke-width:25;stroke-miterlimit:10;stroke-dasharray:100,100,0,0,0,0;}
		.body{fill:#0071BC;}
		.rear-bumper{fill:#B3B3B3;}
		.front-bumper{fill:#B3B3B3;}
		.rear-rim{fill:#B3B3B3;}
		.front-rim{fill:#B3B3B3;}
		.rear-tire{fill:#1A1A1A;}
		.front-tire{fill:#1A1A1A;}
		.posts{fill:none;stroke:#4F3D1F;stroke-width:26;stroke-miterlimit:10;stroke-dasharray:26,102,0,0,0,0;}
		.rail1{fill:#B3B3B3;}
		.rail2{fill:#C8C8C8;}
		.car-shadow{opacity:0.29;}
		
		.st7{fill:#C8C8C8;}
		.st8{fill:#FFFFFF;}
		.st9{fill:#C8C8C8;}
		.st10{fill:#5A5A5A;stroke:#C8C8C8;stroke-miterlimit:10;}

	  </style>
	    <rect class="sky" width="1920" height="791"/>
	    <rect y="225" class="grass" width="1920" height="566"/>
	    <rect y="368" class="road" width="1920" height="423"/>

	    <line class="dotted-line" x1="0" y1="579.5" x2="2794" y2="579.5"/>

	    <line id="posts" class="posts" x1="-127" y1="354.6" x2="2085" y2="354.6"/>
	    <rect y="297" class="rail1" width="1920" height="44"/>
	    <rect y="310" class="rail2" width="1920" height="17"/>

		<g id="car">
			<path class="car-shadow" d="M900,738H126c-6.6,0-12-5.4-12-12v-4.3c0-6.6,5.4-12,12-12h774c6.6,0,12,5.4,12,12v4.3
				C912,732.6,906.6,738,900,738z"/>

			<path class="body" d="M137 665l749.5-0.5L886 582c0 0-5.4-41.7-39-47 -146-23-146-23-146-23s-58-64-98-94 -312 0-312 0 -116 76-136 129S137 665 137 665z"/>

			<path class="rear-bumper" d="M162 674h-36c-6.6 0-12-5.4-12-12v-23c0-6.6 5.4-12 12-12h36c6.6 0 12 5.4 12 12v23C174 668.6 168.6 674 162 674z"/>

			<path class="front-bumper" d="M900 674h-36c-6.6 0-12-5.4-12-12v-23c0-6.6 5.4-12 12-12h36c6.6 0 12 5.4 12 12v23C912 668.6 906.6 674 900 674z"/>

			<path d="M270.7 432L203 512h-25.1C177.9 512 214.5 465 270.7 432z"/>

			<rect x="295" y="432" width="147" height="80"/>

			<polygon points="601.8 432.5 461 432 461 512 684 512 "/>

			<g id="headlight">
				<ellipse transform="matrix(0.8876 -0.4606 0.4606 0.8876 -162.9001 463.8493)" class="st7" cx="869" cy="565.7" rx="5.1" ry="24.1"/>
				
				<ellipse transform="matrix(0.8876 -0.4606 0.4606 0.8876 -163.0606 463.3764)" class="st8" cx="868" cy="565.8" rx="4.1" ry="19.1"/>
			</g>
				
			<g id="front-wheel_1_">
					<circle class="front-tire" cx="703" cy="665" r="73"/>
					<circle class="front-rim" cx="703" cy="665" r="41"/>
					<g class="wheel-blur">
						<path class="st9" d="M703,665.1l-34,13.5c0,0-8.1-17.2,2-33.2L703,665.1z"/>
						<path class="st9" d="M703,664.9l34-13.5c0,0,8.1,17.2-2,33.2L703,664.9z"/>
						<circle class="st10" cx="703" cy="664.9" r="5"/>
					</g>
				</g>

			<g id="rear-wheel">
				<circle class="rear-tire" cx="263" cy="665" r="73"/>
				<circle class="rear-rim" cx="263" cy="665" r="41"/>
				<g class="wheel-blur">
					<path class="st9" d="M263,664.2l-34,13.5c0,0-8.1-17.2,2-33.2L263,664.2z"/>
					<path class="st9" d="M263,664l34-13.5c0,0,8.1,17.2-2,33.2L263,664z"/>
					<circle class="st10" cx="263" cy="664" r="5"/>
				</g>
			</g>

			
		</g>
		
	</svg>
	';

	echo $roadtrip;
