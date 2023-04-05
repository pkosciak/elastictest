<?php
require_once('vendor/autoload.php');

new ElasticTest\examples\SingleIndex();
new ElasticTest\examples\BulkIndex();

var_dump((new ElasticTest\examples\GetIndex())->get());