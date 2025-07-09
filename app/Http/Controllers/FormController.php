<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Submission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class FormController extends Controller
{
/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Display the form view.
     *
     * @return \Illuminate\View\View
     */

/*******  cdcdaf74-a04c-4281-a6ea-340ab3e52c5a  *******/
    public function show()
    {
        return view ('form');
    }

    public function submit(Request $request)
    {

          
        $validated = $request->validate([
            'name' => 'required|string|max:30',
            'age' => 'required|integer|min:18|max:100',
            'email' => 'required|email|max:255|unique:submissions,email|unique:users,email',
            'password' => 'required|string|min:4',
        ]);
         $user = User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    // 2ログイン
    Auth::login($user);
        
        $validated['password'] = Hash::make($validated['password']);
        $validated['user_id'] = $user->id;


        $submission=Submission::create($validated);
        return view ('thanks',compact('submission'));

    }

    public function list()
    {
        $submission = Submission::all();
        return view('users',['submissions' => $submission]);
    }

    public function edit($id)
    {
        $submission = Submission::findOrFail($id);
        return view('edit', ['submission' => $submission]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'age' => 'required|integer|min:18|max:100',
            'email' => 'required|email|max:255|unique:submissions,email,' . $id,
            'password' => 'nullable|string|min:4',
        ]);
        $submission = Submission::findOrFail($id);
        $submission-> name = $request->input('name');
        $submission-> age = $request->input('age');
        $submission-> email = $request->input('email');

        if ($request->filled('password')) {
            $submission->password = Hash::make($request->input('password'));
        }

        $submission->save();
        return redirect()->route('users.index')->with('success','ユーザー情報を更新しました。');
    }

    public function destroy($id)
    {
        $submission = Submission::findOrFail($id); 
        $user = User::findOrFail($submission->user_id);
        
        $user->delete();


        return redirect()->route('users.index')->with('success','ユーザー情報を削除しました');
    }
}