<?php

include_once("controller/Database.php");


function process_data($rows, $type){
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
        }elseif($type = "personal"){
            ob_start();
            include("components/_public.html");
            $html = ob_get_clean();
        }
    

        //initialize the tag parsing 
        $tag_html = ""; 
        
        // create the text for tags
        foreach($tags as $tag){
            $tag = trim($tag);
            $tag_html .= "<span class=\"se, mygrey-text\">$tag</span>,&nbsp;";
        }
        
        // remove space after last tag
        $tag_html = trim($tag_html, ",&nbsp;");
        

        // start replacing
        $html = str_replace("{{id}}", $id, $html);

        // check if anonymous til
        if ($is_anonymus){
            // $color = fopen("components/name_generator/colors.txt", "r");
            // $animal = fopen("components/name_generator/animals.txt", "r");

            // fclose($animal);
            // fclose($color);
            $html = str_replace("{{user}}", "anonymous", $html);
        }else {
            $html = str_replace("{{user}}", $user, $html);
        }
        
        $html = str_replace("{{date}}", $date, $html);
        $html = str_replace("{{title}}", $title, $html);
        $html = str_replace("{{tags}}", $tag_html, $html);
        
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
        yield $html;
    }
}



function show_public($columns){
    
    $rows = Database::select_all('tils', $columns);
    $html = array_map("process_data",  $rows, "public");
    foreach($html as $h){
        echo $h;
    }
}


function show_personal($columns, $user){
    $rows = Database::select_all('tils', $columns);
    $html = array_map("process_data",  $rows, "private");
    foreach($html as $h){
        echo $h;
    }

    // // TODO ricordarsi di inserire USER e cambiare funziona da select_all
    // $rows = Database::select_all('tils', $columns);
    // foreach($rows as $row){
    //     $id = $row["ID"];
    //     $user = $row["USER"];
        
    //     // date
    //     $day   = $row["DAY"];
    //     $month = $row["MONTH"];
    //     $year  = $row["YEAR"];
  
    //     $date  = "$day/$month/$year";
        
    //     // content
    //     $title = $row["TITLE"];
    //     $text = $row["MAIN"];
    //     $tags = explode(",", $row["TAGS"]);

    //     // reminders
    //     $r_day = $row["REMINDER_DAY"];
    //     $r_week = $row["REMINDER_WEEK"];
    //     $r_month = $row["REMINDER_MONTH"];
    //     $r_year = $row["REMINDER_YEAR"];

    //     // infos
    //     $is_public = $row["PUBLIC"];
    //     $is_anonymus = $row["ANONYMUS"];
        
    //     if(!$is_public){
    //         continue;
    //     }
        
    //     // TODO ricordami qui di mettere lo switch per tipo di data richiesto
        
    //     ob_start();
    //     include("components/_personal.html");
    //     $html = ob_get_clean();


        
    //     $tag_html = ""; 
        
    //     foreach($tags as $tag){
            
    //         $tag = trim($tag);
    //         $tag_html .= "<span class=\"se, mygrey-text\">$tag</span>,&nbsp;";
    //     }
    //     $tag_html = trim($tag_html, ",&nbsp;");
        
    //     $html = str_replace("{{id}}", $id, $html);

    //     // chrvk if anonymous til
    //     if ($is_anonymus){
    //         // $color = fopen("components/name_generator/colors.txt", "r");
    //         // $animal = fopen("components/name_generator/animals.txt", "r");

    //         // fclose($animal);
    //         // fclose($color);
    //         $html = str_replace("{{user}}", "anon", $html);
    //     }else {
    //         $html = str_replace("{{user}}", $user, $html);
    //     }
        
    //     $html = str_replace("{{date}}", $date, $html);
    //     $html = str_replace("{{title}}", $title, $html);
    //     $html = str_replace("{{tags}}", $tag_html, $html);
        
    
        
    //     $html = str_replace("{{text}}", $text, $html);
    //     echo $html;
    // }
}





?>