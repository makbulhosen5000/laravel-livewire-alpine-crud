<div class="flex items-center justify-center h-screen">
  <div>
      <div class="max-w-md mx-auto">
        {{-- <livewire:flash-message/> --}}
        @if (session()->has('message'))
        <div class="bg-green-600 p-3 rounded my-5">
            {{ session('message') }}
        </div>
        @endif
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Customer</button>
          <form wire:submit="updateCustomer" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
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
              {{-- @if($image) --}}
              <img src="" width="150">
              <img src="{{ Storage::url($customer?->image) }}" width="350" alt="User Image" class="h-30 w-50 object-cover">
              {{-- @endif --}}
              @error('image') <span class="text-danger">{{ $message }}</span>@enderror
          </div>
            <div class="flex items-center justify-between">
                <button wire:navigate href='/customers'  class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Back 
                  </button>
              <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit
              </button>
            </div>
          </form>
        </div>                  
  </div>
  </div>