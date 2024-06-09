<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Color;
use App\Models\ColorProduct;
use App\Models\ImageProduct;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;

class ProductController extends DashBoardController
{
    public function __construct(Product $model)
    {
        parent::__construct();
        $this->model = $model;
        $this->module_actions = [
            'create', 'store', 'update', 'edit', 'destroy',
            'index', 'show', 'finalDelete', 'recycleBin', 'restore'
        ];
        view()->share([
            'module_actions' => $this->module_actions,
        ]);
    }

    public function create()
    {
        $items = SubCategory::all();

        return view('dashboard.pages.products.form', compact('items'));
    }

    // ************************************************
    // ************************************************
    // ***********************Store********************
    // ************************************************
    // ************************************************
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images/product'), $imageName);
        $data['image'] = $imageName;
        $product = Product::create($data);


        if ($product) {
            session()->flash('success', $this->success_create);
            return redirect($this->index_route);
        } else {
            session()->flash('error', $this->error_create);

            return redirect()->back();
        }
    }


    public function edit($id)
    {
        $item = Product::findOrFail($id);
        $items = SubCategory::all();

        return view('dashboard.pages.products.edit', compact(
            'item',
            'items'
        ));
    }
    // ************************************************
    // ************************************************
    // ***********************Update*******************
    // ************************************************
    // ************************************************
    public function update(ProductRequest $request, Product $Product)
    {
        $data = $request->all();
        if (request()->hasFile('image') && request('image') != '') {
            $imagePath = public_path('images/product' . $Product->image);
            if (File::exists($imagePath)) {
                unlink($imagePath);
            }
            $image = request()->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images/product'), $imageName);
            $data['image'] = $imageName;

            $update = $Product->update($data);
        }
        $update = $Product->update($data);
        if ($update) {
            session()->flash('success', $this->success_update);
            return redirect($this->index_route);
        } else {
            session()->flash('error', $this->error_update);

            return redirect()->back();
        }
    }
}
