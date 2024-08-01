<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Auth;
use Alert;
use DB;
use Session;
use Cookie;

use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function addToCart(Request $request)
    {
        if (Auth::guest()) {
            Alert::warning('Please login first to add to the basket', 'Sorry');
            return redirect()->back();
        } elseif (Auth::check()) {
            $id = $request->get('id');
            $jml = $request->get('jumlah');
            $count = Keranjang::where('produk_id', '=', $id)->where('user_id', '=', Auth::user()->id)->count();
            if ($count) {
                Alert::warning('The product already in your cart', 'Sorry');
                return redirect()->back();
            }
            $keranjang = new Keranjang;
            $keranjang->user_id = Auth::user()->id;
            $keranjang->produk_id = $id;
            $keranjang->jumlah = $jml;
            $keranjang->save();
            Alert::success('Data successfully saved to cart', 'Good Job')->autoclose(1500);
            return redirect('keranjang');
        }

        // $this->validate($request, [
        //         'id' => 'required|exists:products,id',
        //         'quantity' => 'required|integer|min:1'
        //     ]);

        // $product = Product::find($request->get('id'));
        // $quantity = $request->get('quantity');
        // $cart = $request->cookie('cart', []);

        // if (array_key_exists($product->id, $cart)) {
        //     $quantity += $cart[$product->id];
        // }

        // $cart[$product->id] = $quantity;
        // return redirect()->back()->withCookie(cookie()->forever('cart', $cart));
    }

    public function index()
    {
        // $cartItems = Keranjang::where('user_id', Auth::id())->with('produk')->get();
        // $subTotal = 0;

        if (Auth::guest()) {
            Alert::warning('Please login first to see your item in the basket', 'Sorry');
            return redirect()->back();
        } else {
            $keranjang = DB::table('keranjangs')
                ->join('produks', 'produks.id', '=', 'keranjangs.produk_id')
                ->join('users', 'keranjangs.user_id', '=', 'users.id')
                ->select('keranjangs.*', 'nama_produk as produk_name', 'produks.harga', 'produks.gambar')
                ->where('user_id', Auth::user()->id)
                ->get();
            // dd($cart);

            $harga = DB::table('keranjangs')
                ->join('produks', 'produks.id', '=', 'keranjangs.produk_id')
                ->join('users', 'keranjangs.user_id', '=', 'users.id')
                ->select(DB::raw('SUM(produks.harga*keranjangs.jumlah) as total'))
                ->where('user_id', Auth::user()->id)
                ->first();

            // dd($price);
            return view('keranjang', compact('keranjang', 'harga'));
        }
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
    public function add(Request $request)
    {
        //validasi
        // $validated = $request->validate([
        //     'produk_id' => 'required',
        //     'ukuran' => 'required',
        //     'jumlah' => 'required',
        // ]);

        // $cek_keranjangs = Keranjang::where('user_id', auth()->user()->id)->where('produk_id', $request->produk_id)->where('status', 'keranjang')->first();
        // if (!empty($cek_keranjangs)) {
        //     $keranjangs = Keranjang::where('user_id', auth()->user()->id)->where('produk_id', $request->produk_id)->where('status', 'keranjang')->first();
        //     $keranjangs->jumlah += $request->jumlah;
        //     $harga = ($keranjangs->produk->harga * $request->jumlah);
        //     $keranjangs->total_harga += $harga;
        // } else {
        //     $keranjangs = new Keranjang();
        //     $keranjangs->user_id = auth()->user()->id;
        //     $keranjangs->produk_id = $request->produk_id;
        //     $keranjangs->jumlah = $request->jumlah;
        //     $harga = ($keranjangs->produk->harga) - $diskon;
        //     $keranjangs->total_harga = ($harga * $keranjangs->jumlah);

        // }


        $produk = [
            'id' => $request->id,
            'name' => $request->name,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ];

        $keranjangs->save();
        return back()->with('berhasil', 'Data has been added');
    }

    /**
     * Display the specified resource.
     */
    public function delete($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();
        Alert::success('Data successfully deleted', 'Good Job')->autoclose(1500);
        return view('keranjang', compact('keranjang'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function updateCart(Keranjang $keranjang, Request $request)
    {
        // $keranjang = Keranjang::Find($keranjang->slug);
        // dd($keranjang);

        // Misalnya, untuk mengupdate quantity produk di keranjang
        $newJumlah = $request->input('jumlah');

        // Logika untuk update produk di keranjang
        // Contoh sederhana:
        \Keranjang::update($produkId, [
            'jumlah' => $newJumlah,
        ]);

        return redirect()->back()->with('success', 'Produk berhasil diupdate di keranjang.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $userId = Auth::id();
        $request->validate([
            'jumlah' => 'required|integer|min:1',
        ]);

        $keranjang = Keranjang::where('user_id', $userId)->where('id', $id)->first();

        if ($keranjang) {
            $keranjang->jumlah = $request->jumlah;
            $keranjang->save();

            return redirect()->route('keranjang')->with('success', 'Jumlah produk berhasil diupdate.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keranjang $keranjang)
    {
        $keranjangs = Keranjang::findOrFail($id);
        $keranjangs->delete();
        return back()->with('berhasil', 'Data has been deleted');
    }
}
