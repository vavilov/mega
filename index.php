<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" type="text/css" href="css/style.css" />
    <meta name="robots" content="none" />
    
    <div class="header" id="header">
    	<div class="site-name">
    		<a href="http://megar.online"><img src="img/adress_1.png"/></a>    		
    	</div>
    </div>

    <style>
    	.baton {
		border: none;
		background: #404040;
		color: #ffffff !important;
		font-weight: 100;
		padding: 20px;
		//text-transform: uppercase;
		border-radius: 6px;
		display: inline-block;
		margin: 10px;
		width: 40%;
		}
		.baton:hover {
		color: #404040 !important;
		font-weight: 700 !important;
		letter-spacing: 3px;
		background: none;
		-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
		-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
		transition: all 0.3s ease 0s;
		}

		body {
		    margin-top: 25px;
		    //font-size: 21px;
		    text-align: center;
		    animation: fadein 3s;
		    -moz-animation: fadein 2s; /* Firefox */
		    -webkit-animation: fadein 2s; /* Safari and Chrome */
		    -o-animation: fadein 2s; /* Opera */
		}
		@keyframes fadein {
		    from {
		        opacity:0;
		    }
		    to {
		        opacity:1;
		    }
		}@-moz-keyframes fadein { /* Firefox */
		    from {
		        opacity:0;
		    }
		    to {
		        opacity:1;
		    }
		}
		@-webkit-keyframes fadein { /* Safari and Chrome */
		    from {
		        opacity:0;
		    }
		    to {
		        opacity:1;
		    }
		}
		@-o-keyframes fadein { /* Opera */
		    from {
		        opacity:0;
		    }
		    to {
		        opacity: 1;
		    }
		}
    </style>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

	<?php
		$d = opendir('img/gallery');
		while (false !== ($entry = readdir($d)))
		{
		    if ($entry=='.' || $entry=='..') continue;	    	

	        $folders[] = $entry;			    
		}
		closedir($d);

		sort($folder, SORT_REGULAR);
		$folders = array_reverse($folders);

		$months = [
		  'января',
		  'февраля',
		  'марта',
		  'апреля',
		  'мая',
		  'июня',
		  'июля',
		  'августа',
		  'сентября',
		  'октября',
		  'ноября',
		  'декабря'
		];

		foreach($folders as $dir){
			$parts = explode("-", $dir);
			$lab = "Показать за ".$parts[2]." ".$months[$parts[1] + 1]." ".$parts[0];
			echo '<div class="separator">
				<a class="baton" href="dir.php?q='.$dir.'">'.$lab.'</a>
			</div>';
		}
	?>
</body>
</html>