<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminDashBoardController extends Controller
{
    public function index(){

        return view('dashboard');

    }

    public function viewTickets(){
        $tickets = Tickets::with('user')->get();

        return view('admin.tickets', compact('tickets'));
    }

    public function show($id){
        $ticket = Tickets::findOrFail($id);

        return view('admin.show', compact('ticket'));
    }

    public function updateStatus(Request $request, $id)
    {
        // Validar el estado
        $request->validate([
            'status' => 'required|in:activo,pendiente,en proceso,cerrado',
        ]);

        // Encontrar el ticket por su ID
        $ticket = Tickets::findOrFail($id);

        // Actualizar el estado del ticket
        $ticket->status = $request->status;
        $ticket->save();

        // Redirigir de vuelta a la página del ticket con un mensaje de éxito
        return redirect()->route('admin.show', $ticket->id)->with('success', 'Estado del ticket actualizado correctamente');
    }
    public function updatePrioridad(Request $request, $id)
    {
        // Validar el estado
        $request->validate([
            'prioridad' => 'required|in:media,alta,baja',
        ]);

        // Encontrar el ticket por su ID
        $ticket = Tickets::findOrFail($id);

        // Actualizar el estado del ticket
        $ticket->prioridad = $request->prioridad;
        $ticket->save();

        // Redirigir de vuelta a la página del ticket con un mensaje de éxito
        return redirect()->route('admin.show', $ticket->id)->with('success', 'Prioridad del ticket actualizado correctamente');
    }

}
