<!doctype html>
<html lang="en">

<head>
    @include("partials.title-meta", ["title" => "Chat"])

    @include("partials.head-css")
    <style>
        .user-chat {
            width: 100%;
            height: 100vh;
            overflow-y: scroll;
            position: static;
            z-index: 9999;
        }


        .user-chat::-webkit-scrollbar {
            width: 8px;

        }

        .user-chat::-webkit-scrollbar-thumb {
            background-color: #888;

            border-radius: 10px;

        }

        .user-chat::-webkit-scrollbar-thumb:hover {
            background-color: #555;

        }

        .user-chat::-webkit-scrollbar-track {
            background: #f1f1f1;

            border-radius: 10px;
        }

        .chat-leftsidebar {

            height: 100vh;
            overflow-y: scroll;

        }

        .chat-leftsidebar::-webkit-scrollbar {
            width: 8px;

        }

        .chat-leftsidebar::-webkit-scrollbar-thumb {
            background-color: #888;

            border-radius: 10px;

        }

        .chat-leftsidebar::-webkit-scrollbar-thumb:hover {
            background-color: #555;

        }

        .chat-leftsidebar::-webkit-scrollbar-track {
            background: #f1f1f1;

            border-radius: 10px;
        }


        .ctext-wrap p {
            padding: 0 !important;
            /* Remove padding from paragraphs */
            margin: 0 !important;
            /* Remove margin from paragraphs */
        }

        /* Hide the sidebar on mobile and tablet */
        @media (max-width: 991px) {
            .chat-leftsidebar {
                display: none;
            }
        }

        /* Ensure the sidebar is visible on larger screens (e.g., desktops) */
        @media (min-width: 992px) {
            .chat-leftsidebar {
                display: block;
                margin-top: 90px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    @forelse ($conversations as $conversation)

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include("partials.sidebar")
        @include('partials.topbar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content" style="height: 100vh;">

            <div class="page-content">

                <div class="container-fluid">

                    <div class="page-content-wrapper">

                        <div class="d-flex">
                            <div class="chat-leftsidebar me-lg-2">
                                <div class="card">

                                    <div class="p-4">
                                        <div class="search-box chat-search-box pb-4">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <i class="mdi mdi-magnify search-icon"></i>
                                            </div>
                                        </div>

                                        <div class="chat-leftsidebar-nav">
                                            <ul class="nav nav-pills nav-justified">
                                                <li class="nav-item">
                                                    <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                                        <span>Chat</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#group" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                        <span>Group</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#contact" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                        <span>Contacts</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content py-4">
                                                <div class="tab-pane show active" id="chat">
                                                    <div>
                                                        <h5 class="font-size-16 mb-3">Online</h5>
                                                        <ul class="list-unstyled chat-list">

                                                            @foreach ($conversation->participants as $participant)
                                                            <li>
                                                                <a href="javascript:void(0);" class="participant-link" data-participant-id="{{ $participant->user->id }}">
                                                                    <div class="media">
                                                                        <div class="align-self-center me-3">
                                                                            <i class="mdi mdi-circle text-success font-size-10"></i>
                                                                        </div>
                                                                        <div class="align-self-center me-3">
                                                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">
                                                                        </div>
                                                                        <div class="media-body overflow-hidden">
                                                                            <h5 class="text-truncate font-size-14 mb-1">{{ $participant->user->name }}</h5>
                                                                            <p class="text-truncate mb-0">{{ $participant->user->email }}</p>
                                                                        </div>
                                                                        <div class="font-size-11">12 min</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            @endforeach



                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="conversation-container">
                                                <!-- The conversation will be inserted here -->
                                            </div>

                                            <div class="tab-content pb-4">
                                                <div class="tab-pane show active">
                                                    <div>
                                                        <h5 class="font-size-16 mb-3">Contact</h5>
                                                        <ul class="list-unstyled chat-list">

                                                            @foreach ($conversation->participants as $participant)
                                                            <li>
                                                                <a href="javascript:void(0);" class="participant-link" data-participant-id="{{ $participant->user->id }}">
                                                                    <div class="media">
                                                                        <div class="align-self-center me-3">
                                                                            <i class="mdi mdi-circle text-success font-size-10"></i>
                                                                        </div>
                                                                        <div class="align-self-center me-3">
                                                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">
                                                                        </div>
                                                                        <div class="media-body overflow-hidden">
                                                                            <h5 class="text-truncate font-size-14 mb-1">{{ $participant->user->name }}</h5>
                                                                            <p class="text-truncate mb-0">{{ $participant->user->email }}</p>
                                                                        </div>
                                                                        <div class="font-size-11">12 min</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            @endforeach



                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="group">
                                                    <h5 class="font-size-14 mb-3">Group</h5>
                                                    <ul class="list-unstyled chat-list">


                                                        <li>
                                                            <a href="#">
                                                                <div class="media align-items-center">
                                                                    <div class="avatar-xs me-3">
                                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                            A
                                                                        </span>
                                                                    </div>

                                                                    <div class="media-body">
                                                                        <h5 class="font-size-14 mb-0">Project A</h5>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="#">
                                                                <div class="media align-items-center">
                                                                    <div class="avatar-xs me-3">
                                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                            B
                                                                        </span>
                                                                    </div>

                                                                    <div class="media-body">
                                                                        <h5 class="font-size-14 mb-0">Project B</h5>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="tab-pane" id="contact">
                                                    <h5 class="font-size-14 mb-3">Contact</h5>

                                                    <div data-simplebar style="height: 90vh;">
                                                        <div>
                                                            <div class="avatar-xs mb-3">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    A
                                                                </span>
                                                            </div>

                                                            <ul class="list-unstyled chat-list">
                                                                <li>
                                                                    <a href="#">
                                                                        <h5 class="font-size-14 mb-0">Adam Miller</h5>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#">
                                                                        <h5 class="font-size-14 mb-0">Alfonso Fisher</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="mt-4">
                                                            <div class="avatar-xs mb-3">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    B
                                                                </span>
                                                            </div>

                                                            <ul class="list-unstyled chat-list">
                                                                <li>
                                                                    <a href="#">
                                                                        <h5 class="font-size-14 mb-0">Bonnie Harney</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="mt-4">
                                                            <div class="avatar-xs mb-3">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    C
                                                                </span>
                                                            </div>

                                                            <ul class="list-unstyled chat-list">
                                                                <li>
                                                                    <a href="#">
                                                                        <h5 class="font-size-14 mb-0">Charles Brown</h5>
                                                                    </a>
                                                                    <a href="#">
                                                                        <h5 class="font-size-14 mb-0">Carmella Jones</h5>
                                                                    </a>
                                                                    <a href="#">
                                                                        <h5 class="font-size-14 mb-0">Carrie Williams</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="mt-4">
                                                            <div class="avatar-xs mb-3">
                                                                <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                    D
                                                                </span>
                                                            </div>

                                                            <ul class="list-unstyled chat-list">
                                                                <li>
                                                                    <a href="#">
                                                                        <h5 class="font-size-14 mb-0">Dolores Minter</h5>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="user-chat" style="margin-top:90px;height:100vh; overflow-y: auto;">
                                <div class="p-2 w-50 position-fixed display-flex border-bottom " style="backdrop-filter: blur(5px);z-index:9999;">

                                    <div class="row">
                                        <div class="col-md-4 col-9">
                                            <h5 class="font-size-15 mb-1 text-truncate">Steven Franklin</h5>
                                            <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active now</p>
                                        </div>
                                        <div class="col-md-8 col-3">
                                            <ul class="list-inline user-chat-nav text-end mb-0">
                                                <li class="list-inline-item d-none d-sm-inline-block">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-magnify font-size-18"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                                            <form class="p-3">
                                                                <div class="form-group m-0">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">

                                                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>

                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item  d-none d-sm-inline-block">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-cog-outline font-size-18"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">View Profile</a>
                                                            <a class="dropdown-item" href="#">Clear chat</a>
                                                            <a class="dropdown-item" href="#">Muted</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else</a>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="chat-conversation p-3">
                                    <ul class="list-unstyled" style="margin-top: 10px; margin-bottom:120px;" id="messageList" data-simplebar>
                                        <li>
                                            <div class="chat-day-title">
                                                <span class="title">Today</span>
                                            </div>
                                        </li>

                                        @foreach ($conversation->messages as $message)

                                        <li class="left">
                                            <div class="conversation-list">

                                                <div class="media">

                                                    <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                                    <div class="media-body arrow-left ms-3">

                                                        <div class="dropdown">

                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Save</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>

                                                        <div class="ctext-wrap">

                                                            <p>
                                                                {{ $message->body }}
                                                            </p>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </li>@endforeach
                                        <li class="right">
                                            <div class="conversation-list">

                                                <div class="media">


                                                    <div class="media-body arrow-right me-3">

                                                        <div class="dropdown">

                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Save</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <div class="ctext-wrap">
                                                            <div class="conversation-name">Henry Wells</div>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>

                                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                                        </div>


                                                    </div>

                                                    <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">





                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <form class="message-form" data-conversation-id="{{ $conversation->id }}">
                                    @csrf
                                    <div class="p-3 w-50 chat-input-section position-fixed bottom-0" style="backdrop-filter: blur(5px);">
                                        <div class="row">
                                            <div class="col">
                                                <div class="">
                                                    <textarea
                                                        class="form-control chat-input"
                                                        placeholder="Enter Message..."
                                                        rows="1"></textarea>
                                                    <div class="chat-input-links">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Emoji" class="chat-icon">
                                                                    <i class="mdi mdi-emoticon-happy-outline"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Images" class="chat-icon">
                                                                    <i class="mdi mdi-file-image-outline"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <label for="file-attachment" class="chat-icon">
                                                                    <i class="mdi mdi-file-document-outline"></i>
                                                                </label>
                                                                <input type="file" id="file-attachment" name="attachment" class="d-none">
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light">
                                                    <span class="d-none d-sm-inline-block">Send</span>
                                                    <i class="mdi mdi-send"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    <!-- end row -->

                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        <!-- end main content-->
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.participant-link').forEach(function(link) {
                link.addEventListener('click', function(e) {
                    const participantId = this.dataset.participantId;

                    fetch('/conversation/store-or-fetch', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: `participant_id=${participantId}`
                        })
                        .then(response => response.text())
                        .then(html => {
                            const conversationContainer = document.querySelector('#conversation-container');
                            console.log(conversationContainer); // Check if the element exists
                            if (conversationContainer) {
                                conversationContainer.innerHTML = html;
                            } else {
                                console.error('Conversation container not found!');
                            }
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const forms = document.querySelectorAll(".message-form");

            forms.forEach((form) => {
                const inputField = form.querySelector(".chat-input");

                form.addEventListener("submit", async function(e) {
                    e.preventDefault();
                    await sendMessage(form);
                });

                inputField.addEventListener("keypress", async function(e) {
                    if (e.key === "Enter" && !e.shiftKey) {
                        e.preventDefault();
                        await sendMessage(form);
                    }
                });
            });
            async function sendMessage(form) {
                const conversationId = form.getAttribute("data-conversation-id");
                const messageBody = form.querySelector(".chat-input").value.trim();
                const messageList = document.getElementById("messageList"); // Target #messageList

                if (!messageBody) return; // Ignore empty messages

                const formData = new FormData();
                formData.append("_token", form.querySelector("input[name='_token']").value);
                formData.append("body", messageBody);

                try {
                    // Send the message to the server
                    const response = await fetch(`/chat/${conversationId}`, { // Keep the existing route
                        method: "POST",
                        body: formData,
                    });

                    if (response.ok) {
                        // Call appendMessage to append the message locally
                        appendMessage(messageBody);

                        // Clear the input field after sending
                        form.querySelector(".chat-input").value = "";
                    } else {
                        console.error("Failed to send message.");
                    }
                } catch (error) {
                    console.error("Error sending message:", error);
                }
            }

            function appendMessage(message) {
                const messageList = document.getElementById("messageList");
                const currentTime = new Date();
                const timeString = `${currentTime.getHours().toString().padStart(2, "0")}:${currentTime.getMinutes().toString().padStart(2, "0")}`;

                const newMessage = document.createElement("li");
                newMessage.classList.add("last-chat");

                newMessage.innerHTML = `
        <div class="conversation-list">
            <div class="media">
                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                <div class="media-body arrow-left ms-3">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Copy</a>
                            <a class="dropdown-item" href="#">Save</a>
                            <a class="dropdown-item" href="#">Forward</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                    <div class="ctext-wrap">
                        <p>${message}</p>
                    </div>
                </div>
            </div>
        </div>
    `;

                messageList.appendChild(newMessage);
                messageList.scrollTop = messageList.scrollHeight; // Scroll to bottom
                userChat.scrollTop = userChat.scrollHeight;
            }

        });
    </script>


    @include("partials.right-sidebar")

    @include("partials.vendor-scripts")

    <script src="{{ asset('assets/js/app.js') }}"></script>
    @empty
    <p>No conversations found.</p>
    @endforelse

</body>

</html>