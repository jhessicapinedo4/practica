<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // Obtener los responsables ordenados por creación
    $responsables = Responsable::orderBy("created_at", "DESC")->paginate(10);

    // Pasar los responsables a la vista
    return view('responsables.index', [
      "responsables" => $responsables
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('responsables.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // Validar los datos del formulario
    $data = $request->validate([
      'nombre' => 'required|string',
      'cargo' => 'required|string',
      'telefono' => 'required|string',
      'correo' => 'required|email',
    ]);

    // Crear el responsable en la base de datos
    Responsable::create($data);

    return to_route('responsables.create')->with('success', 'Responsable registrado satisfactoriamente');
  }

  /**
   * Display the specified resource.
   */
  public function show(Responsable $responsable)
  {
    return view('responsables.show', [
      "responsable" => $responsable
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Responsable $responsable)
  {
    return view('responsables.edit', [
      "responsable" => $responsable
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Responsable $responsable)
  {
    $data = $request->validate([
      'nombre' => 'required|string',
      'cargo' => 'required|string',
      'telefono' => 'required|string',
      'correo' => 'required|email',
    ]);

    // Actualizar los datos del responsable
    $responsable->update($data);

    return to_route('responsables.index')->with('success', 'Responsable editado satisfactoriamente');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Responsable $responsable)
  {
    $responsable->delete();

    return to_route('responsables.index')->with('success', 'Responsable eliminado correctamente');
  }
}
