<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Employee;

class EmployeeController extends Controller
{
    	public function index() {
		$employees = Employee::all();
		return view('pages.employee-index', compact('employees'));
	}

	public function show($id) {
		$employee = Employee::findOrFail($id);
		return view('pages.employee-show', compact('employee'));
	}
	
	public function create() {
		return view('pages.employee-create');
	}

	public function store(Request $request) {
		
		
		Employee::create($request -> all());

		// Validation

		Validator::make($request -> all(), [
			'name' => 'required|min:3|max:50',
			'lastname' => 'required|min:3|max:50',
			'dateOfBirth' => 'required|date',
		]) -> validate();
		
		return redirect() -> route('employee-index');
	}

	public function edit($id) {
		$employee = Employee::findOrFail($id);
		return view('pages.employee-edit', compact('employee'));
	}

	public function update(Request $request, $id) {


		Employee::findOrFail($id) -> update($request -> all());
		
		// Validation

		Validator::make($request -> all(), [
			'name' => 'required|min:3|max:50',
			'lastname' => 'required|min:3|max:50',
			'dateOfBirth' => 'required|date',
		]) -> validate();

		return redirect() -> route('employee-show', $id);
	}
}
