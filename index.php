<?php
    mb_internal_encoding("UTF-8");
    require_once "lib/core/database_dob.php";
    require_once "lib/content/frontpagecontent_dob.php";
    require_once "lib/content/sectioncontent_dob.php";
    require_once "lib/content/notfoundcontent_dob.php";
    require_once "lib/content/regcontent_dob.php";
    require_once "lib/content/messagecontent_dob.php";
    require_once "lib/content/reestablishcontent_dob.php";
    require_once "lib/content/searchcontent_dob.php";
    require_once "lib/content/renamecontent_dob.php";
    require_once "lib/content/postreestabcontent_dob.php";
    require_once "lib/content/editprofilecontent_dob.php";
    
    $db = new DataBase();
    $view = $_GET["view"];
    switch ($view) {
        case "": 
            $content = new FrontPageContent($db);
            break;
        case "section":
            $content = new SectionContent($db);
            break;
        case "reg":
            $content = new RegContent($db);
            break;
        case "message":
            $content = new MessageContent($db);
            break;
        case "reestablish":
            $content = new ReestablishContent($db);
            break;
        case "edit_profile":
            $content = new EditProFile($db);
            break;
        case "search":
            $content = new SearchContent($db);
            break;
        case "rename":
            $content = new RenamePassContent($db);
            break;
        case "reestablishpost":
            $content = new PostReestablishContent($db);
            break;
        default: $content = new NotFoundContent($db);
    }
    echo $content->getContent();
?>