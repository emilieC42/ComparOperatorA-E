let starRendu = document.querySelector('.starsR')
let stars = document.querySelectorAll('.stars')

let one = document.querySelector('.one')
let two = document.querySelector('.two')
let three = document.querySelector('.three')
let four = document.querySelector('.four')
let five = document.querySelector('.five')


stars.forEach(element => {
    console.log('ppl');

    element.addEventListener('click', function(event) {
        console.log(event);

    })
});