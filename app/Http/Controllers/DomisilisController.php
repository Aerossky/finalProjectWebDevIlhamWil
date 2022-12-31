<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use App\Models\User;
use Illuminate\Http\Request;

class DomisilisController extends Controller
{
    public function index()
    {
        return view('tampilan_pricelist', [
            'title' => 'Pricelist',
            'main'=> 'Pricelist',
            'user'=> User::all(),
            'domisili' => Domisili::all()
        ]);

    }

    public function create()
    {
        return view ('createdomisili',[
            'title' => 'Domisili',
            'main' => 'Domisili',
            'domisili'=> Domisili::all()
        ]);

    }

    public function store(Request $request)
    {
        Domisili::create([
            'domisili_name' => $request->domisili_name,
        ]);
        return redirect('dashboard/tampilan_domisili');
    }

    public function show(Domisili $id)
    {
        $id = Domisili::findOrFail($id);
        return view('tampilan_domisili', [
            'title' => 'Show Domisili',
            'main' => 'Domisili',
            'domisilis' => $id,
            'domisili' => Domisili::all()

        ]);
    }

    public function edit()
    {
        return view('tampilan_domisili', [
            'title' => 'Edit Domisili',
            'main' => 'Domisili',
            'domisili' => Domisili::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $id = Domisili::findOrFail($id);
        $id->update([
            'domisili_name' => $request->domisili_name,
        ]);
        return redirect('dashboard/tampilan_domisili');
    }


    public function destroy($id)
    {
        $domisili = Domisili::findOrFail($id);
        $domisili->delete();
        return redirect('dashboard/tampilan_domisili');
    }
}
