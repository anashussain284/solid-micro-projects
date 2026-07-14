<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\UserProfile;
use App\Services\UserProfileExporter;
use App\Storages\ConsoleStorage;
use App\Storages\FileStorage;
use App\Exporters\JsonExporter;
use App\Filters\AllFieldsFilter;
use App\Filters\PublicProfileFilter;
use App\Filters\ContactOnlyFilter;
use App\Exporters\CsvExporter;
use App\Exporters\XmlExporter;

$profile1 = new UserProfile(
	name: 'Anas',
	email: 'anas@mail.com',
	phone: '9998887776'
);

$consoleStorage = new ConsoleStorage();
$fileStorage = new FileStorage();
$jsonExporter = new JsonExporter();
$allFieldsFilter = new AllFieldsFilter();
$publicProfileFilter = new PublicProfileFilter();
$contactOnlyFilter = new ContactOnlyFilter();
$csvExporter = new CsvExporter();
$xmlExporter = new XmlExporter();

$exporterService = new UserProfileExporter(
	storage: $fileStorage,
	exporter: $jsonExporter,
	filter: $allFieldsFilter
);

$exporterService->export($profile1);