<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\UserProfile;
use App\Services\UserProfileExporter;
use App\Storages\ConsoleStorage;
use App\Storages\FileStorage;
use App\Storages\LogStorage;
use App\Exporters\JsonExporter;
use App\Filters\AllFieldsFilter;
use App\Filters\PublicProfileFilter;
use App\Filters\ContactOnlyFilter;
use App\Filters\EmailOnlyFilter;
use App\Exporters\CsvExporter;
use App\Exporters\XmlExporter;
use App\Exporters\YamlExporter;

$profile1 = new UserProfile(
	name: 'Anas',
	email: 'anas@mail.com',
	phone: '9998887776'
);

$consoleStorage = new ConsoleStorage();
$fileStorage = new FileStorage();
$logStorage = new LogStorage();
$jsonExporter = new JsonExporter();
$allFieldsFilter = new AllFieldsFilter();
$publicProfileFilter = new PublicProfileFilter();
$contactOnlyFilter = new ContactOnlyFilter();
$emailOnlyFilter = new EmailOnlyFilter();
$csvExporter = new CsvExporter();
$xmlExporter = new XmlExporter();
$yamlExporter = new YamlExporter();

$exporterService = new UserProfileExporter(
	storage: $logStorage,
	exporter: $jsonExporter,
	filter: $emailOnlyFilter
);

$exporterService->export($profile1);