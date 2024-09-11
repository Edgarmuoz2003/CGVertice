<?php

namespace App\Http\Controllers;

use App\Models\Converge;
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
        $request->validate([
            'NombreN' => 'required',
            'DescripcionN' => 'required',
            'Imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'Video' => 'nullable|mimetypes:video/avi,video/mp4,video/mpeg,video/quicktime|max:50000',
            'Opcion' => 'required',
            'Autor' => 'required|string|max:255', // Validar autor
            'Url' => 'nullable|url' // URL opcional
        ]);

        // Procesar imagen y video
        $imagen = $request->file('Imagen');
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
        $imagen->move(public_path('imagenesBlog/img/'), $nombreImagen);

        $rutaVideo = null;
        if ($request->hasFile('Video')) {
            $video = $request->file('Video');
            $nombreVideo = time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('videos/videos'), $nombreVideo);
            $rutaVideo = 'videos/videos/' . $nombreVideo;
        }

        // Guardar noticia
        Converge::create([
            'opcion' => $request->input('Opcion'),
            'nombre_noticia' => $request->input('NombreN'),
            'descripcion_noticia' => $request->input('DescripcionN'),
            'foto' => $nombreImagen,
            'video' => $rutaVideo,
            'author' => $request->input('Autor'),
            'url' => $request->input('Url'), // Asegúrate de usar 'Url' aquí
            'created_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Noticia guardada exitosamente.');
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
            'VideoE' => $request->hasFile('VideoE') ? 'mimetypes:video/avi,video/mp4,video/mpeg' : '',
            'OpcionE' => 'required',
            'AutorE' => 'required|string|max:255', // Validar autor
            'URLE' => 'nullable|url' // URL opcional
        ]);

        $blogs = Converge::find($id);

        if ($request->hasFile('ImagenE')) {
            $imagen = $request->file('ImagenE');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('imagenesBlog/img/'), $nombreImagen);
            $blogs->foto = $nombreImagen;
        }

        if ($request->hasFile('VideoE')) {
            $video = $request->file('VideoE');
            $nombreVideo = time() . '.' . $video->getClientOriginalExtension();
            $rutaVideo = $video->storeAs('videos', $nombreVideo, 'public');
            $blogs->video = $rutaVideo;
        }

        $blogs->nombre_noticia = $request->input('NombreE');
        $blogs->descripcion_noticia = $request->input('DescripcionE');
        $blogs->opcion = $request->input('OpcionE');
        $blogs->author = $request->input('AutorE');
        $blogs->url = $request->input('URLE');

        $blogs->save();

        return redirect()->back()->with('success', 'Noticia actualizada exitosamente.');
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