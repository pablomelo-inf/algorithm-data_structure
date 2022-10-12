<?php 

include __DIR__."/Dijkstra.class.php";

$graph = [
    'a' => ['b' => 3, 'c' => 5, 'd' => 9],
    'b' => ['a' => 3, 'c' => 3, 'd' => 4, 'e' => 7],
    'c' => ['a' => 5, 'b' => 4, 'd' => 2, 'e'=> 6, 'f' => 3],
    'd' => ['a' => 9, 'b' => 4, 'c' => 2, 'e' => 2, 'f' => 2],
    'e' => ['b' => 7, 'c' => 6, 'd' => 2, 'f' => 5],
    'f' => ['c' => 3, 'd' => 2, 'e' => 5]
];


$source = 'a';
$target = 'e';

$result = new Dijkstra();
$result = $result->shortest_path($graph, $source, $target);

extract($result);

echo "\nPath to follow: ";

while (!$path->isEmpty()) {
    echo $path->pop(). "\t";
}


