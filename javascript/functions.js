function add_stage(i) {
    $("#addspan").remove();
    $("#stage").append("<tr><th>Stage "+i+":</th><td><input type=\"number\" name=\"wage[]\" min=\"0\" max=\"1000000\" placeholder=\"wage\"><input type=\"number\" name=\"duration[]\" min=\"0\" max=\"1000000\" placeholder=\"duration in years\"><span id=\"addspan\" onclick=\"add_stage("+(i+1)+");\">Add stage</span></td><tr>");
}