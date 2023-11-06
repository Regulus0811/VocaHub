<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // 회원가입
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|unique:users',
            'nickname' => 'required|unique:users',
            'password' => 'required',
            'birthday' => 'required|date',
        ]);

        $user = new User;
        $user->user_id = $request->user_id;
        $user->nickname = $request->nickname;
        $user->password = Hash::make($request->password);
        $user->birthday = $request->birthday;
        $user->isAdmin = false;
        $user->save();

        return redirect('/signin')->with('success', '회원가입이 완료되었습니다.');
    }

    // 아이디 & 닉네임 중복 체크
    public function check(Request $request)
    {
        $type = $request->input('type');
        $value = $request->input('value');

        // 타입에 따라 id 또는 nickname을 확인합니다.
        $column = $type === 'user_id' ? 'user_id' : 'nickname';

        // users 테이블에서 해당 값이 있는지 확인합니다.
        $exists = User::where($column, $value)->exists();

        return response()->json(['exists' => $exists]);
    }

    // 로그인 로직
    public function login(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('user_id', $request->id)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            return redirect('/');
        } else {
            return redirect('/signin')->with('message', '잘못된 아이디 또는 비밀번호 입니다');
        }
    }
}