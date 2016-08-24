<?php

namespace App\Repositories\Queue;

interface QueueContract
{
    public function create($request);
    public function edit($queueid, $request);
    public function remove($queueid);
    public function findById($queueid);
    public function findAll();
}
