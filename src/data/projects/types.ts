// Een los stukje verhaal met eigen foto's, bijv. "de klantkant" en "het CMS".
// De foto's staan in src/assets/projects/<slug>/gallery/<folder>/
// Staan er foto's in <folder>/mobile/, dan komen die als telefoons in een vak eronder.
export type Chapter = {
    folder: string;
    title: string;
    text: string[];
};

export type Project = {
    // Moet gelijk zijn aan de mapnaam in src/assets/projects/
    slug: string;
    title: string;
    intro: string[];
    role: string;
    year: string;
    stack: string[];
    links: { github?: string; live?: string };
    caption: string;
    // Uitgeklapte deel
    idea: string[];
    // Per onderwerp een kopje met tekst, bijv. { title: 'Opzet', text: '...' }
    built: { title: string; text: string }[];
    features: string[];
    // Optioneel: komen na "hoe ik het aanpakte", elk met een eigen galerij
    chapters?: Chapter[];
    code?: { file: string; note: string; source: string };
    learned: string;
};
