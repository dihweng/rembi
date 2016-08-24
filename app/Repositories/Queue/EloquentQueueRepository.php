<?php

namespace App\Repositories\Queue;

use App\Queue;
use App\Repositories\Queue\QueueContract;

class EloquentQueueRepository implements QueueContract
{
    public function create($request) {
        $queue = new Queue();
        $this->setQueueProperties($queue, $request);
        $queue->save();
        return $queue;
    }
    
    public function edit($queueid, $request) {
        $queue = $this->findById($queueid);
        $this->setQueueProperties($queue, $request);
        $queue->save();
        return $queue;
    }
    
    public function remove($queueid) {
        $queue = $this->findById($queueid);
        return $queue->delete();
    }
    
    public function findById($queueid) {
        return Queue::find($queueid);
    }
    
    public function findAll() {
        return Queue::all();
    }
    
    private function setQueueProperties($queue, $request) {
    }

}
