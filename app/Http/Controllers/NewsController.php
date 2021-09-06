<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        //return view('NewsTemplate');
    }

    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'preview' => 'required',
            'text' => 'required',
            'tags' => 'required',
        ]);

        $news = new News([
            'title' => $request->get('title'),
            'preview' => $request->get('preview'),
            'text' => $request->get('text'),
            'tags' => $request->get('tags'),
        ]);

        $news->save();

        return redirect('/', 'Новость добавлена!');
    }

    public function show()
    {
        if (isset($_GET['id'])) {
            $post = News::find($_GET['id']);
        } else {
            $query = $_GET['q'];
            $post = News::where('title', 'LIKE', "%$query%")->first();
        }

        return view('NewsTemplate', compact('post'));
    }

    public function delete()
    {
        $id = $_GET['id'];
        News::find($id)->delete();

        return redirect('/', 'Новость удалена!');
    }
}
