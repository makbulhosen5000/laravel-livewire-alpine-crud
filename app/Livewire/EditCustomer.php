<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCustomer extends Component
{
    use WithFileUploads; 
    public $customer,$name,$phone,$email,$image;
    public function mount(Customer $customer){
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->phone = $customer->phone;
        $this->email = $customer->email;
        $this->image = $customer->image;
    }
    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function updateCustomer(){
        $validatedData = $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //$customer = Customer::find($this->customer_id);
        $newImage = $this->image->store('public/customer');
        $this->customer->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'email'=> $this->email,
            'image' => $newImage,
        ]);   
        session()->flash('message', 'Customer Update Successfully.');
        $this->reset();
        // return $this->redirect('/customers',navigate:true);
    }
}
