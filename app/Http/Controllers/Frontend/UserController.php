<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\Order;
use App\Models\Social;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $headerCategory = Category::all();

        $socials = Social::all();
        return view(
            'frontend.profile',
            compact(
                'socials',
                'headerCategory',
                'user'
            )
        );
    }
    public function edit()
    {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        $headerCategory = Category::all();

        $socials = Social::all();
        return view(
            'frontend.profileEdit',
            compact(
                'socials',
                'headerCategory',
                'user'
            )
        );
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $data = $request->all();
        if (isset($data['password'])) {
            $user->update($data);
        } else {
            $data1 = $request->except('password');
            $user->update($data1);
        }
        return redirect()->route('user');
    }
    public function favorit()
    {
        $id = Auth::id();
        $favorites = Favorite::where('user_id', $id)->get();

        $headerCategory = Category::all();

        $socials = Social::all();

        return view(
            'frontend.cart',
            compact(
                'socials',
                'favorites',
                'headerCategory'
            )
        );
    }
    public function order(Request $request)
    {
        $user_id = Auth::id();
        // Assuming $request->product_id, $request->amount, and $request->price_total are indexed arrays
        for ($i = 0; $i < count($request->product_id); $i++) {
            Order::create([
                'amount' => $request->amount[$i],
                'price_total' => $request->price_total[$i],
                'user_id' => $user_id,
                'product_id' => $request->product_id[$i]
            ]);
            $favorit = Favorite::where('product_id', $request->product_id[$i])->first();
            if ($favorit) {
                $favorit->delete();
            }
        }
        return back();
    }
    
    public function favoritstore(Request $request)
    {
        $user_id = Auth::id();
        $product_id = $request->product_id;
        $amount = $request->amount;
        Favorite::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'amount' => $amount
        ]);
        return back();
    }
    public function viewDeleteAccount()
    {
        $headerCategory = Category::all();

        $socials = Social::all();
        return view('frontend.deletAccount', compact('socials', 'headerCategory'));
    }


    public function deleteAccount(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        // Check if the user exists
        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'User not found.']);
        }

        // Verify the password
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->withErrors(['error' => 'Incorrect password.']);
        }

        // Proceed with deletion if the password is correct
        $user->delete();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Successfully deleted.');
    }
}
