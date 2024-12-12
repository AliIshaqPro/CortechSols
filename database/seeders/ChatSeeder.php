<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Conversation;
use App\Models\Participant;
use App\Models\Message;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create 10 users
        User::factory(10)->create();

        // Create a conversation
        $conversation = Conversation::create(['is_group' => false]);

        // Add participants to the conversation
        Participant::create(['conversation_id' => $conversation->id, 'user_id' => 1]);
        Participant::create(['conversation_id' => $conversation->id, 'user_id' => 2]);

        // Add messages to the conversation
        Message::create(['conversation_id' => $conversation->id, 'user_id' => 1, 'body' => 'Hello!']);
        Message::create(['conversation_id' => $conversation->id, 'user_id' => 2, 'body' => 'Hi there!']);
    }
}
