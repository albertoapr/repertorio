<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMusicaRequest;
use App\Http\Requests\UpdateMusicaRequest;
use App\Models\Musica;
use Inertia\Inertia;

class MusicaController extends Controller
{
    public function index()
    {
        $musicas = Musica::query()
            ->latest()
            ->paginate(10)
            ->through(fn ($m) => [
                'id' => $m->id,
                'titulo' => $m->titulo,
                'numero_harpa' => $m->numero_harpa,
                'numero_coletanea' => $m->numero_coletanea,
                'ritmo' => $m->ritmo,
                'tom' => $m->tom,
            ]);

        return Inertia::render('Musicas/Index', [
            'musicas' => $musicas,
        ]);
    }

    public function create()
    {
        return Inertia::render('Musicas/Create');
    }

    public function store(StoreMusicaRequest $request)
    {
        Musica::create($request->validated());
        return redirect()->route('musicas.index');
    }

    public function show(Musica $musica)
    {
        return Inertia::render('Musicas/Show', [
            'musica' => $musica,
        ]);
    }

    public function edit(Musica $musica)
    {
        return Inertia::render('Musicas/Edit', [
            'musica' => $musica,
        ]);
    }

    public function update(UpdateMusicaRequest $request, Musica $musica)
    {
        $musica->update($request->validated());
        return redirect()->route('musicas.index');
    }

    public function destroy(Musica $musica)
    {
        $musica->delete();
        return redirect()->route('musicas.index');
    }
}
