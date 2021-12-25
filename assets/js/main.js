
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
async function update_settings(e, val = 0){
    var setting = e.name;

    // For checklist
    if (val == 0){
        value = e.checked ? 1 : 0;
    // For select
    } else {
        value = val;
    }

    

    let response = await fetch(`/update-settings?setting=${setting}&value=${value}`);
        if (!response.ok) { // if HTTP-status is 200-299
            alert("HTTP-Error: " + response.status);
        }
    console.log(`/update-settings?setting=${setting}&value=${value}`)
    show_alert();
    setTimeout(() => {
        hide_alert();    
    }, 4000);    

    // insert AJAX here
}    






