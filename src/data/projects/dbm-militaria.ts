import type { Project } from './types';

export default {
    slug: 'dbm-militaria',
    title: 'DBM Militaria',
    intro: [
        `DBM Militaria is een webshop voor militaire verzamelobjecten die ik vanaf nul in Laravel heb gebouwd,
            inclusief een eigen betaalflow waarin klanten kiezen tussen iDEAL (via Pay.) en een bankoverschrijving.`,
        `Achter de schermen draait een zelfgebouwd CMS voor producten, betalingen en beheer, met error logging
            zodat ik problemen oplos voordat klanten er iets van merken.`,
    ],
    role: 'Full-stack developer',
    year: '2025-2026',
    stack: ['Laravel', 'Tailwind', 'MySQL'],
    links: { github: 'https://github.com/FlorianKoning', live: 'https://dbmmilitaria.nl/' },
    caption: '// de homepage van de webshop',
    idea: [
        `In 2024 kwam een vriend naar me toe met een probleem: zijn hobby was zo groot geworden dat verkopen
            via Marktplaats niet meer te doen was. Hij had een eigen webshop nodig.`,
        `Ik zag dit als een mooie kans om samen met een vriend iets te bouwen. Tegelijk was het meteen een
            groot project, waarin ik met bijna alle kanten van het ontwikkelen en opzetten van een webshop te
            maken kreeg. Bovendien had ik een "echte" product owner en actieve klanten die verwachten dat alles
            makkelijk en duidelijk werkt.`,
    ],
    built: [
        {
            title: 'Opzet',
            text: `De webshop is volledig vanaf nul opgezet in Laravel, zonder Shopify of WooCommerce. Alleen voor
                de betalingen gebruiken we een externe partij: Pay., tegenwoordig ook mijn werkgever. We kozen
                hiervoor zodat we zo veel mogelijk zelf kunnen onderhouden en niet afhankelijk zijn van andere
                partijen. Bovendien was het voor mij een goed leerproces.`,
        },
        {
            title: 'Keuzes',
            text: `Zoals gezegd deden we zo veel mogelijk zelf, en verder hielden we het bewust simpel. Voor de
                database koos ik MySQL, omdat ik daar de meeste ervaring mee had. Daarnaast hebben we een
                staging-omgeving, zodat we nieuwe features kunnen testen met de live database voordat ze online gaan.`,
        },
        {
            title: 'Het lastigste stuk',
            text: `Het lastigste vond ik het CMS, dat ik ook helemaal zelf heb gebouwd. Daar heb ik het meeste
                van geleerd, maar er ging ook de meeste tijd in. Vooral bij versie 2.0, waarin we ons richtten op
                hoe we producten zo efficiënt mogelijk online kunnen zetten.`,
        },
        {
            title: 'Productie en onderhoud',
            text: `De hosting draait op Hostinger en we deployen via Git. Ook dat hielden we simpel: alles wat we
                nodig hebben zit er al in. Die keuze zette ons wel aan het denken toen er een CVE in PHP
                uitkwam: Hostinger deed er zo'n 4 dagen over om PHP 8.3.36 op hun servers te krijgen.`,
        },
    ],
    features: [],
    chapters: [
        {
            folder: 'klant',
            title: 'de klantkant',
            text: [
                `Met versie 2.0 wilden we de webshop vooral klantvriendelijker en moderner maken. De meeste
                    aandacht ging daarbij naar mobiel, omdat daar de grootste winst te halen viel.`,
            ],
        },
        {
            folder: 'cms',
            title: 'het CMS',
            text: [
                `Het CMS moest meer kunnen dan alleen producten beheren: ook verzendkosten, verzendopties,
                    betalingen en het monitoren van errors horen erbij. Voor versie 2.0 was de eis daarnaast dat
                    het CMS ook op mobiel goed werkt, zodat er onderweg snel iets aangepast kan worden als dat nodig is.`,
            ],
        },
    ],
    learned: `Het belangrijkste dat ik hier heb geleerd, is het onderhouden en monitoren van een live platform met
        echte gebruikers. Een thuisproject kun je nog even offline halen om iets aan te passen, maar hier moest
        ik goed nadenken over de impact van elke verandering, en over hoe we iets konden aanpassen zonder dat
        klanten er iets van merkten.`,
} satisfies Project;
