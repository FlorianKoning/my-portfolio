export const codingStartDate = new Date(2018, 8, 1);
export const experienceStartYear = new Date(2024, 8, 1);

// TODO: placeholder, vervangen door het nieuwe e-mailadres
const email = 'florian.koning2004@gmail.com';

export const navItems = [
    { id: 'home', label: 'Home' },
    { id: 'about', label: 'Over Mij' },
    { id: 'projects', label: 'Mijn Projecten' },
];

export const socials = [
    { label: 'LinkedIn', href: 'https://www.linkedin.com/in/florian-koning-042181297/', icon: 'fa-brands fa-linkedin' },
    { label: 'GitHub', href: 'https://github.com/FlorianKoning', icon: 'fa-brands fa-github' },
    { label: 'E-mail', href: email, icon: 'fa-solid fa-envelope' },
];

export const profile = {
    name: 'Florian',
    role: 'Junior',
    company: 'Pay.',
    location: 'Nederland – Delft',
    skills: ['PHP', 'Laravel', 'Symfony', 'GIT', 'HTML', 'CSS'],
};

export const stats = [
    { id: 'experience', label: 'Jaar Werk Ervaring', amount: yearsSince(experienceStartYear) },
    { id: 'closedProjects', label: 'Afgeronden Projecten', amount: 3 },
    { id: 'programmingYears', label: 'Jaar Programmeren', amount: yearsSince(codingStartDate) }
];

// Calculates the years since the given date
export function yearsSince(date: Date): number {
    const now = new Date();
    let years = now.getFullYear() - date.getFullYear();

    const hadAnniversary =
        now.getMonth() > date.getMonth() ||
        (now.getMonth() === date.getMonth() && now.getDate() >= date.getDate());

    if (!hadAnniversary) years--;

    return years;
}
