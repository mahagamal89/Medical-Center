<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\MedicalCenter;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    /**
     * @var string
     */
    public $name = '';

    /**
     * @var string
     */
    public $email = '';

    /**
     * @var string
     */
    public $password = '';

    /**
     * @var string
     */
    public $passwordConfirmation = '';

    /**
     * @var string
     */
    public $address = '';

    /**
     * @var string
     */
    public $mobileNumber = '';

    /**
     * @var string
     */
    public $medicalCenter = '';

    /**
     * Render the view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.register', [
            'medicalCenters' => $this->getAllAvailableMedicalCenters(),
        ]);
    }

    /**
     * Register a new user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email|unique:users',
            'password' => 'required|string|max:255',
            'passwordConfirmation' => 'required|same:password',
            'address' => 'required|string|max:255',
            'mobileNumber' => 'required|string|size:11',
            'medicalCenter' => 'required',
        ]);

        $SelectedMedicalCenter = MedicalCenter::where('name', $validatedData['medicalCenter'])->first();

        unset($validatedData['passwordConfirmation'], $validatedData['medicalCenter']);

        $SelectedMedicalCenter->users()->create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'address' => $validatedData['address'],
            'mobile_number' => $validatedData['mobileNumber'],
        ]);

        session()->flash('registerSuccessMessage', 'You have successfully registered.');

        return redirect()->back();
    }

    /**
     * Get all the medical centers.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllAvailableMedicalCenters()
    {
        return MedicalCenter::get();
    }
}
