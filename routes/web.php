<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketsController;

use App\Http\Middleware\administrador;
use App\Http\Controllers\adminDashBoardController;
use App\Models\Tickets;
use Spatie\Permission\Models\Role;

//$role = Role::create(['name' => 'admin']);
//$role = Role::create(['name' => 'cliente']);

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware([administrador::class])->group(function () {
    Route::get('/dashboard', [adminDashBoardController::class, 'index'])->name('dashboard');
    Route::get('/admin/tickets', [adminDashBoardController::class, 'viewTickets'])->name('admin.tickets');
    Route::get('/admin/tickets/{id}', [adminDashBoardController::class, 'show'])->name('admin.show');
    Route::put('/admin/tickets/{id}/status', [adminDashBoardController::class, 'updateStatus'])->name('admin.updateStatus');
    Route::put('/admin/tickets/{id}/prioridad', [adminDashBoardController::class, 'updatePrioridad'])->name('admin.updatePrioridad');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user-dashboard', [TicketsController::class, 'view'])->name('user.dashboard');
    Route::get('/tickets', [TicketsController::class, 'index'])->name('tickets.index');
    Route::get('/tickets/create', [TicketsController::class, 'create'])->name('tickets.create');
    Route::get('/tickets/{id}', [TicketsController::class, 'show'])->name('tickets.show');
    Route::post('/tickets', [TicketsController::class, 'store'])->name('tickets.store');
});  

require __DIR__.'/auth.php';
