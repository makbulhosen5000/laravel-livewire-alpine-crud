<div x-data="{ open: false }">


<button @click="open = ! open" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Customer</button>

<div x-show="open">
    <div class="max-w-md mx-auto">
        <form wire:submit="store" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
              Name
            </label>
            <input wire:model="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Enter your name">
            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
         </div>

          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
              Phone
            </label>
            <input wire:model="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"type="tel" placeholder="Enter your phone number">
            @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
              Email
            </label>
            <input wire:model="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="email" placeholder="Enter your email">
            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
              Image Upload
            </label>
            <input wire:model="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="file">
            @if ($image)
            <img src="{{ $image->temporaryUrl() }}" width="150">
             @endif
            @error('image') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
          <div class="flex items-center justify-between">
            <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
              Submit
            </button>
          </div>
        </form>
      </div>                  
</div>
</div>