<?php

namespace App\Models;

use App\Models\Message;

class MessageRepository
{
    /**
     * Create a message.
     *
     * @param Array $data
     */
    public function create($data)
    {
        return Message::create($data);
    }
}
