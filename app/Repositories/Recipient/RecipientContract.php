<?php

namespace App\Repositories\Recipient;

interface RecipientContract
{
    public function create($request);
    public function edit($recipientid, $request);
    public function remove($recipientid);
    public function findById($recipientid);
    public function findAll();
}
