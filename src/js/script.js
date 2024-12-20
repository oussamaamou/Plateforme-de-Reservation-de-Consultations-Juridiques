const ctnr1 = document.getElementById("ctnrcsltion");
const xmark1 = document.getElementById("xmarkcsltion");

 
xmark1?.addEventListener('click', function(){
    ctnr1.style.display = 'none';
});



const cfrmbttn1 = document.getElementById("cfrmrsrvtion");
const annltblelmt = document.querySelectorAll('.annltbl');

cfrmbttn1?.addEventListener('click', function(){
    annltblelmt.forEach(element => {
        element.style.display = 'none';
    })
});

/////////////////////////////////////////////////////////////////////////

const dltebttn1 = document.getElementById("dltersrvtion");
const cardrsrvtion = document.getElementById("rsrvtioncard");

dltebttn1?.addEventListener('click', function(){
    cardrsrvtion.style.display = 'none';
});


