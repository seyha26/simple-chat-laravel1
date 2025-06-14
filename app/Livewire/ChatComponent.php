<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Chat;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatComponent extends Component
{
    public $user_id, $reciever, $message, $users, $chat;

    public function render()
    {
        $this->users = User::where('id', '!=', Auth::id())->get();

        // 💡 Refresh chat messages on every render (for polling)
        if ($this->chat) {
            $this->chat = Chat::with('message')->find($this->chat->id);
        }

        return view('livewire.chat-component');
    }

    public function createChat($id)
    {
        $this->reciever = User::find($id);

        $this->chat = Chat::whereRaw(
            '(sender_id = ? AND reciever_id = ?) OR (sender_id = ? AND reciever_id = ?)',
            [Auth::id(), $id, $id, Auth::id()]
        )->first();

        if (!$this->chat) {
            $this->chat = Chat::create([
                'sender_id' => Auth::id(),
                'reciever_id' => $id, // ✅ fixed typo
            ]);
        }
    }

    public function sendMessage($id)
    {
        Message::create([
            'message' => $this->message,
            'sender_id' => Auth::id(),
            'chat_id' => $this->chat->id
        ]);

        // ✅ Reset input + refresh chat messages
        $this->message = '';
        $this->chat = Chat::with('message')->find($this->chat->id);
    }
}

