import type { ImageMetadata } from 'astro';
import dbmMilitaria from './dbm-militaria';
import passwordManager from './password-manager';
import portfolio from './portfolio';
import type { Project } from './types';

export type { Chapter, Project } from './types';

// Foto's staan per project in src/assets/projects/<slug>/:
//   main.png              → de hoofdfoto (altijd zichtbaar)
//   gallery/*.png         → losse foto's die pas na het uitklappen verschijnen
//   gallery/<map>/*.png   → foto's bij een hoofdstuk (zie `chapters` in types.ts)
// Gewoon een bestand in de map zetten is genoeg; de code hieronder vindt ze zelf.
// De volgorde is alfabetisch, dus noem ze bijv. 01-dashboard.png, 02-...

// De volgorde hier is de volgorde op de site
export const projects: Project[] = [dbmMilitaria, passwordManager, portfolio];

// Vite zoekt bij het bouwen alle afbeeldingen op die bij het patroon passen.
// Resultaat: { '../../assets/projects/portfolio/main.png': { default: ImageMetadata }, ... }
type ImageModules = Record<string, { default: ImageMetadata }>;

const mainImages: ImageModules = import.meta.glob(
    '../../assets/projects/*/main.{png,jpg,jpeg,webp,avif}',
    { eager: true },
);
const galleryImages: ImageModules = import.meta.glob(
    '../../assets/projects/*/gallery/*.{png,jpg,jpeg,webp,avif}',
    { eager: true },
);
const chapterImages: ImageModules = import.meta.glob(
    '../../assets/projects/*/gallery/*/*.{png,jpg,jpeg,webp,avif}',
    { eager: true },
);
const mobileImages: ImageModules = import.meta.glob(
    '../../assets/projects/*/gallery/*/mobile/*.{png,jpg,jpeg,webp,avif}',
    { eager: true },
);

// Alle foto's waarvan het pad in `folder` ligt, alfabetisch gesorteerd
function imagesIn(images: ImageModules, folder: string) {
    return Object.entries(images)
        .filter(([path]) => path.includes(folder))
        .sort(([a], [b]) => a.localeCompare(b))
        .map(([, image]) => image.default);
}

export function projectImages(project: Project) {
    const folder = `/projects/${project.slug}/`;

    const [main] = imagesIn(mainImages, folder);
    if (!main) {
        throw new Error(`Geen main-foto gevonden in src/assets/projects/${project.slug}/`);
    }

    const gallery = imagesIn(galleryImages, folder);

    // Elk hoofdstuk krijgt de foto's uit zijn eigen submap erbij
    // (en de telefoon-screenshots uit <submap>/mobile/, als die er zijn)
    const chapters = (project.chapters ?? []).map((chapter) => {
        const chapterFolder = `${folder}gallery/${chapter.folder}/`;
        return {
            ...chapter,
            images: imagesIn(chapterImages, chapterFolder),
            mobileImages: imagesIn(mobileImages, `${chapterFolder}mobile/`),
        };
    });

    return { main, gallery, chapters };
}
