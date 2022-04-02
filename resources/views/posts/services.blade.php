@extends('layouts.postlayout')

@section('contenidillo')

<main>
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 py-3">
          <h2 class="title-section">Ayudanos <span class="marked">a crear </span> tus propias categorias</h2>
          <div class="divider"></div>
          <form action="/crearcategorias" method="post"> @csrf
            
            <div class="form-group">
              <label for="exampleInputEmail1">nombre Categoria</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de la categoria">
              <small id="emailHelp" class="form-text text-muted">favor de colocar el nombre de tu categoria</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">slug</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="slug" placeholder="Slug">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Verificar que todo esta bien!!</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-6 py-3">
          <h2 class="title-section">Ayudanos <span class="marked">a crear </span> tus propias etiquetas</h2>
          <div class="divider"></div>
          <form action="/crearetiquetas" method="post"> @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">nombre Etiqueta</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de la etiqueta">
              <small id="emailHelp" class="form-text text-muted">favor de colocar el nombre de tu etiquetaa</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">slug</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="slug" placeholder="Slug">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Verificar que todo esta bien!!</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-6 py-3">
          <h2 class="title-section">Si ya Creaste tu categoria y tus etiquetas, Es momento de <span class="marked">de crear </span> tus propios booms</h2>
          <div class="divider"></div>
          <form action="/crearpublicacion" method="post"> @csrf
            <div class="form-group">
              @php
              use Illuminate\Support\Facades\Auth;
              if (Auth::check()){
                  $name = Auth::user()->name;
              }
            @endphp
              <input  class="nav-link" name="user_id">Perfil: {{$name}}></input>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">nombre Publicacion</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de la publicacion">
              <small id="emailHelp" class="form-text text-muted">favor de colocar el nombre de tu publicacion</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">slug</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="slug" placeholder="Slug">
            </div>
            
            <div class="form-group">
              <select class="form-select" aria-label="Default select example" name="category_id">
                <option selected>Selecciona la categoria</option>
                @foreach($categories as $category)
                <option value="1">{{$category}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <select class="form-select" aria-label="Default select example" name="tag_id">
                <option selected>Selecciona Una etiqueta</option>
                @foreach($tags as $tag)
                <option value="1">{{$tag}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Asunto</label>
              <input type="textarea" class="form-control" id="exampleInputPassword1" name="extract" placeholder="Asunto">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">En que estas pensando?</label>
              <input type="textarea" class="form-control" id="exampleInputPassword1" name="body" placeholder="Cuerpo">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Estatus (1 = borrador - 2 = publicacion)</label>
              <input type="textarea" class="form-control" id="exampleInputPassword1" name="status" placeholder="estatus">
            </div>
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Verificar que todo esta bien!!</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-lg-6 py-3">
          <div class="img-place text-center">
            <img src="../assets/img/bg_image_3.png" alt="">
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <div class="text-center">
        <div class="subhead">Why Choose Us</div>
        <h2 class="title-section">Your <span class="marked">Comfort</span> is Our Priority</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row mt-5 text-center">
        <div class="col-lg-4 py-3">
          <div class="display-3"><span class="mai-shapes"></span></div>
          <h5>High Performance</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
        </div>
        <div class="col-lg-4 py-3">
          <div class="display-3"><span class="mai-shapes"></span></div>
          <h5>Friendly Prices</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
        </div>
        <div class="col-lg-4 py-3">
          <div class="display-3"><span class="mai-shapes"></span></div>
          <h5>No time-confusing</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
</main>
@endsection