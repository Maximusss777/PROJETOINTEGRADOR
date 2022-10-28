<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\Product;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=Menu::all();
              return view('menus.index',['menus' => $menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Menu::create([
          'name' => $data['name'],
          'establishment_id' => \Auth::user()->establishment_id,
          'description' =>$data['description'],
        'is_active' => $data['is_active']
      ]);
      return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        $addableProducts = Product::where('establishment_id',
                            $menu->establishment_id)
                            ->get();
        return view('menus.show',[
                    'menu'=> $menu,
                    'addableProducts'=> $addableProducts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
                return view('menus.edit', ['menu'=>$menu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
      $data = $request->all();
      $menu->update($data);
      return redirect()->route('menu.index');
        with($data['password']);

    }

    public function showPublic(Menu $menu)
    {
      return view('menus.menupublic', ['menu' => $menu]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
      $menu->delete();
      return redirect()->route('menu.index');
    }
}
