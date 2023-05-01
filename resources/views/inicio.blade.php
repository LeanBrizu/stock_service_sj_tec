<!-- resources/views/contact.blade.php -->

<div class="container">
  <h1>Contáctanos</h1>
  <form action="{{ route('inicio.guardarMensajeContacto') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="Nombre">Nombre</label>
      <input type="text" name="Nombre" id="Nombre" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="Correo">Email</label>
      <input type="email" name="Correo" id="Correo" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="Mensaje">Mensaje</label>
      <textarea name="Mensaje" id="Mensaje" class="form-control" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>
<style>
  .container {
    height: 50%;
    max-height: 50%
    max-width: 50%;
    width: 50%;
  }

  form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
  }

  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding-right: 20px;
    padding-left: 20px;
    padding-top: 7px;
    padding-bottom: 7px;
  }

  .btn-primary:hover {
    background-color: #0069d9;
    border-color: #0062cc;
  }
</style>
