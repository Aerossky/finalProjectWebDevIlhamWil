<?php

namespace App\Http\Controllers;
use App\Models\Pricelist;
use App\Models\User;
use Illuminate\Http\Request;
use App\Admin;

class PricelistsController extends Controller
{
    public function index()
    {
        return view('tampilan_pricelist', [
            'title' => 'Pricelist',
            'main'=> 'Pricelist',
            'user'=> User::all(),
            'pricelist' => Pricelist::all()
        ]);

    }

    public function create()
    {
        return view ('createpricelist',[
            'title' => 'Pricelist',
            'main' => 'Pricelist',
            'pricelist'=> Pricelist::all()
            ]);
    }

    public function store(Request $request)
    {
        Pricelist::create([
            'pricelist_name' => $request->pricelist_name,
            'harga' => $request->harga,
        ]);
        return redirect('dashboard/tampilan_pricelist');
    }

    public function show(Pricelist $id)
    {
        $id = Pricelist::findOrFail($id);
        return view('tampilan_pricelist', [
            'title' => 'Show pricelist',
            'main' => 'Pricelist',
            'pricelists' => $id,
            'pricelist' => Pricelist::all()

        ]);
    }

    public function edit()
    {
        return view('tampilan_pricelist', [
            'title' => 'Edit Pricelist',
            'main' => 'Pricelist',
            'pricelist' => Pricelist::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $pricelist = Pricelist::findOrFail($id);
        $pricelist ->update([
            'pricelist_name' => $request->pricelist_name,
            'harga' => $request->harga,
        ]);
        return redirect('dashboard/tampilan_pricelist');
    }

    public function destroy($id)
    {
        $pricelist = Pricelist::findOrFail($id);
        $pricelist->delete();
        return redirect('dashboard/tampilan_pricelist');
    }
}
