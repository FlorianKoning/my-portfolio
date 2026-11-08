# Plan: portfolio opnieuw opzetten in Astro

Doel: de one-page portfolio van `main` (Laravel/Blade) opnieuw bouwen in Astro + Tailwind v4, met een structuur waarin elke "banner" (sectie) op dezelfde manier is opgezet. **Elke sectie krijgt een eigen nieuw design** (in `Designs/section-*/`). Daarom staat hieronder een vast recept dat je per sectie herhaalt.

---

## De kernregel

> **Het frame (`Section.astro`) bepaalt wat een banner is. De sectie-componenten bepalen alleen wat erin staat.**

| Bakje | Map | Verantwoordelijk voor |
|---|---|---|
| Layout | `src/layout/` | `<html>`, `<head>`, fonts, CSS, navbar: alles wat op elke pagina hetzelfde is |
| Frame | `src/components/layout/Section.astro` | id, hoogte, achtergrond, ruimte voor de navbar, breedte van de container |
| Secties | `src/components/sections/` | alleen de inhoud van één sectie |
| UI | `src/components/ui/` | kleine herbruikbare stukjes (chip, kaart, knop) |
| Data | `src/data/` | teksten, links, projecten: alles wat geen opmaak is |
| Tokens | `src/styles/global.css` (`@theme`) | kleuren, fonts, animaties, achtergrondpatronen |
| Pagina | `src/pages/index.astro` | alleen de volgorde van de secties |
| Projectpagina | `src/pages/projecten/[slug].astro` | één pagina per project, gemaakt uit `src/data/projects/` (zie fase 4b) |
| Project-onderdelen | `src/components/project/` | de kaart op de homepage en het artikel op de projectpagina |

Bij elk nieuw stukje code vraag je je af: in welk bakje hoort dit?

---

## Waar we nu staan (5 nov)

- [x] `src/data/site.ts` met `navItems` en `socials`
- [x] `Navbar.astro` (eigen gecentreerde layout behouden, alleen nieuwe kleuren)
- [x] `BaseLayout.astro`
- [x] `--spacing-nav` (geeft `h-nav`, `pt-nav`)
- [x] Kleuren in `global.css` bijgewerkt naar het nieuwe design (`ink-*`, `accent`, `text-*`, `online`)
- [x] Fase 0 en fase 1: fixes gedaan, `Section.astro` staat, `index.astro` heeft 4 placeholder-secties
- [x] Fase 2: navbar blijft zoals hij is

**Update 9 nov:** fase 3 (intro), Over mij en de projectensectie staan, inclusief een mobiele versie van de projecten. Er staat te veel op één pagina, dus de projecten verhuizen naar eigen pagina's. Volgende stap: **fase 4b**.

---

## Fase 0: kleine fixes ✅

`id="{...}"` → `id={...}` (een `{}`-expressie als attribuut **nooit** tussen quotes), `<!doctype html>` toegevoegd. De ids blijven `home` / `about` / `projects` / `contact`.

## Fase 1: het `Section`-frame ✅

> Update: de `variant`-prop bestaat nu (`base` = ink-700 | `alt` = ink-650 | `glow` = hero met gloed). Secties wisselen af en worden gescheiden door een stippellijn (`not-first:border-t border-dashed`). Zachte gradient-overgangen tussen secties zijn geprobeerd, maar gaven banding (zichtbare lijntjes). De git-lijn als achtergrond is geprobeerd en afgekeurd omdat hij te druk was.

`src/components/layout/Section.astro` heeft voorlopig alleen een `id`-prop. De achtergrond (`bg-ink-700`) staat vast in de class. De stippen uit het design laten we bewust weg.

**Zodra een design een andere achtergrond vraagt**, voeg je een `variant`-prop toe met een object met volledig uitgeschreven class-namen (Tailwind ziet geen in elkaar geplakte strings):
```ts
const backgrounds = {
  plain: 'bg-ink-700',
  raised: 'bg-ink-800',
};
```
Gebruik dan `class:list`. Het frame zelf (hoogte, padding, container) verandert niet.

## Fase 2: navbar ✅ (bewust niet naar het nieuwe design)

De huidige navbar blijft: alles gecentreerd in een `max-w-6xl` container, `fixed`. De secties zelf gaan wel over de volle breedte (`max-w-[3440px]`, `lg:px-[8vw]`), met iconen voor de socials. Alleen de kleuren zijn al omgezet naar de nieuwe tokens. Een actieve link (`text-accent`) volgt in fase 5.

## Fase 3: de hero (sectie 1), volgens het recept hieronder

Wat er uit `Designs/section-one/home.html` komt:

| Onderdeel | Waar het heen gaat |
|---|---|
| Profielgegevens (naam, rol, e-mail, locatie, website, skills, "Nu bij Pay.nl") | `src/data/site.ts` → `profile` |
| Getallen (3 talen, 5 tools, 2 jaar) | `src/data/site.ts` → `stats` |
| Gele chips (PHP, Laravel…) | `ui/Tag.astro` |
| Profielkaart links | `ui/ProfileCard.astro` |
| Getallenkaart rechts | `ui/StatsCard.astro` |
| `// scroll ↓` hint | `ui/ScrollHint.astro` (krijgt een `href` mee, zodat je hem ook in andere secties kunt gebruiken) |
| Intro met `<h1>` en de knipperende `_` | rechtstreeks in `sections/Hero.astro` |
| Animaties `blink` en `nudge` | `global.css` → `@theme` |
| Foto | `src/assets/` + Astro's `<Image />` (wordt automatisch geoptimaliseerd) |

Leerpunten in deze fase: props doorgeven aan ui-componenten, data `.map()`en, `<Image />`, keyframes in Tailwind v4.

**Mobile-first:** het design is alleen voor pc. De drie kolommen worden op mobiel onder elkaar gezet (`flex-col` → `lg:flex-row`). De volgorde zet je met `order-*` (bijvoorbeeld de intro bovenaan op mobiel). **Niet** de kaart dupliceren zoals in het oude project.

## Fase 4: de overige secties (zodra hun designs er zijn)

- [x] Sectie 2: Over mij (`sections/About.astro`, data in `src/data/about.ts`). Gedeelde ui: `CodeLabel`, `SectionHeading`, `Tile`. `Section` heeft nu ook `width` (`content` = max-w-7xl, standaard | `full`)
- [x] Sectie 3: Projecten (`sections/Projects.astro`, data in `src/data/projects/`, één bestand per project). Wordt in fase 4b opgesplitst.
- [ ] Sectie 4: Contact (`Designs/section-four/`)

Elke sectie volgt het recept.

## Fase 4b: elk project een eigen pagina

**Waarom:** de projectensectie verstopt nu te veel, in vier lagen: één project tegelijk, "lees verder", een uitklaplijst en verborgen screenshots op mobiel. Alleen DBM heeft al 11 screenshots. Op de homepage wil een bezoeker in een halve minuut zien wat je gedaan hebt. Het hele verhaal hoort op een eigen pagina. Het mobiele design (`dbm-militaria.html`) is ook al als losse pagina opgezet: met "← cd ../projecten", een teller "01 / 03" en links naar de andere projecten.

**Eindresultaat:**
- Homepage, sectie `#projects`: alle projecten tegelijk als compacte kaarten, met foto, rol · jaar, titel, één alinea, stack-chips en "lees de case study →".
- `/projecten/dbm-militaria`, `/projecten/password-manager` en `/projecten/portfolio`: het volledige verhaal, gewoon uitgeklapt.

**Leerpunten:** dynamische routes (`[slug].astro`), `getStaticPaths()`, `Astro.props` op een pagina, linken tussen pagina's, en waarom een gewone `<a>` vaak beter is dan JavaScript.

### Stap 1: de route aanmaken

Maak `src/pages/projecten/[slug].astro`. De blokhaken betekenen: dit bestand maakt meerdere pagina's. Astro vraagt via `getStaticPaths()` welke dat zijn:

```astro
---
import { projects } from "../../data/projects";
import BaseLayout from "../../layout/BaseLayout.astro";

export function getStaticPaths() {
    return projects.map((project, index) => ({
        params: { slug: project.slug },   // → /projecten/dbm-militaria
        props: { project, index },        // → komt binnen als Astro.props
    }));
}

const { project, index } = Astro.props;
---

<BaseLayout title={`${project.title} | Florian Koning`} description={project.intro[0]}>
    <h1>{project.title}</h1>
</BaseLayout>
```

Check: `astro dev`, ga naar `/projecten/dbm-militaria` en zie de titel. Bij `astro build` verschijnen er drie mappen in `dist/projecten/`.

> Een content collection is niet nodig: de data staat al netjes in TypeScript. Die stap is pas zinvol als je de verhalen liever in Markdown schrijft.

### Stap 2: het artikel naar een eigen component

- [ ] Verplaats alles binnen `<article>` uit `Projects.astro` naar `src/components/project/ProjectArticle.astro`, met als props `project` en `index`.
- [ ] Het `items.map(...)` uit het frontmatter (de afbeeldingen, het tellertje en de hint) gaat mee.
- [ ] Gebruik het in `[slug].astro`, binnen een container met dezelfde breedte als `Section` (`max-w-7xl`, `px-6 lg:px-8`, `pt-nav`).
- [ ] Zet `<Lightbox />` op de projectpagina, anders werkt het inzoomen niet.
- [ ] Het projecttitel-element wordt een `<h1>`, want het is nu de hoofdtitel van de pagina. De kopjes eronder schuiven op: `h4` wordt `h2`.

### Stap 3: het verhaal vereenvoudigen

Nu het een eigen pagina is, mag alles zichtbaar zijn:
- [ ] Weg: de "lees verder"-knop, de vervaagde tekst (`max-h-30` en `mask-*`), `data-story hidden` en de "inklappen"-knop.
- [ ] Weg: het hele `<script>` voor uitklappen en wisselen tussen projecten.
- [ ] De uitklaplijst bij "hoe ik het aanpakte" mag blijven. Het is nog maar één laag.
- [ ] `Gallery.astro`: haal `max-md:hidden` weg, zodat alle screenshots ook op mobiel te zien zijn.
- [ ] Vorige/volgende worden gewone links: `<a href={`/projecten/${prev.slug}`} rel="prev">`. Dan werken terugknoppen, nieuwe tabbladen en delen vanzelf.
- [ ] Uit het mobiele design: de sticky balk met "← cd ../projecten" en de teller (`md:hidden`), en op desktop de terug-link boven de titel (`hidden md:inline-flex`). Die links gaan naar `/#projects`.

### Stap 4: de homepage-kaarten

- [ ] Maak eerst een design voor de kaart (in `Designs/section-three/`), net als bij de andere secties. Of laat Claude er een voorstellen.
- [ ] `src/components/project/ProjectCard.astro`: de hele kaart is één `<a href={`/projecten/${slug}`}>`.
- [ ] `Projects.astro` wordt een grid: `grid gap-6 md:grid-cols-2 xl:grid-cols-3`, met per project een kaart.
- [ ] Optioneel: een `summary`-veld in `types.ts` voor één korte zin op de kaart. Tot die tijd volstaat `intro[0]`.

### Stap 5: links die nu stuk gaan

Op `/projecten/...` bestaat `#about` niet, dus alle links die alleen een `#` hebben, moeten de homepage erbij krijgen:
- [ ] `Navbar.astro`: `href={`#${item.id}`}` → `href={`/#${item.id}`}`, en het logo `#home` → `/#home`
- [ ] `Intro.astro` (`#projects`, `#contact`) en `ScrollHint` werken alleen op de homepage, dus die mogen blijven.

### Stap 6: checken en committen

- [ ] Homepage op mobiel en desktop: zie je alle projecten in één oogopslag?
- [ ] Elke projectpagina: alles zichtbaar, inzoomen werkt, vorige/volgende werkt, de terugknop van de browser werkt.
- [ ] Navbar vanaf een projectpagina: kom je goed uit op de homepage?
- [ ] `astro build` zonder fouten, en `dist/projecten/` bevat drie pagina's
- [ ] Commit

**Later, optioneel:** Astro's `<ClientRouter />` (View Transitions) in `BaseLayout` voor een vloeiende overgang tussen de homepage en een projectpagina. Let dan wel op: scripts draaien niet opnieuw na een paginawissel, tenzij je ze aan `astro:page-load` hangt.

## Fase 5: interactie (pas als alles staat)

Hier leer je Astro's `<script>` (wordt automatisch gebundeld, geen jQuery nodig):
- [ ] Hamburgermenu voor mobiel
- [ ] Actieve navbar-link op basis van de sectie in beeld (`IntersectionObserver`)
- [ ] Scroll-reveal via een `data-reveal` attribuut (vervangt `textSection scrollHidden`)
- [ ] Typewriter- en teller-animaties, alleen als een design daarom vraagt

## Fase 6: afronden

- [ ] `404.astro` (hergebruikt `BaseLayout`)
- [ ] Meta/SEO: `description`, Open Graph-afbeelding, favicon
- [ ] `--breakpoint-phone` weghalen als hij niet meer gebruikt wordt
- [ ] `astro build`, de build testen, deployen

---

## Het recept: één nieuw sectiedesign verwerken

Herhaal dit voor elke `Designs/section-*/`:

1. **Lezen.** Open het design in de browser, op desktop en op een smal scherm.
2. **Tokens eruit halen.** Zijn er nieuwe kleuren, animaties of patronen in de `tailwind.config` van het design? Zet ze in `@theme` in `global.css` (zie de tabel hieronder). Bestaat een kleur al onder een andere naam? Hergebruik die dan.
3. **Opknippen.** Markeer per blok:
   - is het **content**? → `src/data/`
   - komt het **meerdere keren** voor, of misschien in een andere sectie? → `src/components/ui/`
   - de rest → het sectie-component zelf
4. **Frame kiezen.** Past de achtergrond bij een bestaande `variant`? Zo niet, voeg er één toe aan `Section.astro`. Haal **geen** hoogte, padding of achtergrond naar binnen in het sectie-component.
5. **Bouwen, mobile-first.** Eerst de classes zonder prefix (mobiel), dan `lg:` voor het pc-design. Liever `w-full max-w-*` dan vaste breedtes.
6. **Inpluggen.** In `index.astro`: `<Section id="..." variant="..."><MijnSectie /></Section>`. Is het een nieuwe sectie? Voeg hem dan toe aan `navItems`.
7. **Checken.** Vergelijk met het design op pc. Maak het scherm smal: is het netjes onder elkaar en leesbaar? Werkt de navbar-link?
8. **Committen.**

### Van design (Tailwind v3 CDN) naar ons project (Tailwind v4)

De designs gebruiken een `tailwind.config` in een `<script>` (v3). Wij gebruiken `@theme` in CSS (v4). De vertaling:

| Design (`tailwind.config`) | `global.css` (`@theme`) | Class |
|---|---|---|
| `colors.ink[700]` | `--color-ink-700: #2F3035;` | `bg-ink-700` |
| `colors.text.DEFAULT` | `--color-text: #E8E6E1;` | `text-text` |
| `colors.text.soft` | `--color-text-soft: #D4D3CF;` | `text-text-soft` |
| `fontFamily.mono` | `--font-mono: ...;` | `font-mono` |
| `animation.blink` + `keyframes.blink` | `--animate-blink: blink 1.1s steps(1) infinite;` plus een `@keyframes blink { … }` **binnen** `@theme` | `animate-blink` |
| `backgroundImage.dots` + `backgroundSize.dots` | een eigen utility: `@utility bg-dots { background-image: …; background-size: 28px 28px; }` | `bg-dots` |

Let ook op: de designs laden fonts via Google Fonts en Tailwind via een CDN. Dat nemen we **niet** over, want dat regelen de imports in `BaseLayout.astro`.
