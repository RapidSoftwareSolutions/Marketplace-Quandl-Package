<?php
$routes = [
    'metadata',
    'getTimeSeriesData',
    'getFilteredTimeSeriesData',
    'getTimeSeriesMetaData',
    'getTimeSeriesAllData',
    'filterRows',
    'filterColumns',
    'filterRowsAndColumns',
    'getTableMetadata',
    'downloadEntrieTable',
    'getEntrieTable'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

