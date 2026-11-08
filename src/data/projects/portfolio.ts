import type { Project } from './types';

export default {
    slug: 'portfolio',
    title: 'Portfolio',
    intro: ['Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'],
    role: 'Full-stack developer',
    year: '2026',
    stack: ['Astro', 'Tailwind'],
    links: { github: 'https://github.com/FlorianKoning', live: 'https://www.floriankoning.nl' },
    caption: '// de vorige versie van deze site',
    idea: ['Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.'],
    built: [{ title: 'Lorem ipsum', text: 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.' }],
    features: ['Lorem ipsum dolor sit amet', 'Consectetur adipiscing elit', 'Sed do eiusmod tempor'],
    learned: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
} satisfies Project;
