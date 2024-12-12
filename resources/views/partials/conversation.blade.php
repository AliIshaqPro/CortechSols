<!-- partials/conversation.blade.php -->
<div class="conversation">
    <h3>{{ $conversation->title }}</h3>
    <ul>
        @foreach ($conversation->messages as $message)
            <li>
                <strong>{{ $message->user->name }}:</strong> {{ $message->body }}
            </li>
        @endforeach
    </ul>
</div>
