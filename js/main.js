function vaildation (){
    var title = document
    .forms["noteBook"]["title"].value;
    var yourNotesHere = document
    .forms["noteBook"]["yournoteshere"].value;
    if (title == null || title == "" || yourNotesHere == null || yourNotesHere == ""){
        document.querySelector(".notify").textContent = "Fill out all required fields.";
        return false;
    }
function submitTheTitle () {
    var theTitle = document.getElementById("title").value;
    document.write("<br>" + theTitle + "");

}    
function submitTheNote () {
    var theNote = document.getElementById("yourNotesHere").value;
    document.write("<br>" + theNote + "");
}
}
    


    
