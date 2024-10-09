<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        $tickets = Auth::user()->tickets;

        return view('tickets.view', compact('tickets'));
    }
    
     public function index()
    {
        $tickets = Auth::user()->tickets;

        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar el formulario
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'required|image',
        ]);

        // Subir la imagen
        $path = $request->file('img')->store('tickets', 'public');

        // Crear el ticket
        Tickets::create([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $path,
            'status' => 'activo',
            'tipo_solicitud' => $request-> tipo_solicitud,
            'equipo' => $request->equipo,
            'prioridad'=> 'Media',
            'user_id' => Auth::id(), // Asignar el ticket al usuario autenticado
        ]);

        // Redirigir al dashboard con un mensaje de éxito
        return redirect()->route('tickets.index')->with('success', 'Ticket creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id){
        $ticket = Tickets::findOrFail($id);

        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tickets $tickets)
    {
        //
    }
}
