<div class="flex items-center justify-center h-screen">
    <div class="max-w-lg rounded overflow-hidden shadow-lg">
      <!-- Card content -->
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">Customer Details</div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Name
          </label>
          <p class="text-gray-900 leading-tight">{{ $customer->name }}</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
            Phone
          </label>
          <p class="text-gray-900 leading-tight">{{ $customer->phone }}</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
          </label>
          <p class="text-gray-900 leading-tight">{{ $customer->email }}</p>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
            Image
          </label>
          <img src="{{ Storage::url($customer->image) }}" alt="User Image" class="h-30 w-50 object-cover">
        </div>
      </div>
      <!-- Button -->
      <div class="px-6 py-4">
        <button wire:navigate href='/customers' class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          Back To Customer List
        </button>
      </div>
    </div>
  </div>