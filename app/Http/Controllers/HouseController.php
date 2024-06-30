<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HouseController extends Controller
{
    private $house;

    public function __construct(House $house)
    {
        $this->house = $house;
    }
    /**
     * Display a listing of the resource.
     */

    // public function home(Request $request)
    // {
    //     // Recupera o valor do parâmetro de ordenação da request (com valor padrão)
    //     $sortOrder = $request->input('sort_order', 'asc'); // Valor padrão: 'asc'

    //     // Valida o valor de ordenação (asc ou desc)
    //     if (!in_array($sortOrder, ['asc', 'desc'])) {
    //         $sortOrder = 'asc';
    //     }

    //     // Consulta casas aplicando a ordenação por preço
    //     $houses = $this->house->orderBy('price', $sortOrder)->get();

    //     return view('pages.home', compact('houses'));
    // }
    public function home()
    {
        $houses = $this->house->all();
        return view('pages.home', compact('houses'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function publication()
    {
        $types = ['Casa', 'Apartamento', 'Sobrado', 'Terreno', 'Cobertura', 'Kitnet'];
        $states = [
            'Acre',
            'Alagoas',
            'Amapá',
            'Amazonas',
            'Bahia',
            'Ceará',
            'Distrito Federal',
            'Espírito Santo',
            'Goiás',
            'Maranhão',
            'Mato Grosso',
            'Mato Grosso do Sul',
            'Minas Gerais',
            'Pará',
            'Paraíba',
            'Paraná',
            'Pernambuco',
            'Piauí',
            'Rio de Janeiro',
            'Rio Grande do Norte',
            'Rio Grande do Sul',
            'Rondônia',
            'Roraima',
            'Santa Catarina',
            'São Paulo',
            'Sergipe',
            'Tocantins'
        ];
        return view('pages.publication', compact('states', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'price' => 'required|numeric',
            'photo' => 'required|image|max:2048',
        ]);

        $user = Auth::user();

        $data = $request->all();
        $data['user_id'] = $user->id;

        // Se houver uma foto, faça o upload e armazene o caminho
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos');
        }

        $this->house->create($data);

        return redirect()->route('home')->with('success', 'Anúncio realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        return view('pages.details', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        //
    }
}
