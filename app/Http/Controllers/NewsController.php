<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = DB::table('news')->where('is_publish', true)->whereNull('deleted_at')->orderBy('created_at')->get();

        return view('berita', [
            'news' => $news
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function indexAdmin()
    {
        $news = DB::table('news')->orderBy('created_at')->get();
        $news = News::orderBy('created_at')->get();

        return view('admin.news.index', [
            'news' => $news,
            'active' => 'berita'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'published_date' => 'required',
            'is_publish' => 'required',
            'summary' => 'required',
            'content' => 'required',
        ]);

        if ($request->file('cover_path')){
            $validatedData['cover_path'] = $request->file('cover_path')->store(News::COVER_PATH);
        }

        $validatedData['user_id'] = 1;
        $validatedData['slug'] = $validatedData['title'];
        // $validatedData['slug'] = function (array $attributes) {
        //     return $attributes['title'];
        // };

        News::create($validatedData);

        return redirect()->route('admin.news')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news): View
    {
        return view('detail-berita', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->is_publish = false;
        $news->save();

        $news->delete();

        return redirect()->route('admin.news')->with('success', 'Berita berhasil dihapus!');
    }

    public function togglePublish(News $news)
    {
        $news->is_publish = ! $news->is_publish;
        $news->save();

        return redirect()->back();
    }
}
