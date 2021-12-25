<?php

include_once("controller/Database.php");


function process_data(array $rows, $type){
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

        // reminders
        $r_day = $row["REMINDER_DAY"];
        $r_week = $row["REMINDER_WEEK"];
        $r_month = $row["REMINDER_MONTH"];
        $r_year = $row["REMINDER_YEAR"];

        // infos
        $is_public = $row["PUBLIC"];
        $is_anonymus = $row["ANONYMUS"];
        
        // Check if type public or private
        if($type == "public"){
            if(!$is_public){
                continue;
            }
            ob_start();
            include("components/_public.html");
            $html = ob_get_clean();
        }elseif($type == "personal"){
            ob_start();
            include("components/_personal.html");
            $html = ob_get_clean();
        }
    

        //initialize the tag parsing 
        $tag_html = ""; 
        
        // create the text for tags --------------------------------------------
        foreach($tags as $tag){
            $tag = trim($tag);
            $tag_html .= "<span class=\"se, mygrey-text\">$tag</span>,&nbsp;";
        }
        // remove space after last tag
        $tag_html = trim($tag_html, ",&nbsp;");
        // ---------------------------------------------------------------------

        
        
        // check if anonymous til ----------------------------------------------
        if ($is_anonymus){
            $anon = Database::get_anon();
            
            $animal = strtolower($anon["ANIMAL"]);
            $color = strtolower($anon["COLOR"]);

            $anon = "$color-$animal";
            $html = str_replace("{{user}}", $anon, $html);
        }else {
            $html = str_replace("{{user}}", $user, $html);
        }
        // ---------------------------------------------------------------------
        
        
        // start replacing -----------------------------------------------------
        $html = str_replace("{{id}}", $id, $html);
        $html = str_replace("{{date}}", $date, $html);
        $html = str_replace("{{title}}", $title, $html);
        $html = str_replace("{{tags}}", $tag_html, $html);
        
        
        // change icon for personal til public ---------------------------------
        if ($is_public){
            $html = str_replace("{{is_public}}", "public", $html);
        } else{
            $html = str_replace("{{is_public}}", "private", $html);
        }
        // ---------------------------------------------------------------------
        
        // change icon for personal til anonymous ------------------------------
        if ($is_anonymus){
            $html = str_replace("{{is_anon}}", "anonymous", $html);
        } else {
            $html = str_replace("{{is_anon}}", "not anonymous", $html);
        }
        $html = str_replace("{{is_anon}}", $is_anonymus, $html);
        // ---------------------------------------------------------------------
        
        // TODO inserire qui il discorso se data passata come terza variabile
        // active - inactive - past
        if($r_day){
            $html = str_replace("{{day}}", "active", $html);
        }else {
            $html = str_replace("{{day}}", "inactive", $html);
        }
        
        if($r_week){
            $html = str_replace("{{week}}", "active", $html);
        }else {
            $html = str_replace("{{week}}", "inactive", $html);
        }
        
        if($r_month){
            $html = str_replace("{{month}}", "active", $html);
        }else {
            $html = str_replace("{{month}}", "inactive", $html);
        }
        
        if($r_year){
            $html = str_replace("{{year}}", "active", $html);
        }else {
            $html = str_replace("{{year}}", "inactive", $html);
        }
        $html = str_replace("{{text}}", $text, $html);
        // ---------------------------------------------------------------------

        
        
        echo $html;
    }
}



function show_public($columns){
    $rows = Database::select_all('tils', $columns);

    // if empty
    if (count($rows)){
        call_user_func("process_data",  $rows, "public");
    } else {
        echo "No tils found";
    }
}


function show_personal($columns, $user){
    $rows = Database::select('tils', $columns, $user);

    // if empty
    if (count($rows)){
        call_user_func("process_data",  $rows, "personal");
    } else {
        echo "No tils found";
    }

}





?>