<?php
namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Debug\Toolbar\Collectors\Database;
use CodeIgniter\Debug\Toolbar\Collectors\Events;
use CodeIgniter\Debug\Toolbar\Collectors\Files;
use CodeIgniter\Debug\Toolbar\Collectors\Logs;
use CodeIgniter\Debug\Toolbar\Collectors\Routes;
use CodeIgniter\Debug\Toolbar\Collectors\Timers;
use CodeIgniter\Debug\Toolbar\Collectors\Views;

class Toolbar extends BaseConfig
{
    public bool $enabled = false;
    public bool $enabledCache = false;
    public string $cachePath = WRITEPATH . 'cache/';
    public array $collectors = [
        Timers::class,
        Database::class,
        Logs::class,
        Views::class,
        Files::class,
        Routes::class,
        Events::class
    ];
    public bool $collectViewData = true;
    public bool $collectVarData = true;
    public int $maxHistory = 20;
    public array $views = [
        'view' => 'CodeIgniter\Debug\Toolbar\Views\toolbar.tpl.php',
        'viewHistory' => 'CodeIgniter\Debug\Toolbar\Views\toolbar_history.tpl.php',
    ];
    public int $maxQueries = 100;
    public array $watchedConnectionGroups = ['default'];
    public bool $includeFiles = true;
    public array $fileBlacklist = [];
    public int $varDataMaxDepth = 3;
    public int $varDataMaxChildren = 128;
    public array $varDataDontShow = [
        '_ci_already_loaded',
        '_ci_cached_vars',
        '_ci_classes',
        '_ci_config',
        '_ci_data',
        '_ci_helpers',
        '_ci_is_php5',
        '_ci_is_instance',
        '_ci_models',
        '_ci_ob_level',
        '_ci_vars',
        '_ci_view_path',
    ];
}