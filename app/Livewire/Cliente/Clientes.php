<?php

namespace App\Livewire\Cliente;

use App\Livewire\Forms\ClienteForm;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Clientes extends Component
{
    use WithPagination;
    use LivewireAlert;

    public ClienteForm $form;

    public $search = '';

    public $editCliente = false;

    public $cliente;

    #[Rule('max:40', message:"Nome tem que conter mais de 40 caracteres!")]
    #[Rule('min:3', message:"Nome tem que conter mais de 3 caracteres!")]
    #[Rule('required', message:"Insira um nome!")]
    public $nome;

    #[Rule('max:40', message:"Último Nome tem que conter menos de 40 caracteres!")]
    #[Rule('min:3', message:"Último Nome tem que conter mais de 3 caracteres!")]
    #[Rule('required', message:"Insira o seu último nome!")]
    public $lastNome;

    #[Rule('max:13', message:"Telefone tem que conter 12 caracteres!")]
    #[Rule('min:11', message:"Telefone tem que conter 12 caracteres!")]
    #[Rule('required', message:"Insira um número de telefone!")]
    public $telefone = '';

    #[Rule('email')]
    #[Rule('min:11', message:"Email tem que conter mais de 11 caracteres!")]
    #[Rule('required', message:"Insira um email!")]
    public $email = '';

    public function editarCliente(User $cliente)
    {
        $this->editCliente = !$this->editCliente;

        $this->cliente = $cliente;

        $this->nome = $this->cliente->name;
        $this->lastNome = $this->cliente->last_name;
        $this->telefone = $this->cliente->telefone;
        $this->email = $this->cliente->email;

    }

    public function update()
    {
        $this->validate();

        User::find($this->cliente->id)->update([
            'name' => $this->nome,
            'last_name' => $this->lastNome,
            'telefone' => $this->telefone,
            'email' => $this->email,
        ]);

        $this->alert('success', 'Cadastro Atualizado', [
            'position' => 'center',
            'timer' => '1000',
            'toast' => false,
           ]);

           $this->editCliente = false;
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
