<?php

namespace App\Http\Controllers;

use App\Models\Mantenimiento;
use Illuminate\Http\Request;

use App\Models\Equipo;
use App\Models\Responsable;

class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    // Obtener todos los mantenimientos con relaciones cargadas para equipo y responsable
    $mantenimientos = Mantenimiento::with(['equipo', 'responsable'])->orderBy("created_at", "DESC")->paginate(10);

    // Pasar los datos a la vista
    return view('mantenimientos.index', [
      'mantenimientos' => $mantenimientos
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    $equipos = Equipo::all();
    $responsables = Responsable::all();

    return view('mantenimientos.create', [
      'equipos' => $equipos,
      'responsables' => $responsables
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $data = $request->validate([
      'id_equipo' => 'required|exists:equipos,id',
      'id_responsable' => 'required|exists:responsables,id',
      'fecha_mantenimiento' => 'required|date',
      'tipo_mantenimiento' => 'required|string',
      'descripcion' => 'required|string',
      'costo' => 'required|numeric',
    ]);

    // Crear el mantenimiento en la base de datos
    Mantenimiento::create($data);

    return to_route('mantenimientos.create')->with('success', 'Mantenimiento registrado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
  public function show(Mantenimiento $mantenimiento)
  {
    return view('mantenimientos.show', [
      'mantenimiento' => $mantenimiento
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Mantenimiento $mantenimiento)
  {
    // Obtener los equipos y responsables para el formulario de edición
    $equipos = Equipo::all();
    $responsables = Responsable::all();

    return view('mantenimientos.edit', [
      'mantenimiento' => $mantenimiento,
      'equipos' => $equipos,
      'responsables' => $responsables
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Mantenimiento $mantenimiento)
  {
    // Validar los datos del formulario
    $data = $request->validate([
      'id_equipo' => 'required|exists:equipos,id',
      'id_responsable' => 'required|exists:responsables,id',
      'fecha_mantenimiento' => 'required|date',
      'tipo_mantenimiento' => 'required|string',
      'descripcion' => 'required|string',
      'costo' => 'required|numeric',
    ]);

    // Actualizar los datos del mantenimiento
    $mantenimiento->update($data);

    return to_route('mantenimientos.index')->with('success', 'Mantenimiento editado satisfactoriamente');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Mantenimiento $mantenimiento)
  {
    // Eliminar el mantenimiento
    $mantenimiento->delete();

    return to_route('mantenimientos.index')->with('success', 'Mantenimiento eliminado correctamente');
  }
}