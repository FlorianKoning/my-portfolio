import { yearsSince } from './site';

// 20 april 2004 (maanden tellen vanaf 0, dus april = 3)
const birthDate = new Date(2004, 3, 20);
const age = yearsSince(birthDate);

export const about = {
    greeting: '// even voorstellen',
    intro: "Bij Pay.nl werk ik aan de API's achter hun dashboard. Wat ik zo leuk vind aan back-end is dat je nooit klaar bent zodra de foutmelding weg is, want je moet echt nadenken of je fix wel klopt en of hij ook doet wat je nodig hebt.",
    body: 'Je kunt er eindeloos diep in duiken en gaandeweg je eigen smaak ontwikkelen in hoe je dingen bouwt, en daar ben ik elke dag graag mee bezig.',
    origin: {
        label: '// hoe het begon',
        text: 'Toen ik twaalf was bouwde ik in de pauze op school mijn eerste website op een Chromebook, en sindsdien ben ik eigenlijk nooit meer gestopt.',
    },
};

// Feitjes: getallen worden grote tegels, tekst komt in de lijst eronder
export const aboutFacts = [
    { id: 'dailyDriver', label: 'Daily Driver', text: 'Arch + Hyprland' },
    { id: 'favoStack', label: 'Favorite Stack', text: 'Symfony + ApiPlantform' },
    { id: 'favoGame', label: 'Favorite game', text: 'ELDEN RING' },
];
