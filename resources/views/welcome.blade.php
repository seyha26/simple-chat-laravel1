<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Chat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #chatBox {
    max-height: auto;
    min-height: 700px;/* Adjust as needed */
    overflow-y: auto;
}
    </style>
</head>
<body class="h-full bg-black text-gray-100" wire:poll.5s>
    <livewire:chat-component />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
