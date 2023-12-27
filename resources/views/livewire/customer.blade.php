<div class="flex flex-row justify-between p-8">
    <!-- Table Section -->
    <div class="w-3/5">
      <div class="flex justify-between">
        <h2 class="text-2xl font-bold mb-4">Custmer List</h2>
        <input wire:model.live='search' type="text"  class="border-2 border-gray-300 bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none" placeholder="Search">
      </div>
      @if (session()->has('message'))
      <div class="bg-green-600 p-3 rounded my-5">
          {{ session('message') }}
      </div>
      @endif
      <table class="min-w-full bg-white shadow-md rounded">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="py-2 px-4">Name</th>
            <th class="py-2 px-4">Phone</th>
            <th class="py-2 px-4">EMail</th>
            <th class="py-2 px-4">Image</th>
            <th class="py-2 px-4">Action</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          @forelse ($customers as $key=>$item)
          <tr class="text-center">
            <td class="py-3 px-4">{{ $item->name }}</td>
            <td class="py-3 px-4">{{ $item->phone }}</td>
            <td class="py-3 px-4">{{ $item->email }}</td>
            <td class="py-3 px-4">
              <img src="{{ Storage::url($item->image) }}" alt="User Image" class="h-10 w-10 object-cover rounded-full">
            </td>
            <td class="text-center">
              <button wire:navigate href="/customers/{{ $item->id }}" class="bg-blue-400 hover:bg-blue-200 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                View
              </button>
                <button  wire:navigate href="/customers/{{ $item->id }}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Edit
                </button>
                <button  wire:click="deleteCustomer({{ $item->id }})"  class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Delete
                </button>
            </td>
          </tr>    
          @empty
          <tr class="text-center">
            <td class="py-3 px-4">Data Not Available</td>
          </tr>      
          @endforelse
          
        </tbody>
      </table>
      {{ $customers->links() }}
    </div>
  
    <!-- Form Section -->
    @include('livewire.create-customer')
  </div>