<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithFileUploads;

class Customers extends Component
{
    use WithFileUploads; 
    public $name='',$phone='',$email='',$image='',$search;
    public function store(){
        $validatedData = $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:customers|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);   
        $newImage = $this->image->store('public/customer');
        Customer::create([
            'name'=> $this->name,
            'phone'=> $this->phone,
            'email'=> $this->email,
            'image'=> $newImage,
        ]);
        session()->flash('message', 'Customer Created Successfully.');
        $this->reset();
    }

    public function deleteCustomer(Customer $customer){
        $customer->delete();
        session()->flash('message', 'Customer Delete Successfully.');
        //return $this->redirect('/customers',navigate:true);
    }
    public function render()
    {
        $customers = Customer::latest()->where('name','like',"%{$this->search}%")->paginate(5);
        return view('livewire.customer',['customers'=>$customers]);
    }
}
