let tid = $("input[name*='tid']")
tid.attr("readonly","readonly");


$(".btnedit").click( e =>{
    let textvalues = displayData(e);

    ;
    let tname = $("input[name*='tname']");
    let temail = $("input[name*='temail']");
    let tage = $("input[name*='tage']");
    let tgender = $("input[name*='tgender']");

    tid.val(textvalues[0]);
    tname.val(textvalues[1]);
    temail.val(textvalues[2]);
    tage.val(textvalues[3]);
    tgender.val(textvalues[4]);
  
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td){
        if(value.dataset.id == e.target.dataset.id){
           textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}