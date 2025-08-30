<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\LostItem;
class LostItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:item.view')->only(['lost_item','lost_item_edit']);
        $this->middleware('permission:item.create')->only(['lost_item_create','lost_item_store']);
        $this->middleware('permission:item.update')->only(['lost_item_edit','lost_item_update']);
        $this->middleware('permission:item.delete')->only(['destroy']);
    }
    public function lost_item()
    {
        $items = LostItem::all();
        return view('lost_item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function lost_item_create()
    {
        return view('lost_item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function lost_item_store(Request $request)
    {
            $request->validate([
                'name'        => 'nullable|string|max:255',
                'room_number' => 'required|string|max:50',
                'lost_date'   => 'required|date',
                'status'      => 'nullable|string|max:50',
                'picture'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $data = $request->all();
            $data['submitted_by'] = auth()->id();

            // Handle picture upload
            if ($request->hasFile('picture')) {
                $data['picture'] = $request->file('picture')->store('lost_items', 'public');
            }

            \App\Models\LostItem::create($data);

            return redirect()->route('lost.item')->with('success', 'Lost item created successfully.');
    }

    public function lost_item_edit($id)
    {
        $item = LostItem::findOrFail($id);
        return view('lost_item.edit', compact('item'));
    }

    public function lost_item_update(Request $request, $id)
    {
        $request->validate([
            'name'        => 'nullable|string|max:255',
            'room_number' => 'required|string|max:50',
            'lost_date'   => 'required|date',
            'status'      => 'nullable|string|max:50',
            'picture'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $item = \App\Models\LostItem::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('lost_items', 'public');
        }

        $item->update($data);

        return redirect()->route('lost.item')->with('success', 'Lost item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}