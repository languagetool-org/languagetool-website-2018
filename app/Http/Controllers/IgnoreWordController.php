<?php

namespace App\Http\Controllers;

use App\IgnoreWord;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IgnoreWordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        $user = Auth::user();
        if (!empty($keyword)) {
            $ignorewords = IgnoreWord::where('user_id', $user->id)->where('ignore_word', 'like', '%'. $keyword . '%')->paginate($perPage);
        } else {
            $ignorewords = IgnoreWord::where('user_id', $user->id)->paginate($perPage);
        }

        return view('users.ignore-words.index', compact('ignorewords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('users.ignore-words.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $user = Auth::user();

        IgnoreWord::create([
            'ignore_word'    => $requestData['ignore_word'],
            'user_id'        => $user->id,
        ]);

        return redirect('ignore-word')->with('flash_message', 'IgnoreWord added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $ignoreword = IgnoreWord::findOrFail($id);

        return view('users.ignore-words.show', compact('ignoreword'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $ignoreword = IgnoreWord::findOrFail($id);

        return view('users.ignore-words.edit', compact('ignoreword'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();

        $ignoreword = IgnoreWord::findOrFail($id);
        $ignoreword->update($requestData);

        return redirect('ignore-word')->with('flash_message', 'IgnoreWord updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        IgnoreWord::destroy($id);

        return redirect('ignore-word')->with('flash_message', 'IgnoreWord deleted!');
    }
}
