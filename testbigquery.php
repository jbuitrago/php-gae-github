<?php


require 'vendor/autoload.php';

use Google\Cloud\BigQuery\BigQueryClient;

$bigQuery = new BigQueryClient([
    'projectId' => 'central-octane-114911'
]);



$queryResults = $bigQuery->runQuery('SELECT  *  FROM [bigquery-public-data:samples.shakespeare] LIMIT 100');

if ($queryResults->isComplete()) {
    $i = 0;
    $rows = $queryResults->rows();
    foreach ($rows as $row) {
        printf('--- Row %s ---' . PHP_EOL, ++$i);
        foreach ($row as $column => $value) {
            printf('%s: %s' . PHP_EOL, $column, $value);
        }
        print "<br>";
    }
    printf('Found %s row(s)' . PHP_EOL, $i);
} else {
    throw new Exception('The query failed to complete');
}
//foreach ($queryResults->rows() as $row) {
 //   print_r($row);
 //   print "<BR>";
//}



//$query = 'SELECT *  FROM [bigquery-public-data:samples.shakespeare] LIMIT 1000';

//$options = ['useLegacySql' => false];
//$queryResults = $bigQuery->runQuery($query);

//print_r($queryResults);


//$queryResults = $bigQuery->runQuery('SELECT commit FROM [bigquery-public-data:github_repos.commits] LIMIT 100');

//print_r($queryResults);

/*
$query = 'SELECT corpus,count(*) FROM publicdata:samples.shakespeare group by corpus limit 5;';
$queryResults = $bigQuery->runQuery($query, [
    'parameters' => ['A commit message.']
]);*/


?>