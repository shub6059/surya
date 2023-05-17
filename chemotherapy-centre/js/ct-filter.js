$('.ct-card').slice(6).hide();
function filterCTData() {
    var input, filter, myItems, cards, i, current, cardTitle, text;
    input = document.getElementById("ctFilter");
    filter = input.value.toUpperCase();
    myItems = document.getElementById("ctItems");
    cards = myItems.getElementsByClassName("ct-card");

    for (i = 0; i < cards.length; i++) {
        current = cards[i];
        cardTitle = current.getElementsByClassName('ct-title')[0];
        text = cardTitle.innerText.toUpperCase();
    
        if (text.indexOf(filter) > -1) {
            current.style.display = "block";

        } else {
            current.style.display = "none";
        }
    }
    if (filter==''){
        $('.ct-card').slice(6).hide();
    }    
}

$(document).ready(function(e) {
    var limit = 6;
    //$('.ct-card').slice(6).show();
    $(document).on('click','#load_ct',function(e){
        limit += 6;
        e.preventDefault();
        $('.ct-card').slice(0, limit).show();
        console.log(limit, 'click');
    });
});