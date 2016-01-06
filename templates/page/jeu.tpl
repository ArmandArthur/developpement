<html>
<head>
<link rel="stylesheet" type="text/css" href="css/action.css">
<link rel="stylesheet" type="text/css" href="css/map.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/caracteristique.css">
<link rel="stylesheet" type="text/css" href="css/message.css">
<script type="text/javascript" src="js/jquery-2.1.4.min.js" ></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <div id="message">
    </div>
    <div id="menu">
        {include file='menu.tpl'}
    </div>
    <div id="map">
        {include file='map.tpl'}
    </div>
    <div id="caracteristique">
        {include file='caracteristique.tpl'}
    </div>
    <div id="action">
        {include file='action.tpl'}
    </div>
</body>
</html>