<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Employee;
use App\Task;
use App\Typology;

class TypologyController extends Controller
{
    public function index() {
		$typologies = Typology::all();
		return view('pages.typology-index', compact('typologies'));
	}

	public function show($id) {
		$typology = Typology::findOrFail($id);
		return view('pages.typology-show', compact('typology'));
	}

	public function create() {
		$tasks = Task::all();
		return view('pages.typology-create', compact('tasks'));
	}

	public function store(Request $request) {
		

		$data = $request -> all();

		// Validation
		Validator::make($request -> all(), [
			'name' => 'required|min:2|max:20',
			'description' => 'required|min:5|max:200',
		]) -> validate();

		$typology = Typology::create($data);
		$tasks = Task::findOrFail($data['tasks']);
		$typology -> tasks() -> attach($tasks);
	   
		return redirect() -> route('typology-index');
	}

	public function edit($id) {
		$typology = Typology::findOrFail($id);
		$tasks = Task::all();
		return view('pages.typology-edit', compact('typology', 'tasks'));
	}

	public function update(Request $request, $id) {
		
	   
		$data = $request -> all();

	   Validator::make($request -> all(), [
			'name' => 'required|min:2|max:20',
			'description' => 'required|min:5|max:200',
		]) -> validate();

		$typology = Typology::findOrFail($id);
		$typology -> update($data);
		$tasks = Task::findOrFail($data['tasks']);
		$typology -> tasks() -> sync($tasks);

		

		return redirect() -> route('typology-show', $id);
	}
}
