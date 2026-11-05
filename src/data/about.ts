import { yearsSince } from './site';

// 20 april 2004 (maanden tellen vanaf 0, dus april = 3)
const birthDate = new Date(2004, 3, 20);
const age = yearsSince(birthDate);

export const about = {
    greeting: '// even voorstellen',
    intro: "Bij Pay.nl onderhoud en ontwikkel ik de API's achter hun dashboard. Wat ik zo leuk vind aan back-end: het is nooit gewoon \"de foutmelding is weg, dus klaar\". Je moet echt nadenken of het de juiste fix is, en of hij ook het resultaat geeft dat je nodig hebt.",
    body: 'Je kunt er eindeloos diep in duiken, en gaandeweg ontwikkel je je eigen smaak in hoe je dingen bouwt. Daar ben ik elke dag een beetje mee bezig.',
    origin: {
        label: '// hoe het begon',
        text: 'Toen ik twaalf was, bouwde ik mijn eerste website op een Chromebook, tijdens de pauze op school. Sindsdien ben ik blijven bouwen.',
    },
};

// Feitjes, geen prestaties. Houd tekstwaardes kort (vakjes zijn smal)
export const aboutFacts = [
    { id: 'age', label: 'jaar oud', value: age },
    { id: 'city', label: 'woonplaats', value: 'Delft' },
    // TODO: invullen wat je nu aan het leren bent
    { id: 'learning', label: 'nu aan het leren', value: '...' },
];
