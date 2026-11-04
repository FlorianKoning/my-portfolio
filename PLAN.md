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

---

## Fase 0: kleine fixes ✅

`id="{...}"` → `id={...}` (een `{}`-expressie als attribuut **nooit** tussen quotes), `<!doctype html>` toegevoegd. De ids blijven `home` / `about` / `projects` / `contact`.

## Fase 1: het `Section`-frame ✅

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

De huidige navbar blijft: alles gecentreerd in dezelfde `max-w-6xl` container als de secties, `fixed`, met iconen voor de socials. Alleen de kleuren zijn al omgezet naar de nieuwe tokens. Een actieve link (`text-accent`) volgt in fase 5.

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

- [ ] Sectie 2: Over mij (`Designs/section-two/`)
- [ ] Sectie 3: Projecten (`Designs/section-three/`). Projecten in `src/data/projects.ts`, of als Astro content collection als je per project een eigen pagina wilt.
- [ ] Sectie 4: Contact (`Designs/section-four/`)

Elke sectie volgt het recept.

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
