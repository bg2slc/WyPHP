<!-- http://localhost/index.php -->
<!-- PHP Form Template -->
<?php
/**     --[[    REQUIRES                            ]]--    **/
require("lib.php");
//$ERROCHECK is also used to display POST array after HTMLHeaders
$ERRORCHECK = true;
if($ERRORCHECK)    {
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
}

/**     --[[    HELPER FUNCTIONS                    ]]--    **/

/**     --[[    FORM WRITING                        ]]--    **/
function displayFormExample() {
    echo "
    <div class=\"bodyDiv\">
        <p>This is a test example</p>";
        displayLabel("Haha");
    echo "
    </div>";
}

/**     --[[    MAIN                                ]]--    **/
date_default_timezone_set('America/Toronto');
//$mysqlObj = createConnectionObject();

writeHTMLHeaders();
if($ERRORCHECK)    {
    //no params dumps POST array
    writeBannerMessage();
}
//  Top of article
writeArticleHeaders();

if(isset($_POST['f_Example'])) {
    displayFormExample(); //maybe pass mysqlObj if created above.
}
else if(isset($_POST['f_OtherName']))   {
    //displayFormOtherName
}
else    {   //No forms flagged, default page
    displayFormExample(); //maybe pass mysqlObj if created above.
}

writeFooters();
if(isset($mysqlObj)) $mysqlObj->close();
?>
<!-- php document ended -->
