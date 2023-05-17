$('.mri-card').slice(6).hide();
function filterMRIData() {
    var input, filter, myItems, cards, i, current, cardTitle, text;
    input = document.getElementById("mriFilter");
    filter = input.value.toUpperCase();
    myItems = document.getElementById("mriItems");
    cards = myItems.getElementsByClassName("mri-card");

    for (i = 0; i < cards.length; i++) {
        current = cards[i];
        cardTitle = current.getElementsByClassName('card-title')[0];
        text = cardTitle.innerText.toUpperCase();
    
        if (text.indexOf(filter) > -1) {
            current.style.display = "block";

        } else {
            current.style.display = "none";
        }
    }
    if (filter==''){
        $('.mri-card').slice(6).hide();
    }    
}

$(document).ready(function(e) {
    var limit = 6;
    //$('.mri-card').slice(6).show();
    $(document).on('click','#load_mri',function(e){
        limit += 6;
        e.preventDefault();
        $('.mri-card').slice(0, limit).show();
        console.log(limit, 'click');
    });
});