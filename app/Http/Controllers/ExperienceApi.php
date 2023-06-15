<?php

namespace App\Http\Controllers;

use App\Models\Experiences;
use Illuminate\Http\Request;
use App\Http\Requests\StoreExperience;
use App\Http\Requests\UpdateExperience;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ExperienceResource;

class ExperienceApi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ExperienceResource::collection(Experiences::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExperience $request)
    {
        $exp = Experiences::create($request->validated());
        return ExperienceResource::make($exp);
    }

    /**
     * Display the specified resource.
     */
    public function show(Experiences $experience_api)
    {
        return ExperienceResource::make($experience_api);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExperience $request, Experiences $experience_api)
    {
        $experience_api->update($request->validated());
        return ExperienceResource::make($experience_api);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experiences $experience_api)
    {
        $experience_api->delete();
        return response()->noContent();
    }
}