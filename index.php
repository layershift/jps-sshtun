<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <style>

/* Desktop */
@media (min-width: 600px) {

    html,body {
        margin:0; padding:0; height:100%; width:100%;
    }

}
/* Desktop */

    #container {
	background:#601748;
	position:absolute;
	color:#fff;
	text-align:center;
	top:50%;
	left:50%;
	padding:15px;
	-ms-transform: translateX(-50%) translateY(-50%);
	-webkit-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
	border-radius: 15px 50px;
    }
    </style>
</head>

<body>
    <div id="container">
        <p><textarea style="width: 900px; height: 400px;">
            <?php
                echo file_get_contents('texts/description.md');
            ?></textarea>
        </p> 	
    
        <p>
            Enable SSH tunneling for database node
        </p>
        <p>
            <?php
                $jps="sshtun.jps";
                if (isset($_SERVER['REQUEST_SCHEME']))
                    {
                        $manifest=$_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].str_replace("index.php","",$_SERVER['REQUEST_URI']).$jps;
                    }
                else
                    {
                        $manifest=str_replace("index.php","",$_SERVER['SCRIPT_URI']).$jps;
                    }
            ?>
	        <pre style="color:#601748"><?=$manifest?></pre>
            <a href="https://app.j.layershift.co.uk/?manifest=<?=$manifest?>" target="myTarget">
                <img src="https://raw.githubusercontent.com/jelastic-jps/jpswiki/master/images/getithosted.png"  alt="GET IT HOSTED" style="max-width:100%;">
            </a>
        </p>
        
    </div>
</body>
</html>
