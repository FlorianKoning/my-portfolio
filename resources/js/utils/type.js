const text = `Ik ben Florian Koning, 21 jaar oud en woonachtig in Delft. Al van jongs af aan ben ik gefascineerd door software en technologie. Toen ik twaalf was, bouwde ik mijn eerste website op een Chromebook tijdens de pauze op school — en sindsdien ben ik blijven bouwen.
\n
Ik leer nog steeds elke dag met plezier bij en ben altijd op zoek naar manieren om mijn vaardigheden verder te ontwikkelen.`;

const textDiv = document.getElementById('aboutMeText');
let amount = 0;

function textTypingEffect(element, text, i = 0) {
    const char = text[i];

    if (char === '\n') {
        element.innerHTML += '<br>';
    } else {
        element.innerHTML += char;
    }

    if (i == text.length - 1) return;

    setTimeout(() => textTypingEffect(element, text, i + 1), 15);
}

const textObserver = new IntersectionObserver((entries) => {
    const entry = entries[0];
    if (entry['isIntersecting'] == true && amount == 0) {
        textTypingEffect(textDiv, text);
        amount++;
    }
});

textObserver.observe(textDiv);
