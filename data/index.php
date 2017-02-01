<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Docker HA</title>
    <style>
        html,body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            background: #1799DF;
            margin: 0px;
            height: 100%;
        }
        #host {
            text-align: center;
            position: absolute;
            top: 50%; 
            left: 50%;
            transform: translate(-50%, -50%);
        }
        #host > h1,h3 {
            color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div id="host">
        <img src="docker-swarm.png" />
        <h1><?php echo gethostname(); ?></h1>
    </div>
</body>
</html>