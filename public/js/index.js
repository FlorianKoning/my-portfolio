// on scroll animation
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('scrollShow');
        }
    });
});
const hiddenElements = document.querySelectorAll('.scrollHidden');
hiddenElements.forEach((el) => observer.observe(el));

    
// Navbar Scroll Animation
function scrolldiv(id) {
    var elem = document.getElementById(id);
    elem.scrollIntoView({ 
          block: 'end', 
          behavior: 'smooth' 
        });
}


// Digit counter animation
let targetElements = document.querySelectorAll(".digit-box");
let animationTiming = 400;

targetElements.forEach((targetElement) => {
    let value = 0;
    let valueTwo = parseInt(targetElement.getAttribute("value"));
    let timing = Math.floor(animationTiming / valueTwo);
    setTimeout(() => {
        let counter = setInterval(function() {
            value += 1;
            targetElement.textContent = value;
            if (value == valueTwo) {
                clearInterval(counter);
            }
        }, timing);
    },900);
});