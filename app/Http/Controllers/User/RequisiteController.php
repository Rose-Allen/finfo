<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequisite\UserRequisiteStoreRequest;
use App\Http\Requests\UserRequisite\UserRequisiteUpdateRequest;
use App\Models\UserRequisite;

class RequisiteController extends Controller
{
    public function index()
    {
        $userRequisites = UserRequisite::all();
        return view('personal.userRequisite.index', compact('userRequisites'));
    }

    public function create()
    {
        $user = auth()->user()->id;
        return view('personal.userRequisite.create', compact('user'));
    }

    public function store(UserRequisiteStoreRequest $request)
    {
        $data = $request->validated();
        UserRequisite::create($data);

        return redirect()->route('personal.user.requisite.index');
    }

    public function edit(UserRequisite $userrequisite)
    {
        return view('personal.userRequisite.edit', compact('userrequisite'));
    }

    public function update(UserRequisite $userrequisite, UserRequisiteUpdateRequest $request)
    {
        $data = $request->validated();
        $userrequisite->update($data);

        return redirect()->route('personal.user.requisite.index');
    }

    public function delete(UserRequisite $userrequisite)
    {
        $userrequisite->delete();

        return redirect()->back();
    }
}
