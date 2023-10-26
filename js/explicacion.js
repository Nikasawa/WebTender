const guia = document.getElementsByClassName('guia');
const ferne = document.getElementById('fernet');

let x = 'mmgcmc'

function explicar(qsy){
    guia.style.width = '600px';
    guia.innertHTML = qsy;
};


const fernet_coca = (evt) => {
    x = "como no vas a saber hacer un fernet con coca"
    explicar(x)
};

ferne.addEventListener("mousedown", fernet_coca);