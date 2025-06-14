<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Chat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #chatBox {
    max-height: 500px; /* Adjust as needed */
    overflow-y: auto;
}
    </style>
</head>
<body class="h-full bg-black text-gray-100" wire:poll.5s>
    <livewire:chat-component />
     @livewireScripts
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    if (typeof Livewire !== 'undefined') {
      Livewire.hook('message.processed', () => {
        console.log('Livewire DOM updated');
        const chatBox = document.getElementById('chatBox');
        if (chatBox) {
          chatBox.scrollTop = chatBox.scrollHeight;
          console.log('Chat box scrolled to bottom');
        }
      });
    } else {
      console.error('Livewire is not defined');
    }
  });
  </script>

</body>
</html>
