<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class TareaController extends Controller
{
    private function headers() {
        return ['Authorization' => 'Bearer ' . Session::get('token')];
    }

    public function index() {
        $tareas = Http::withHeaders($this->headers())->get(env('TAREAS_API_URL') . '/api/tareas')->json();
        return view('tareas.index', compact('tareas'));
    }

    public function create() {
        return view('tareas.create');
    }

    public function store(Request $request) {
        Http::withHeaders($this->headers())->post(env('TAREAS_API_URL') . '/api/tareas', $request->all());
        return redirect()->route('tareas.index');
    }

    public function show($id) {
        $tarea = Http::withHeaders($this->headers())->get(env('TAREAS_API_URL') . "/api/tareas/$id")->json();
        return view('tareas.show', compact('tarea'));
    }

    public function edit($id) {
        $tarea = Http::withHeaders($this->headers())->get(env('TAREAS_API_URL') . "/api/tareas/$id")->json();
        return view('tareas.edit', compact('tarea'));
    }

    public function update(Request $request, $id) {
        Http::withHeaders($this->headers())->put(env('TAREAS_API_URL') . "/api/tareas/$id", $request->all());
        return redirect()->route('tareas.index');
    }

    public function destroy($id) {
        Http::withHeaders($this->headers())->delete(env('TAREAS_API_URL') . "/api/tareas/$id");
        return redirect()->route('tareas.index');
    }
}
