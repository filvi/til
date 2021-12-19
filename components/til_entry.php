<?php

include_once("controller/Database.php");



$rows = Database::select_all('tils', ['*']);


foreach($rows as $row){
    $id = $row["ID"];
    $user = $row["USER"];
    
    // date
    $day   = $row["DAY"];
    $month = $row["MONTH"];
    $year  = $row["YEAR"];
    $date  = "$day/$month/$year";

    // content
    $title = $row["TITLE"];
    $text = $row["MAIN"];
    $tags = explode(",", $row["TAGS"]);
    $r_day = $row["REMINDER_DAY"];
    $r_week = $row["REMINDER_WEEK"];
    $r_month = $row["REMINDER_MONTH"];
    $r_year = $row["REMINDER_YEAR"];
    $is_public = $row["PUBLIC"];
    $is_anonymus = $row["ANONYMUS"];


    // TODO ricordami qui di mettere lo switch per tipo di data richiesto

    ob_start();
    if($type == "public"){
        include("components/_public.html");
    }elseif($type == "private"){
        include("components/_personal.html");
    }
    $html = ob_get_clean();
    
    $tag_html = ""; 

    foreach($tags as $tag){

        $tag = trim($tag);
        $tag_html .= "<span class=\"se, mygrey-text\">$tag</span>,&nbsp;";
    }
    $tag_html = trim($tag_html, ",&nbsp;");

    $html = str_replace("{{id}}", $id, $html);
    $html = str_replace("{{user}}", $user, $html);
    $html = str_replace("{{date}}", $date, $html);
    $html = str_replace("{{title}}", $title, $html);
    $html = str_replace("{{tags}}", $tag_html, $html);


    $html = str_replace("{{text}}", $text, $html);
    echo $html;
}







?>