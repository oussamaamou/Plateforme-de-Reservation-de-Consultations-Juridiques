const ctnr1 = document.getElementById("ctnrcsltion");
const xmark1 = document.getElementById("xmarkcsltion");
const bttnmdfie = document.getElementById("mdfiebttn");
 
xmark1?.addEventListener('click', function(){
    ctnr1.classList.add('hidden');
});


bttnmdfie?.addEventListener('click', function(){
    ctnr1.classList.remove('hidden');
});

/////////////////////////////////////////////////



