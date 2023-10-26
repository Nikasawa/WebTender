const selectItem = document.getElementsById('ingreso');

let lista = [];

function webtender(item){
    console.log(item);
};

const listingred = (evt) => {
    webtender(selectItem.namedItem);
    webtender(selectItem.item);
};

selectItem.addEventListener("mousedown", listingred);
