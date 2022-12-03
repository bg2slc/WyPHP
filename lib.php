<?php
//Include File
//By Benjamin Garrett
//Contains helper functions

/** ++++++++++++ DOCUMENT WRITING **/
function writeHTMLHeaders($Title="My Title", 
    $Favicon="gobicon.ico")  {
    echo "<!DOCTYPE html>
<html>
<head>
	<meta charset = \"UTF-8\">
	<title>$Title</title>\n
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" 
        href=\"stylesheet.php\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"/images/$Favicon\" />
</head>
<body>
<div class=\"outerBodyDiv\">";
}

function writeArticleHeaders($Title="My Title") {
    echo "
    <div class=\"bodyDiv\">
        <h1>$Title</h1>
    </div>";
}

function writeBannerMessage($Text="", $isError=0) {
    if ($Text=="") {
        echo "
    <div class=\"bannerMessage\">\n<!-- POST ARRAY DATA HERE -->\n";
        var_dump($_POST);
        echo "<!-- END POST ARRAY -->\n    </div>";
    }
    else
    {
        if($isError)    {
            echo "<div class=\"bannerMessage redMessage\">$Text</div>";
        }
        else    {
            echo "<div class=\"bannerMessage\">$Text</div>";
        }
    }
}

function displayLabel($Label="My Label", $Name="")
{
	if ($Name == "")
        echo "<label>$Label</label>";
    else
        echo "<label for=\"$Name\">$Label</label>";
}

function displayTextBox($InputType, $Name, $Size, $Value=0)
{
    echo "<input type = $InputType name=\"$Name\" id=\"$Name\"
        size = \"$Size\" MaxLength=\"$Size\" value = \"$Value\">\n";
}

function displayImage($FileName, $Alt="Alternate Text Here",
    $Height=100, $Width=100)
{
    echo "<img src=\"$FileName\" alt=\"$Alt\" height=\"$Height\" 
        width=\"$Width\"/>\n";
}

function displayButton($Name, $Text="Button", $Value="")
{
    //echo "<div>";
    if ($Value=="")
        echo "<button class=\"dis\" type=Submit name=\"$Name\">$Text</button>";
    else
        echo "<button class=\"dis\" type=Submit name=\"$Name\" " .
            "value=\"$Value\">$Text" . "</button>";
    //echo "</div>";
}

function writeFooters()
{
    echo "
    <footer>Written by Benjamin Garrett</footer>
</div><!-- /outerBodyDiv -->
</body>
</html>\n";
}

/** ++++++++++++ MYSQL **/
function createConnectionObject()
{
    $fh = fopen('auth.txt','r');
    $Host = trim(fgets($fh));
    $UserName = trim(fgets($fh));
    $Password = trim(fgets($fh));
    $Database = trim(fgets($fh));
    $Port = trim(fgets($fh));
    fclose($fh);

    $mysqlObj = new mysqli($Host, $UserName, $Password,$Database,$Port);
    // if the connection and authentication are successful,
    // the error number is 0
    // connect_errno is a public attribute of the mysqli class.
    if ($mysqlObj->connect_errno != 0)
    {
        echo 
        "<p>Connection failed. Unable to open database $Database. Error: "
        . $mysqlObj->connect_error . "</p>";
        // stop executing the php script
        exit;
    }
    return ($mysqlObj);
}

/** ++++++++++++ STRING MANIP **/
function yearsAndWeeks($numOfWeeks)    {
    $message = "";
    if($numOfWeeks > 52)    {
        $numOfYears = intdiv($numOfWeeks, 52);
        $numOfWeeks = $numOfWeeks % 52;
        if($numOfYears == 1)
            $message = "1 year, ";
        else
            $message = "" . $numOfYears . " years, ";
    }
    if($numOfWeeks == 1)
        $message = $message . "1 week";
    else
        $message = $message . $numOfWeeks . " weeks";
    return $message;
}

?>
