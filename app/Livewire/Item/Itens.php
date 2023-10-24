<?php

namespace App\Livewire\Item;

use App\Livewire\Forms\ItemForm;
use App\Models\Grupo;
use App\Models\Item;
use App\Models\Marca;
use App\Models\Produto;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Itens extends Component
{
    use WithPagination;
    
    use LivewireAlert;

    public ItemForm $form;

    public $search = '';

    public $newItem = false;

    
    public function novoItem() {
        $this->newItem = !$this->newItem;
    }

    public function save(){

        $this->form->store();

        $this->alert('success', 'Item Cadastrado!', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
           ]);

           $this->novoItem();

           $this->reset();

    }

    public function render()
    {
        $itens = Item::where('nome', 'like', '%'. $this->search .'%')->paginate(5); 

        $marcas = Marca::all();

        $grupos = Grupo::all();
        
        return view('livewire.item.itens', [
            'itens' => $itens,
            'marcas' => $marcas,
            'grupos' => $grupos
        ]);
        
    }
}
