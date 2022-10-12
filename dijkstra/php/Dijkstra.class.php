<?php 

class Dijkstra{
    
    function __construct(){
        $this->distance = [];
        $this->predecessors = [];
        $this->queue_priority = new SplPriorityQueue();     
        $this->path =  new SplStack();        
    }

    private function init(){
        foreach ($this->graph as $vertice => $adj) {
            $this->distance[$vertice] = PHP_INT_MAX;
            $this->predecessors[$vertice] = null;
            $this->queue_priority->insert($vertice, min($adj));    
        }        
    }

    public function shortest_path($graph, $source, $target): array{
        $this->graph = $graph;  
        $this->init();

        $this->distance[$source] = 0;

        $this->find_minimum_path();

        $this->store_path($target);

        if ($this->path->isEmpty()) {
            return ["distance" => 0, 'path' => $this->path];

        }else {
            $this->path->push($source);    
            return ['distance' => $this->distance,  'path'=> $this->path];

        }

    }

    private function find_minimum_path(){

        while (!$this->queue_priority->isEmpty()){
            $u = $this->queue_priority->extract(); 

            if (!empty($this->graph[$u])) {
                foreach ($this->graph[$u] as $vertice => $cost) {
                    if ($this->distance[$u] + $cost < $this->distance[$vertice]) {
                        $this->distance[$vertice] = $this->distance[$u] + $cost;
                        $this->predecessors[$vertice] = $u;
                    }
                }    
            }
        }
    }

    private function store_path($target){        
        $u = $target;
        $distance = 0;
    
        while (isset($this->predecessors[$u]) && $this->predecessors[$u]) {
            $this->path->push($u);
            $distance += $this->graph[$u][$this->predecessors[$u]];
            $u = $this->predecessors[$u];
        } 
    }
}

