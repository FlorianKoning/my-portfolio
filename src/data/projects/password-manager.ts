import type { Project } from './types';

export default {
    slug: 'password-manager',
    title: 'Password Manager 3000',
    intro: [`Dit was de eerste "SaaS"-applicatie die ik heb gemaakt. "SaaS" staat tussen aanhalingstekens, want hij is nooit online gegaan en draaide alleen lokaal bij mij.
            Verder was het een standaard password manager waarin je wachtwoorden, inloggegevens en notities kon opslaan.`],
    role: 'Full-stack developer',
    year: '2024',
    stack: ['Laravel', 'Tailwind', 'JavaScript'],
    links: { github: 'https://github.com/FlorianKoning' },
    caption: '// Het dashboardscherm',
    idea: [`Het idee was eigenlijk vrij simpel: ik had tijdens mijn stage een password manager nodig, dus bouwde ik er zelf een. Zo begon het,
            en meteen had ik een leerproject om aan te werken als ik op mijn stage even niks te doen had.`],
    built: [
        {
            title: 'Master Password',
            text: `In de applicatie log je natuurlijk in met een master password. Dit was ook de eerste keer dat ik van een master password hoorde.
                De implementatie was daardoor niet de beste, maar hij werkte, en het master password stond in elk geval niet in dezelfde database als de wachtwoorden haha.`
        },
        {
            title: 'Password Hashing',
            text: `Dit was ook de eerste keer dat ik echt met password hashing te maken had. Met Laravel gaat dat natuurlijk vrij makkelijk, maar ik heb er alsnog veel van geleerd:
                hoe je ermee omgaat en wat de standaarden zijn voor het valideren van een gehasht wachtwoord.`
        },
        {
            title: 'Authentication Flow',
            text: `Ik merk dat ik mezelf een beetje begin te herhalen, maar ja: dit was ook de eerste keer dat ik zelf een authentication flow moest bouwen en aanpassen.
                Ik had eerder al kleine applicaties gemaakt met Laravel Breeze voor de authenticatie, maar dat ondersteunde niet standaard een master-password-flow (of dat is me nooit opgevallen xD).
                Daarom ben ik me ook flink gaan verdiepen in authentication flows en OAuth.`
        }
    ],
    features: [],
    learned: 'Ik heb het meeste geleerd over het veilig opslaan van wachtwoorden en over OAuth. Het is zeker een project dat ik nog een keer zou willen doen, want er zijn veel dingen die ik zou verbeteren.',
} satisfies Project;
