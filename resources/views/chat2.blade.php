




<!-- Chat Conversations -->
<h1>Chat Conversations</h1>

@forelse ($conversations as $conversation)
    <div class="conversation" data-conversation-id="{{ $conversation->id }}">
        <h3>Conversation ID: {{ $conversation->id }}</h3>
        <p>Type: {{ $conversation->is_group ? 'Group Chat' : 'Private Chat' }}</p>

        <h4>Participants:</h4>
        <ul class="participants">
            @foreach ($conversation->participants as $participant)
                <li>{{ $participant->user->name }} ({{ $participant->user->email }})</li>
            @endforeach
        </ul>

        <!-- Form to send a new message -->
        <form class="message-form" data-conversation-id="{{ $conversation->id }}">
            @csrf
            <textarea name="body" placeholder="Type your message..." required></textarea>
            <input type="file" name="attachment">
            <button type="submit">Send</button>
        </form>

        <!-- Messages -->
        <div class="messages">
            @foreach ($conversation->messages as $message)
                <div class="message">
                    <strong>{{ $message->user->name }}:</strong>
                    <p>{{ $message->body }}</p>
                    @if ($message->attachment)
                        <a href="{{ asset('storage/' . $message->attachment) }}" target="_blank">View Attachment</a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@empty
    <p>No conversations found.</p>
@endforelse



<script>
    document.addEventListener("DOMContentLoaded", function () {
        const forms = document.querySelectorAll(".message-form");

        forms.forEach((form) => {
            form.addEventListener("submit", async function (e) {
                e.preventDefault(); // Prevent page reload

                const conversationId = form.getAttribute("data-conversation-id");
                const messagesDiv = form.closest(".conversation").querySelector(".messages");

                const formData = new FormData(form);

                try {
                    // Send the form data to the server
                    const response = await fetch(`/chat/${conversationId}`, {
                        method: "POST",
                        body: formData,
                        headers: {
                            "X-CSRF-TOKEN": form.querySelector("input[name='_token']").value,
                        },
                    });

                    if (response.ok) {
                        const html = await response.text();

                        // Append the returned HTML directly to the messages container
                        messagesDiv.insertAdjacentHTML("beforeend", html);

                        // Clear the form
                        form.reset();
                    } else {
                        alert("Failed to send message. Please try again.");
                    }
                } catch (error) {
                    console.error("Error sending message:", error);
                    alert("An error occurred. Please try again later.");
                }
            });
        });
    });
</script>

>