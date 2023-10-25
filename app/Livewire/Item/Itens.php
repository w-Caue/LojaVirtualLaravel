<?php

namespace App\Livewire\Item;

use App\Livewire\Forms\ItemForm;
use App\Models\Grupo;
use App\Models\Item;
use App\Models\Marca;
use App\Models\Produto;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Rule;
use Livewire\WithPagination;

class Itens extends Component
{
    use WithPagination;
    use LivewireAlert;

    public ItemForm $form;

    public $search = '';

    public $newItem = false;

    public $itemId;

    #[Rule('required')]
    public $nome = '';

    #[Rule('required')]
    public $descricao = '';

    #[Rule('required')]
    public $preco = '';

    public $marca = '';

    public $grupo = '';


    public function novoItem()
    {
        $this->newItem = !$this->newItem;
    }

    public function save()
    {
        // $this->validate();

        Item::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'marca_id' => $this->marca,
            'grupo_id' => $this->grupo
        ]);

        $this->alert('success', 'Item Cadastrado!', [
            'position' => 'center',
            'timer' => 1000,
            'toast' => true,
        ]);

        $this->novoItem();

        $this->reset();
    }

    public function edit($item)
    {
        $item = Item::findOrFail($item);
        $this->itemId = $item;
        $this->nome = $item->nome;
        $this->descricao = $item->descricao;
        $this->preco = $item->preco;
        $this->marca = $item->marca_id;
        $this->grupo = $item->grupo_id;

        $this->novoItem();
    }

    public function update()
    {
            Item::find($this->itemId)->update([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'preco' => $this->preco,
            'marca_id' => $this->marca,
            'grupo_id' => $this->grupo,
        ]);
        
        $this->alert('success', 'Item Atualizado!', [
            'position' => 'center',
            'timer' => 1000,
            'toast' => true,
        ]);

        $this->novoItem();

        $this->reset();
    }

    public function render()
    {
        $itens = Item::where('nome', 'like', '%' . $this->search . '%')->paginate(5);

        $marcas = Marca::all();
        $grupos = Grupo::all();

        return view('livewire.item.itens', [
            'itens' => $itens,
            'marcas' => $marcas,
            'grupos' => $grupos
        ]);
    }
}
