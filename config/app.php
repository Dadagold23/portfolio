<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

require_once __DIR__ . '/database.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$site = [
    'name' => 'Engr. Abdullateef Olalekan Dada',
    'brand' => 'Engr. Dada',
    'tagline' => 'Project Manager, Tech Programmer, Software Engineer, Systems Architect, HRM Specialist, and QA/QC Professional',
    'years' => '16+',
    'email' => 'info@mirrorageconcepts.com',
    'phone' => '+234 703 562 7734',
    'whatsapp' => 'https://wa.me/2347035627734',
    'linkedin' => 'https://www.linkedin.com/in/mirrorageconcepts',
    'github' => 'https://github.com/mirrorageconcepts',
    'websites' => [
        ['label' => 'Mirror Age Concepts', 'url' => 'https://www.mirrorageconcepts.com'],
        ['label' => 'LMS Platform', 'url' => 'https://www.lms.mirrorageconcepts.com'],
        ['label' => 'Kiosk Platform', 'url' => 'https://www.kiosk.mirrorageconcepts.com'],
        ['label' => 'WeDate Platform', 'url' => 'https://www.wedate.mirrorageconcepts.com'],
        ['label' => 'WeMeet Platform', 'url' => 'https://www.wemeet.mirrorageconcepts.com'],
    ],
    'roles' => [
        'Project Manager',
        'Human Resources Management',
        'Quality Control & Quality Assurance',
    ],
    'resume_doc' => 'assets/docs/resume_dada.doc',
    'resume_pdf' => 'assets/docs/resume_dada.pdf',
    'location' => 'Kwara, Nigeria',
    'stats' => [
        ['value' => '16+', 'label' => 'Years of delivery'],
        ['value' => '25+', 'label' => 'Cross-domain solutions'],
        ['value' => '99%', 'label' => 'Client-focused execution'],
    ],
    'services' => [
        [
            'icon' => 'bi-code-slash',
            'title' => 'Software Engineering',
            'text' => 'Scalable custom platforms, internal tools, APIs, and maintainable product architecture.',
        ],
        [
            'icon' => 'bi-diagram-3',
            'title' => 'Systems Architecture',
            'text' => 'Cloud-ready, resilient architecture for business-critical platforms and integrations.',
        ],
        [
            'icon' => 'bi-brush',
            'title' => 'UI Revamp & Frontend Polish',
            'text' => 'Modern Bootstrap interfaces with refined CSS motion, AOS animation, and better conversion flow.',
        ],
        [
            'icon' => 'bi-hdd-network',
            'title' => 'Data & Infrastructure',
            'text' => 'Database design, analytics pipelines, process automation, and operational visibility.',
        ],
        [
            'icon' => 'bi-kanban',
            'title' => 'Project Management',
            'text' => 'Structured delivery oversight, milestone coordination, stakeholder communication, and execution planning.',
        ],
        [
            'icon' => 'bi-people',
            'title' => 'Human Resources Management',
            'text' => 'People coordination, team support, organizational process alignment, and workforce-focused operations.',
        ],
        [
            'icon' => 'bi-patch-check',
            'title' => 'Quality Control & Quality Assurance',
            'text' => 'Quality standards, verification discipline, process checks, and dependable delivery assurance.',
        ],
    ],
    'projects' => [
        [
            'image' => 'assets/img/pos.png',
            'tag' => 'Retail Platform',
            'title' => 'RetailEase POS System',
            'text' => 'Cross-platform retail software built for speed, uptime, reporting, and multi-role operations.',
        ],
        [
            'image' => 'assets/img/web-application.webp',
            'tag' => 'Cloud Integration',
            'title' => 'DataTouch Cloud Integration',
            'text' => 'Enterprise-grade data connectivity layer for synchronization, reporting, and process continuity.',
        ],
        [
            'image' => 'assets/img/edu_teens.jpg',
            'tag' => 'Education Technology',
            'title' => 'EduSmart Learning Suite',
            'text' => 'A learning environment with classroom workflows, student engagement, and analytics support.',
        ],
        [
            'image' => 'assets/img/dbmsbb.jpeg',
            'tag' => 'Health Systems',
            'title' => 'HealthTrack Management',
            'text' => 'Secure health data workflows focused on interoperability, traceability, and operational efficiency.',
        ],
        [
            'image' => 'assets/img/Software-Development.jpg',
            'tag' => 'Enterprise Build',
            'title' => 'Custom Business Automation',
            'text' => 'Bespoke automation tools that reduce bottlenecks and create measurable team productivity gains.',
        ],
        [
            'image' => 'assets/img/Software-Architecture.png',
            'tag' => 'Architecture Advisory',
            'title' => 'Transformation Blueprinting',
            'text' => 'Technical roadmaps for modernization, re-platforming, and sustainable long-term growth.',
        ],
    ],
];

function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function old(string $key, string $fallback = ''): string
{
    return isset($_POST[$key]) ? trim((string) $_POST[$key]) : $fallback;
}

function set_flash(string $type, string $message): void
{
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

function get_flash(): ?array
{
    if (!isset($_SESSION['flash'])) {
        return null;
    }

    $flash = $_SESSION['flash'];
    unset($_SESSION['flash']);

    return $flash;
}

function current_year(): string
{
    return date('Y');
}
