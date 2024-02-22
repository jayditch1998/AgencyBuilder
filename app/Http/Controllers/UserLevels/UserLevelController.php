<?php

namespace App\Http\Controllers\UserLevels;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLevels\StoreUserLevelRequest;
use App\Http\Requests\UserLevels\UpdateUserLevelRequest;
use Illuminate\Http\Request;
Use App\Helpers\HttpResponseHelper;
use App\Models\UserLevelModel; 

class UserLevelController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreUserLevelRequest $request)
  {
    try {
      $validated = $request->validated();
      $userLevel = UserLevelModel::create($validated);
      return HttpResponseHelper::sucessWithData($userLevel->toArray());
    } catch (\Throwable $th) {
      return HttpResponseHelper::failedMessage($th->getMessage());
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
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
  public function update(UpdateUserLevelRequest $request, string $id)
  {
    try {
      $requestData = $request->all();
      $userLevel = UserLevelModel::findOrfail($id);
      $userLevel->update($requestData);
      return HttpResponseHelper::sucessWithData($userLevel->toArray());
    } catch (\Throwable $th) {
      return HttpResponseHelper::failedMessage($th->getMessage());
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
