<html>
<title>AGNI</title>
<head>
<?php
include("head.txt");
?>

</head>

<body>
<?php
if(!($_GET['click']))
{
include ("top.txt");
echo '<div id="fullcontent">';
}

include("soap.txt");

if(!($_GET['click']))
{

echo '</div>';
include ("sideupdates.txt");
include("footer.txt");
}
?>
</div>

</body>
</html>