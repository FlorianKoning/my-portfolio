import type { Project } from './types';

export default {
    slug: 'animal-bingo',
    title: 'Dierenbingo',
    intro: [
        `Dit is een leuke: geen hele complexe applicatie, maar wel een bijzondere. Ik heb hem dit jaar gemaakt
        voor het examen van mijn vriendin.`,
    ],
    role: 'Full-stack developer',
    year: '2026',
    stack: ['Laravel', 'React', 'TypeScript', 'PHP'],
    links: { live: 'https://dierenbingo.floriankoning.nl/login' },
    caption: "// het overzicht van alle bingo's",
    idea: [
        `Zoals hierboven uitgelegd, was deze applicatie bedoeld voor het examen van mijn vriendin. Ze moest op haar stage een bingo organiseren voor LVB'ers.
        Het enige wat ze nog miste, was een administratiesysteem om bij te houden welke geluiden al waren afgespeeld, en een manier om een bingo te controleren.`,
    ],
    built: [
        {
            title: 'Opzet',
            text: `De applicatie kon vrij simpel blijven, maar ik vond het een leuke kans om voor het eerst iets te maken met React en PHP.
                    Er is geen aparte API: met Inertia loopt alles gewoon via de controllers.
                    Die geven de data als props door aan de React-componenten, en met TypeScript weet ik precies welke data ik binnenkrijg.`,
        },
        {
            title: 'Keuzes en Afwegingen',
            text: `De grootste afweging die je zult opmerken, is dat je op dit moment geen bingo's of gebruikers kunt beheren.
                    Dat heb ik bewust zo gedaan: er is maar één gebruiker, en die wordt aangemaakt bij het seeden van de database.
                    Daarnaast heb ik bewust geen aparte API gebouwd, zodat het sneller in elkaar gezet kon worden. Het nadeel is dat ik later
                    geen mobiele app of andere frontend kan aansluiten zonder alsnog een API te maken, maar voor dit project was dat niet nodig.`,
        },
    ],
    features: [],
    chapters: [
        {
            folder: 'app',
            title: 'de app',
            text: [
                `Hieronder zie je alle schermen van de applicatie, zowel op desktop als op mobiel.`,
            ],
        },
    ],
    learned: `Ik heb vooral geleerd hoe je een project met Laravel en React opzet met behulp van Inertia. Later zou ik het graag nog uitbreiden
            met een eigen CMS waarin je gebruikers en bingo's kunt beheren, zodat het niet alleen voor dierengeluiden te gebruiken is.`,
} satisfies Project;
