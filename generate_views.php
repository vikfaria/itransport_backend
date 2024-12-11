<?php

$entities = [
    'bookings',
    'booking_extras',
    'routes',
    'vehicles',
    'vehicle_types',
    'vehicle_attributes',
    'vehicle_companies',
    'locations',
    'pricing_rules',
    'availability_rules',
    'drivers',
    'coupons',
    'geofence',
    'tax_rates',
    'email_accounts',
    'currencies',
];

$templatePath = __DIR__ . '/resources/view_templates';
$viewsPath = __DIR__ . '/resources/views';

if (!is_dir($templatePath)) {
    die("Template directory not found at: $templatePath\n");
}

foreach ($entities as $entity) {
    $entityPath = "{$viewsPath}/{$entity}";
    if (!is_dir($entityPath)) {
        mkdir($entityPath, 0755, true);
    }

    $files = ['index.blade.php', 'create.blade.php', 'edit.blade.php', 'show.blade.php'];
    foreach ($files as $file) {
        $templateFile = "{$templatePath}/{$file}";
        $targetFile = "{$entityPath}/{$file}";

        if (!file_exists($templateFile)) {
            echo "Template file not found: $templateFile\n";
            continue;
        }

        $content = file_get_contents($templateFile);
        if ($content === false) {
            echo "Failed to read template file: $templateFile\n";
            continue;
        }

        $content = str_replace('{{ entity }}', $entity, $content);
        file_put_contents($targetFile, $content);
    }
}


echo "Views generated successfully for all entities!\n";
