<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Employee;
use App\Task;
use App\Typology;

class TaskController extends Controller
{
    public function index() {
		$tasks = Task::all();
		return view('pages.task-index', compact('tasks'));
	}

	public function show($id) {
		$task = Task::findOrFail($id);
		return view('pages.task-show', compact('task'));
	}

	public function create() {
		$employees = Employee::all();
		$typologies = Typology::all();
		return view('pages.task-create', compact('employees', 'typologies'));
	}

	public function store(Request $request) {

		$data = $request -> all();

		// Validation

		Validator::make($request -> all(), [
			'title' => 'required|min:5|max:50',
			'description' => 'required|min:5|max:200',
			'priority' => 'required|integer|min:1|max:5',
		]) -> validate();

		$task = Task::make($data);
		$employee = Employee::findOrFail($request -> get('employee_id'));
		$task -> employee() -> associate($employee);
		$task -> save();

		$typologies = Typology::findOrFail($data['typologies']);
		$task -> typologies() -> attach($typologies);

		return redirect() -> route('task-index');
	}

	public function edit($id) {
		$task = Task::findOrFail($id);
		$typologies = Typology::all();
		$employees = Employee::all();
		return view('pages.task-edit', compact('task','employees', 'typologies'));
	}

	public function update(Request $request, $id) {
		
		$data = $request -> all();

		// Validation

		Validator::make($request -> all(), [
			'title' => 'required|min:5|max:50',
			'description' => 'required|min:5|max:200',
			'priority' => 'required|integer|min:1|max:5',
		]) -> validate();

		$task = Task::findOrFail($id);
		$employee = Employee::findOrFail($data['employee_id']);
		$task -> update($data);
		$task -> employee() -> associate($employee);
		$task -> save();

		$typologies = Typology::findOrFail($data['typologies']);
		$task -> typologies() -> sync($typologies);

		return redirect() -> route('task-show', $id);

	}
}
