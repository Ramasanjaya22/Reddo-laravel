<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(Request $request)
    {
        $communities = Community::all();

        return view('communities.index', [
            'communities' => $communities,
        ]);
    }

    public function create(Request $request)
    {
        return view('communities.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:communities|max:255',
            'description' => 'required',
        ]);

        $community = new Community();
        $community->name = $request->input('name');
        $community->description = $request->input('description');
        $community->save();

        return redirect()->route('communities.index');
    }

    public function show(Request $request, $id)
    {
        $community = Community::findOrFail($id);
        $posts = $community->posts()->paginate(20);

        return view('communities.show', [
            'community' => $community,
            'posts' => $posts,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $community = Community::findOrFail($id);

        return view('communities.edit', [
            'community' => $community,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:communities|max:255',
            'description' => 'required',
        ]);

        $community = Community::findOrFail($id);
        $community->name = $request->input('name');
        $community->description = $request->input('description');
        $community->save();

        return redirect()->route('communities.index');
    }

    public function destroy(Request $request, $id)
    {
        $community = Community::findOrFail($id);
        $community->delete();

        return redirect()->route('communities.index');
    }
}
