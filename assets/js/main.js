
// show autosave banner
function show_alert(){
    var alert_container = document.getElementById('alert-container')
    alert_container.style.display = "flex";
}

// close autosave banner
function hide_alert(){
    var alert_container = document.getElementById('alert-container')
    alert_container.style.display = "none";
}


// AJAX to autosave
function update_settings(e){
    var setting = e.name;
    var value   = e.value; 
    show_alert();
    setTimeout(() => {
        hide_alert();    
    }, 4000);

    // insert AJAX here
}