<?php
namespace App\Http\Controllers;

use App\Models\Converge;
use App\Models\Publicacione;
use Carbon\Doctrine\DateTimeType;
use Illuminate\Http\Request;

class ConvergeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Blog = Converge::all();

        return view('sistema.blog.index', compact('Blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validar los campos del formulario
        $request->validate([
            'NombreN' => 'required',
            'DescripcionN' => 'required',
            'Imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'Video' => 'nullable|mimetypes:video/avi,video/mp4,video/mpeg,video/quicktime|max:50000',
            'Opcion' => 'required',
        ]);

        // Procesar y almacenar la imagen
        if ($request->hasFile('Imagen')) {
            $imagen = $request->file('Imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $rutaImagen = public_path('imagenesBlog/img/');
            $imagen->move($rutaImagen, $nombreImagen);
        } else {
            return redirect()->back()->withErrors(['Imagen' => 'Debe seleccionar una imagen.'])->withInput();
        }

        // Procesar y almacenar el video si se proporciona
        $rutaVideo = null;
        if ($request->hasFile('Video')) {
            $video = $request->file('Video');
            $nombreVideo = time() . '.' . $video->getClientOriginalExtension();
            $rutaVideo = 'videos/videos/' . $nombreVideo;
            $video->move(public_path('videos/videos'), $nombreVideo);
        }

        // Guardar los demás campos en la base de datos
        $blogs = new Converge;
        $blogs->opcion = $request->input('Opcion');
        $blogs->nombre_noticia = $request->input('NombreN');
        $blogs->descripcion_noticia = $request->input('DescripcionN');
        $blogs->foto = $nombreImagen;
        $blogs->video = $rutaVideo; // Guardar la ruta del video si se proporciona
        $blogs->created_at = now();
        $blogs->save();

        return redirect()->back()->with('success', 'Noticia guardada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Converge $converge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Converge $converge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NombreE' => 'required',
            'DescripcionE' => 'required',
            'ImagenE' => $request->hasFile('ImagenE') ? 'image|mimes:jpeg,png,jpg' : '',
            'VideoE' => $request->hasFile('VideoE') ? 'mimetypes:video/avi,video/mp4,video/mpeg,video/' : '',
            'OpcionE' => 'required',
        ]);

        $blogs = Converge::find($id);

        // Verificar y procesar la nueva imagen
        if ($request->hasFile('ImagenE')) {
            $imagen = $request->file('ImagenE');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $rutaImagen = public_path('imagenesBlog/img/');

            // Mover la nueva imagen a la carpeta de destino
            $imagen->move($rutaImagen, $nombreImagen);

            // Actualizar el campo de imagen en el modelo
            $blogs->foto = $nombreImagen;
        }

        // Verificar y procesar el nuevo video
        if ($request->hasFile('VideoE')) {
            $video = $request->file('VideoE');
            $nombreVideo = time() . '.' . $video->getClientOriginalExtension();
            $rutaVideo = $video->storeAs('videos', $nombreVideo, 'public');

            // Actualizar el campo de video en el modelo
            $blogs->video = $rutaVideo;
        }

        // Actualizar los demás campos en la base de datos
        $blogs->nombre_noticia = $request->input('NombreE');
        $blogs->descripcion_noticia = $request->input('DescripcionE');
        $blogs->opcion = $request->input('OpcionE');
        $blogs->update($request->except(['_token', '_method', 'ImagenE', 'VideoE']));

        return redirect()->back()->with('success', 'Noticia actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idNoticia)
    {
        $blog = Converge::find($idNoticia);

        if (!$blog) {
            return redirect()->back()->with('error', 'Noticia no encontrada.');
        }

        // Construcción de rutas
        $imagenRuta = public_path('imagenesBlog/img/' . $blog->foto);
        $videoRuta = public_path('public/videos/videos/' . $blog->video);

        if ($blog->foto && file_exists($imagenRuta)) {
            if (unlink($imagenRuta)) {
                echo 'Imagen eliminada exitosamente.';
            } else {
                echo 'Error al eliminar la imagen.';
            }
        }

        if ($blog->video && file_exists($videoRuta)) {
            if (unlink($videoRuta)) {
                echo 'Imagen eliminada exitosamente.';
            } else {
                echo 'Error al eliminar la imagen.';
            }
        }

        $blog->delete();

        return redirect()->back()->with('success', 'Noticia eliminada exitosamente.');
    }
}