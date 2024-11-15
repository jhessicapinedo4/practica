<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //para mostrar los datos en la tabla de index
    $equipos = Equipo::orderBy("created_at", "DESC")->paginate(10);

    //lo pasamos a la vista
    return view('equipos.index', [
      "equipos" => $equipos
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('equipos.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // Validamos los datos del formulario
    $data = $request->validate([
      'nombre' => 'required|string',
      'tipo' => 'required|string',
      'estado' => 'required|string',
      'fecha_adquisicion' => 'required|date'
    ]);

    // Procesamos la imagen si es necesario (si aplica)
    $imageName = null;
    if ($request->imagen) {
      $imageObject = $request->imagen;

      // Obtener extensión del archivo
      $imageExtension = $imageObject->getClientOriginalExtension();
      $newImageName = time() . "." . $imageExtension;

      // Guardamos la imagen en una ruta pública
      $imageObject->move(public_path("images"), $newImageName);

      $imageName = $newImageName;
    }

    // Asignamos la imagen, si existe
    $data['imagen'] = $imageName;

    // Creamos el nuevo equipo en la base de datos
    Equipo::create($data);

    // Redirigimos con un mensaje de éxito
    return to_route('equipos.create')->with('success', 'Equipo registrado satisfactoriamente');
  }

  /**
   * Display the specified resource.
   */
  public function show(Equipo $equipo)
  {
    return view('equipos.show', [
      "equipo" => $equipo
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Equipo $equipo)
  {
    return view('equipos.edit', [
      "equipo" => $equipo
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Equipo $equipo)
  {
    // Validación de los datos
    $data = $request->validate([
      'nombre' => 'required|string',
      'tipo' => 'required|string',
      'estado' => 'required|string',
      'fecha_adquisicion' => 'required|date',
    ]);

    // Procesamos la imagen solo si se sube una nueva
    if ($request->hasFile('imagen')) {
      // Si el equipo ya tiene una imagen, eliminamos la antigua
      if ($equipo->imagen) {
        $oldImagePath = public_path("images/{$equipo->imagen}");
        if (file_exists($oldImagePath)) {
          unlink($oldImagePath); // Borramos la imagen antigua
        }
      }

      // Guardamos la nueva imagen
      $imageObject = $request->imagen;
      $imageExtension = $imageObject->getClientOriginalExtension();
      $newImageName = time() . "." . $imageExtension;
      $imageObject->move(public_path("images"), $newImageName);

      // Asignamos la nueva imagen al array de datos
      $data['imagen'] = $newImageName;
    } else {
      // Si no se sube una nueva imagen, mantenemos la imagen anterior
      $data['imagen'] = $equipo->imagen;
    }

    // Actualizamos los datos del equipo
    $equipo->update($data);

    // Redirigimos con un mensaje de éxito
    return to_route('equipos.index')->with('success', 'Equipo editado satisfactoriamente');
  }


  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Equipo $equipo)
  {
    $equipo->delete();
    return to_route('equipos.index')->with('success', 'Equipo eliminado correctamente');
  }
}
