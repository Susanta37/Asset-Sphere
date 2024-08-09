<?php
namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Brand;
use App\Models\Location;
use App\Models\Task;
use App\Models\Todolist;
use App\Models\Type;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        // Fetch all tasks
        // $tasks = Todolist::all();
        $assets = Asset::orderBy('created_at', 'desc')->paginate(10);
        
        $brands = Brand::all();
        $types = Type::all();
        $locations = Location::all();
        
        // Paginate assets, showing 10 per page
        
        // Return the view with both assets and tasks
        return view('admin.asset.index',compact('brands', 'types', 'locations','assets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'purchase_date' => 'required|date',
            'status' => 'required',
            'brand_id' => 'required|exists:brands,id',
            'type_id' => 'required|exists:types,id',
            'location_id' => 'required|exists:locations,id',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
        ]);
    
        $data = $request->all();
    
        // Handle file upload
        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('assets', 'public');
        }
    
        Asset::create($data);
    
        return redirect()->route('okcl.asset')->with('success', 'Asset added successfully.');
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'purchase_date' => 'required|date',
            'status' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $asset = Asset::findOrFail($id);
        $asset->fill($request->except('picture'));

        if ($request->hasFile('picture')) {
            $asset->picture = $request->file('picture')->store('assets', 'public');
        }

        $asset->save();

        return redirect()->route('okcl.asset')->with('success', 'Asset updated successfully.');
    }

    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();

        return redirect()->route('okcl.asset')->with('success', 'Asset deleted successfully.');
    }


}
