// on scroll animation
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
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


// Typing animation
const text = 'Ik ben Florian Koning, 20 jaar oud en afkomstig uit delft. Al mijn hele leven heb ik interesse in de software van computers. Mijn eerste website die ik programmeerde was toen ik twaalf was op een chromeboek in mijn pauze. Nog steeds leer ik elke dag met plezier, en wil ik altijd meer leren.';
const textDiv = document.getElementById('aboutMeText');
let amount = 0;

function textTypingEffect(element, text, i = 0) {
    element.textContent += text[i];

    if (i == text.length - 1) {
        return;
    }

    setTimeout(() => textTypingEffect(element, text, i + 1), 35);
}

const textObserver = new IntersectionObserver((entries) => {
    const entry = entries[0];
    if (entry['isIntersecting'] == true && amount == 0) {
        textTypingEffect(textDiv, text);
        amount++;
    }
});

textObserver.observe(textDiv);