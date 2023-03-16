<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Podcast;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\Rule;

class PodcastController extends Controller
{
    // Show All Podcasts
    public function index(Request $request): Factory|View|Application
    {
        return view('podcasts.index', [
            'podcasts' => Podcast::latest()->filter(request(['tag', 'search']))->paginate(8)
        ]);
    }

    // Show Single Podcast
    public function show(Podcast $podcast, Comment $comments): Factory|View|Application
    {

        $comments = Comment::all();

        return view('podcasts.show', [
            'podcast' => $podcast,
            'comments' => $comments
        ]);
    }

    // Show create Form
    public function create(): Factory|View|Application
    {
        return view('podcasts.create');
    }

    // Store Podcast Data
    public function store(Request $request): Redirector|Application|RedirectResponse
    {

        $formFields = $request->validate([
            'title' => 'required',
            'host' => ['required', Rule::unique('podcasts', 'host')],
            'location' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('file_name')) {
            $formFields['file_name'] = $request->file('file_name')->store('sounds', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Podcast::create($formFields);

        return redirect('/')->with('success', 'Podcast added successfully');
    }

    // Show Edit Form
    public function edit(Podcast $podcast): Factory|View|Application
    {
        return view('podcasts.edit', ['podcast' => $podcast]);
    }

    // Update Podcast Data
    public function update(Request $request, Podcast $podcast): RedirectResponse
    {

        // Logged-in user has to be owner
        if ($podcast->user_id != auth()->id()) {
            abort(403, "Unauthorized Action");
        }

        $formFields = $request->validate([
            'title' => 'required',
            'host' => ['required'],
            'location' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        if ($request->hasFile('file_name')) {
            $formFields['file_name'] = $request->file('file_name')->store('sounds', 'public');
        }

        $podcast->update($formFields);

        return back()->with('success', 'Podcast updated successfully');
    }

    // Delete Podcast
    public function destroy(Podcast $podcast): Redirector|Application|RedirectResponse
    {
        // Logged-in user has to be the owner
        if ($podcast->user_id != auth()->id()) {
            abort(403, "Unauthorized Action");
        }

        $podcast->delete();

        return redirect('/')->with('success', 'Podcast deleted successfully');
    }

    // Manage Podcasts
    public function manage(): Factory|View|Application
    {
        return view('podcasts.manage', ['podcasts' => auth()->user()->podcasts()->get()]);
    }
}
