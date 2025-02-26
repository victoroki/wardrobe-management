<?php

namespace App\Http\Controllers;

use App\Models\ClothingItem;
use Illuminate\Http\Request;

class ClothingItemController extends Controller
{
    public function index()
    {
        return ClothingItem::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|string',
            'description' => 'nullable|string',
        ]);
        return ClothingItem::create($data);
    }

    public function show($id)
    {
        return ClothingItem::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $item = ClothingItem::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    public function destroy($id)
    {
        ClothingItem::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}

