<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
class ClienteController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index()
  {
    $posts = Cliente::all();
    return view('posts.index', compact('posts'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
   */
  public function store(Request $request)
  {
    $request->validate([
      'nombre' => 'required|max:255',
      'email' => 'required',
    ]);
    Cliente::create($request->all());
    return redirect()->route('posts.index')
      ->with('success', 'Post created successfully.');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  int  $id
   * @return IlluminateHttpResponse
   */
  public function update(Request $request, $id)
  {
    $request->validate([
      'nombre' => 'required|max:255',
      'email' => 'required',
    ]);
    $post = Cliente::find($id);
    $post->update($request->all());
    return redirect()->route('posts.index')
      ->with('success', 'Post updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return IlluminateHttpResponse
   */
  public function destroy($id)
  {
    $post = Cliente::find($id);
    $post->delete();
    return redirect()->route('posts.index')
      ->with('success', 'Post deleted successfully');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return IlluminateHttpResponse
   */
  public function create()
  {
    return view('posts.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return IlluminateHttpResponse
   */
  public function show($id)
  {
    $post = Cliente::find($id);
    return view('posts.show', compact('post'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return IlluminateHttpResponse
   */
  public function edit($id)
  {
    $post = Cliente::find($id);
    return view('posts.edit', compact('post'));
  }
}