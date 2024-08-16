<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Lead;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'manager') {
            $projects = Project::with('lead', 'manager')
                ->where('manager_id', auth()->id())
                ->get();
        } else if (auth()->user()->role === 'staff') {
            $projects = Project::with('lead', 'manager')
                ->where('created_by', auth()->id())
                ->get();
        } else {
            $projects = Project::with('lead', 'manager')->get();
        }
        return view('dashboard.projects.index', compact('projects'));
    }

    public function create()
    {
        $leads = Lead::all();
        $managers = User::where('role', 'manager')->get();
        return view('dashboard.projects.create', compact('leads', 'managers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lead_id' => 'required|exists:leads,id',
            'manager_id' => 'required|exists:users,id',
        ]);

        $validatedData['created_by'] = auth()->id();

        Project::create($validatedData);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $leads = Lead::all();
        $managers = User::all();
        return view('projects.edit', compact('project', 'leads', 'managers'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'lead_id' => 'exists:leads,id',
            'manager_id' => 'exists:users,id'
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    public function approve(Project $project)
    {
        $project->update(['project_status' => 'approved']);
        $existingCustomer = Customer::where('lead_id', $project->lead_id)->first();
        if (!$existingCustomer) {
            Customer::create([
                'lead_id' => $project->lead_id,
            ]);
        }
        return redirect()->route('projects.index')->with('success', 'Project approved successfully.');
    }

    public function reject(Project $project)
    {
        $project->update(['project_status' => 'rejected']);
        return redirect()->route('projects.index')->with('success', 'Project rejected successfully.');
    }
}
