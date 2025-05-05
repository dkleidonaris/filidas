<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

use App\Models\Customer;

class CustomerForm extends Form
{
    public ?Customer $customer = null;

    #[Validate('required')]
    public $last_name;

    #[Validate('required')]
    public $first_name;

    #[Validate('required|exists:countries,id')]
    public $country_id;

    #[Validate('required')]
    public $phone;

    #[Validate('required|email:rfc')]
    public $email;

    public function set(Customer $customer)
    {
        $this->customer = $customer;
        $this->last_name = $customer->last_name;
        $this->first_name = $customer->first_name;
        $this->country_id = $customer->country->id;
        $this->phone = $customer->phone;
        $this->email = $customer->email;
    }

    public function create()
    {
        $this->validate();
        $customer = Customer::create([
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'country_id' => $this->country_id,
        ]);

        return $customer;
    }

    public function update()
    {
        $this->validate();

        $this->customer->update([
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'country_id' => $this->country_id,
        ]);

        $this->set($this->customer);
    }
}
