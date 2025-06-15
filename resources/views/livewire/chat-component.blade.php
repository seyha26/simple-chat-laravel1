  <div class="flex h-full">
      <!-- Left Sidebar -->
      <aside class="w-20 bg-gray-900 flex flex-col items-center py-6 border-r border-gray-800">
          <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-8">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
              </svg>
          </div>

          <nav class="space-y-6 flex-1">
              <a href="#" class="block relative">
                  <div class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center text-primary relative">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                      <span
                          class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 rounded-full text-xs flex items-center justify-center">48</span>
                  </div>
              </a>

              <a href="#" class="block">
                  <div class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center text-primary relative">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>
                      <span
                          class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 rounded-full text-xs flex items-center justify-center">4</span>
                  </div>
              </a>
          </nav>

          <div class="mt-auto space-y-6">
              <button class="w-12 h-12 bg-gray-800 rounded-xl flex items-center justify-center text-primary">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
              </button>

              <button class="w-12 h-12 rounded-xl overflow-hidden">
                  <img src="https://res.cloudinary.com/djv4xa6wu/image/upload/v1735722161/AbhirajK/Abhirajk3.webp"
                      alt="Profile" class="w-full h-full object-cover" />
              </button>
          </div>
      </aside>

      <!-- Chat List -->
      <aside class="w-80 bg-gray-900 border-r border-gray-800">
          <div class="p-4">
              <div class="relative">
                  <input type="search" placeholder="Search"
                      class="w-full bg-gray-800 rounded-xl py-2 pl-10 pr-4 text-gray-100 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary">
                  <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
              </div>
          </div>
          <div class="overflow-y-auto h-[calc(100vh-5rem)]">
              @forelse($users as $user)
                  <div wire:click="createChat({{ $user->id }})" class="px-2 space-y-1" id="chatSelector">
                      <div class="p-3 rounded-xl bg-primary bg-opacity-20 flex items-center gap-3">
                          <div class="rounded-4xl">
                              <img class="w-16 h-16 rounded-4xl object-cover" style="border-radius: 100%; "
                                  src="{{ asset('/storage/' . $user->profile) }}" alt="">
                          </div>
                          <div class="flex-1 min-w-0">
                              <div class="flex items-center justify-between">
                                  <h3 class="font-semibold text-primary">{{ $user->name }}</h3>
                                  <span class="text-xs text-gray-400">4m</span>
                              </div>
                              <p class="text-sm text-gray-400 truncate">i love you mahn</p>
                          </div>
                      </div>
                  </div>
              @empty
                  <div class="text-center py-6">No messages</div>
              @endforelse
          </div>
      </aside>
      <!-- Main Chat -->
      <main class="flex-1 flex flex-col bg-gray-900">
          @if ($reciever)
              <header class="p-4 border-b border-gray-800 flex items-center justify-between sticky top-0 bg-gray-900">
                  <div class="flex items-center gap-4">
                      <h1 class="text-xl font-bold">Design chat</h1>
                      <span class="text-sm text-gray-400">23 members, 10 online</span>
                  </div>
                  <div class="flex items-center gap-4">
                      <button class="w-10 h-10 rounded-xl bg-gray-800 flex items-center justify-center text-primary">
                          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                          </svg>
                      </button>
                      <button class="w-10 h-10 rounded-xl bg-gray-800 flex items-center justify-center text-primary">
                          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                          </svg>
                      </button>
                  </div>
              </header>

              <div class="flex flex-1 flex-col overflow-y-auto" id="chatBox" wire:poll.5s>
                  @forelse ($chat->message as $item)
                      <div class="p-4 space-y-6">
                          <!-- Messages -->
                          @if ($item->sender_id != Auth::user()->id)
                              <div class=":while max-w-2xl">
                                  <img src="{{ asset('/storage/' . $reciever->profile) }}" alt="User"
                                      class="w-10 h-10 rounded-3xl  object-cover" />

                                  <div class="flex items-center gap-2 mb-1">
                                      <span class="font-semibold">{{ $reciever->name }}</span>
                                      <span class="text-xs text-gray-400">09:20</span>
                                  </div>
                                  <div class="bg-gray-800 rounded-xl p-4">
                                      <p>{{ $item->message }}</p>
                                  </div>
                                  <div class="flex items-center gap-2 mt-2">
                                      <button class="px-2 py-1 bg-gray-800 rounded-lg text-xs flex items-center gap-1">
                                          👍 <span>4</span>
                                      </button>
                                  </div>
                              </div>
                          @else
                              <!-- More messages -->
                              <div class="flex gap-4 max-w-2xl ml-auto">
                                  <div class="flex-1">
                                      <div class="flex items-center justify-end gap-2 mb-1">
                                          <span class="font-semibold">You</span>
                                          <span
                                              class="text-xs text-gray-400">{{ $item->created_at->format('H:i:s') }}</span>
                                      </div>
                                      <div class="bg-gray-800 bg-opacity-20 rounded-xl p-4">
                                          <p>{{ $item->message }}</p>
                                      </div>
                                  </div>
                                  <img class="w-10 h-10 object-cover rounded-3xl"
                                      src="{{ asset('/storage/' . Auth::user()->profile) }}" />
                              </div>
                          @endif
                      </div>
                  @empty
                      <div class="text-center py-6">
                          No Message
                      </div>
                  @endforelse
              </div>
              <footer class="p-4 border-t border-gray-800">
                  <form wire:submit.prevent='sendMessage({{ $chat->id }})'>
                      <div class="flex items-center gap-2 bg-gray-800 rounded-xl p-2">
                          <button class="p-2 hover:bg-gray-700 rounded-lg text-primary">
                              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                              </svg>
                          </button>
                          <input type="text" wire:model="message" placeholder="Your message"
                              class="flex-1 bg-transparent focus:outline-none text-gray-100 placeholder-gray-400" />
                          <button class="p-2 hover:bg-gray-700 rounded-lg text-primary">
                              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                          </button>
                          <button class="p-2 hover:bg-gray-700 rounded-lg text-primary">
                              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                              </svg>
                          </button>
                          <button class="p-2 hover:bg-gray-700 rounded-lg text-primary" type="submit">
                              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                              </svg>
                          </button>
                      </div>
                  </form>
              </footer>
          @endif
      </main>
  </div>

<script>
    document.getElementById('chatSelector').addEventListener('click', function () {
                let box = document.querySelector("#chatBox");
                box.scrollTop = 10;
    })
    setInterval(function(){
        console.log("Testing")
        let box = document.querySelector("#chatBox");
        box.scrollTop = box.scrollHeight
        }, 1000)
</script>
  </div>
