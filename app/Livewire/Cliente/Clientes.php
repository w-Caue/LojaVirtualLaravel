<?php

namespace App\Livewire\Cliente;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithPagination;

class Clientes extends Component
{
    use WithPagination;
    use LivewireAlert;

    public $search = '';

    public $editCliente = false;

    public function editarCliente(){
        $this->editCliente = !$this->editCliente;
    }

    public function updateCliente(User $cliente){
        $this->editarCliente();

        

    }

    public function render()
    {
        $clientes = User::where('id', 'like', '%' . $this->search . '%')
                        ->orWhere('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%')
                        ->orWhere('telefone', 'like', '%' . $this->search . '%')
                        ->paginate(5);

        return view('livewire.cliente.clientes', [
            'clientes' => $clientes
        ]);
    }
}
