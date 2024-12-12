<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    // Display all conversations
    public function index()
    {
        // Fetch all conversations for the authenticated user
        $conversations = Conversation::with(['participants.user', 'messages.user'])->get();

        // Pass the conversations to the view
        return view('chat', compact('conversations'));
    }
    public function storeOrFetchConversation(Request $request)
    {
        // Validate the request
        $request->validate(['participant_id' => 'required|exists:users,id']);
        $userId = Auth::id();
        $participantId = $request->participant_id;

        // Check if a conversation already exists
        $conversation = Conversation::where('is_group', 0)
            ->whereHas('participants', function ($query) use ($participantId, $userId) {
                $query->whereIn('user_id', [$userId, $participantId]);
            })
            ->first();

        // If no conversation exists, create a new one
        if (!$conversation) {
            $conversation = Conversation::create([
                'title' => 'New Conversation',
                'is_group' => 0,
            ]);

            $conversation->participants()->createMany([
                ['user_id' => $userId],
                ['user_id' => $participantId],
            ]);
        }

        // Return updated conversation HTML
        return view('partials.conversation', compact('conversation'))->render();
    }
    
    public function store(Request $request, $conversationId)
    {
        // Validate the request data
        $request->validate([
            'body' => 'required|string|max:5000',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,gif,pdf,doc,docx|max:10240', // Example file types
        ]);

        // Ensure the conversation exists
        $conversation = Conversation::findOrFail($conversationId);

        // Create and save the new message
        $message = new Message();
        $message->conversation_id = $conversation->id;
        $message->user_id = Auth::id(); // Authenticated user ID
        $message->body = $request->body;

        // Handle file upload if an attachment is present
        if ($request->hasFile('attachment')) {
            $message->attachment = $request->file('attachment')->store('attachments');
        }

        $message->save();

        // Return an HTML snippet for the new message
        $attachmentHtml = $message->attachment
            ? '<a href="' . asset('storage/' . $message->attachment) . '" target="_blank">View Attachment</a>'
            : '';

        return "
        <div class='message'>
            <strong>" . Auth::user()->name . ":</strong>
            <p>{$message->body}</p>
            {$attachmentHtml}
        </div>
    ";
    }
}
