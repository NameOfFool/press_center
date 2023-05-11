<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\INN;
use App\Models\KPP;
use App\Models\Organisation;
use App\Models\Passport;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function createOrganisation()
    {
        return view("profile.create-organisation");
    }

    public function createOrganisationPost(Request $request):RedirectResponse
    {
        $organisation = Organisation::create([
            "organisation_name" => $request->organisation_name,
            "user_id" => Auth::user()->id,
            "organisation_email" => $request->organisation_email
        ]);
        $organisation->kpp()->create([
            "id" => $organisation->id,
            "KPP" => $request->KPP
        ]);
        return redirect(route("profile.edit"));
    }

    public function editInn(Request $request)
    {
        $validated = $request->validate([
            'inn' => 'required|min:12'
        ]);
        $inn = INN::updateOrCreate(
            ["id" => $request->user()->id],
            ["INN" => $request->inn]
        );
        return \redirect(route("profile.edit"));
    }

    public function editPassport(Request $request)
    {
        $validated = $request->validate([
            "birth_data" => "required|date",
                "sex" =>"required|max:1",
                "series" =>"required|max:4|numeric",
                "number"=>"required|max:6|numeric",
                "date_of_issue"=>"required|date",
                "issued_by"=>"required",
                "code"=>"required",
        ]);
        Passport::updateOrCreate(
            ["id" => $request->user()->id],
            [
                "birth_data" => $request->birth_data,
                "sex" =>$request->sex,
                "series" =>$request->series,
                "number"=>$request->number,
                "date_of_issue"=>$request->date_of_issue,
                "issued_by"=>$request->issued_by,
                "code"=>$request->code,
            ]
        );
    }
    public function saveProfile(Request $request){

    }
}
