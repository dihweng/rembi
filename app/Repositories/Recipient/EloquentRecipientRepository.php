<?php

namespace App\Repositories\Recipient;

use App\Repositories\Recipient\RecipientContract;
use App\Recipient;

class EloquentRecipientRepository implements RecipientContract
{
    public function create($request) {
        $recipient = new Recipient();
        $recipient->save();
        return $recipient;
    }
    
    public function edit($recipientid,$request){
        $recipient = $this->findById($recipientid);
        $recipient->save();
        return $recipient;
    }
    
    public function remove($recipientid) {
        $recipient = $this->findById($recipientid);
        return $recipient->delete();
    }
    
    public function findById($recipientid){
        return Recipient::find($recipientid);
    }
    
    public function findAll(){
        return Recipient::all();
    }
    
    private function setRecipientProperties($recipient, $request) {
        
    }
}
