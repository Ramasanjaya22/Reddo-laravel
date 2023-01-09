<?php

namespace App\Http\Controllers;

use App\Models\Quest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class QuestController extends Controller
{
    /**
     * Menampilkan daftar quest
     */
    public function index()
    {
        $json = File::get(resource_path('/resources/data/quests.json'));
        $data = json_decode($json, true);

        dd($data);

        return view('pages.dashboard.index')->with('quests', $data);
    }

    /**
     * Menampilkan detail quest
     */
    public function show($id)
    {
        $quest = Quest::find($id);

        if (!$quest) {
            return response()->json([
                'success' => false,
                'message' => 'Quest with id ' . $id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $quest
        ], 200);
    }

    /**
     * Menambah quest baru
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'reward' => 'required',
        ]);

        $quest = new Quest();
        $quest->title = $request->title;
        $quest->description = $request->description;
        $quest->reward = $request->reward;
        $quest->save();

        return response()->json([
            'success' => true,
            'data' => $quest
        ], 201);
    }

    /**
     * Menyunting informasi quest
     */
    public function update(Request $request, $id)
    {
        $quest = Quest::find($id);

        if (!$quest) {
            return response()->json([
                'success' => false,
                'message' => 'Quest with id ' . $id . ' not found'
            ], 400);
        }

        $updated = $quest->fill($request->all())->save();

        if ($updated) {
            return response()->json([
                'success' => true,
                'data' => $quest
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Quest could not be updated'
            ], 500);
        }
    }

    /**
     * Menghapus quest
     */
    public function delete($id)
    {
        $quest = Quest::find($id);

        if (!$quest) {
            return response()->json([
                'success' => false,
                'message' => 'Quest with id ' . $id . ' not found'
            ], 400);
        }

        if ($quest->delete()) {
            return response()->json([
                'success' => true,
                'message' => 'Quest deleted successfully'
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Quest could not be deleted'
            ], 500);
        }
    }
}
