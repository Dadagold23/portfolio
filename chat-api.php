<?php

declare(strict_types=1);

require_once __DIR__ . '/config/app.php';

header('Content-Type: application/json');

// Ensure request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Get the user's message
$input = json_decode(file_get_contents('php://input'), true);
$message = trim((string) ($input['message'] ?? ''));

if ($message === '') {
    http_response_code(400);
    echo json_encode(['error' => 'Empty message']);
    exit;
}

// Check if Gemini API key is configured
$apiKey = $_ENV['GEMINI_API_KEY'] ?? null;

if (empty($apiKey)) {
    // If no API key, let's use the local fallback responses
    $reply = get_local_reply($message, $site);
    echo json_encode(['reply' => $reply]);
    exit;
}

// Prepare context from $site
$roles = implode(', ', $site['roles']);
$servicesList = [];
foreach ($site['services'] as $service) {
    $servicesList[] = "- {$service['title']}: {$service['text']}";
}
$servicesStr = implode("\n", $servicesList);

$projectsList = [];
foreach ($site['projects'] as $project) {
    $projectsList[] = "- {$project['title']} ({$project['tag']}): {$project['text']}";
}
$projectsStr = implode("\n", $projectsList);

$websitesList = [];
foreach ($site['websites'] as $web) {
    $websitesList[] = "- {$web['label']}: {$web['url']}";
}
$websitesStr = implode("\n", $websitesList);

$systemInstructions = <<<EOT
You are an AI assistant and digital guide for Engr. Abdullateef Olalekan Dada's portfolio website. Your goal is to represent him professionally, answer inquiries about his services, projects, background, and guide potential clients on how to collaborate or contact him.

Here are the official details about Engr. Dada:
- Name: {$site['name']}
- Brand Name: {$site['brand']}
- Tagline: {$site['tagline']}
- Years of Experience: {$site['years']}
- Email: {$site['email']}
- Phone: {$site['phone']}
- Location: {$site['location']}
- WhatsApp: {$site['whatsapp']}
- LinkedIn: {$site['linkedin']}
- GitHub: {$site['github']}

Associated websites under the Mirror Age Concepts ecosystem:
{$websitesStr}

Extended Roles:
- {$roles}

Services Offered:
{$servicesStr}

Featured Projects:
{$projectsStr}

Tone Guidelines:
- Professional, confident, senior, helpful, and concise.
- Direct users to the contact form or WhatsApp/Email for bookings and serious inquiries.
- Keep answers under 3 sentences where possible. Keep it snappy and engaging.
- Do not mention that you are a language model or AI created by Google. Act as his personal portfolio guide.
EOT;

// Call the Gemini API
$url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=' . $apiKey;

$data = [
    'contents' => [
        [
            'role' => 'user',
            'parts' => [
                ['text' => $message]
            ]
        ]
    ],
    'systemInstruction' => [
        'parts' => [
            ['text' => $systemInstructions]
        ]
    ],
    'generationConfig' => [
        'maxOutputTokens' => 150,
        'temperature' => 0.7
    ]
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200 || !$response) {
    // If Gemini API fails, fall back to local responses
    $reply = get_local_reply($message, $site);
    echo json_encode(['reply' => $reply]);
    exit;
}

$responseData = json_decode($response, true);
$reply = $responseData['candidates'][0]['content']['parts'][0]['text'] ?? null;

if (empty($reply)) {
    $reply = get_local_reply($message, $site);
}

echo json_encode(['reply' => trim($reply)]);
exit;

// Fallback helper function
function get_local_reply(string $message, array $site): string
{
    $lower = strtolower($message);
    
    if (str_contains($lower, 'hello') || str_contains($lower, 'hi') || str_contains($lower, 'hey')) {
        return "Hello. I am the portfolio assistant for {$site['brand']}. You can ask about services, featured projects, experience, or how to start a collaboration.";
    }
    if (str_contains($lower, 'project') || str_contains($lower, 'portfolio') || str_contains($lower, 'work')) {
        return "Featured work includes retail POS, cloud integration, software architecture, e-learning, health systems, and enterprise automation solutions.";
    }
    if (str_contains($lower, 'service') || str_contains($lower, 'offer') || str_contains($lower, 'help')) {
        return "Core services include software engineering, systems architecture, UI modernization, workflow automation, and technical consulting.";
    }
    if (str_contains($lower, 'contact') || str_contains($lower, 'hire') || str_contains($lower, 'reach')) {
        return "Use the contact page to send a message directly, or connect through email, WhatsApp, LinkedIn, or GitHub from the contact section.";
    }
    if (str_contains($lower, 'experience') || str_contains($lower, 'background')) {
        return "This portfolio highlights {$site['years']} of delivery across enterprise software, product engineering, system design, and modernization work.";
    }
    if (str_contains($lower, 'ui') || str_contains($lower, 'design') || str_contains($lower, 'redesign')) {
        return "The UI direction here focuses on clearer hierarchy, stronger trust signals, smarter interactions, and better conversion flow.";
    }
    
    return "I can help with projects, services, experience, and contact details. Try asking about one of those to explore the portfolio quickly.";
}
