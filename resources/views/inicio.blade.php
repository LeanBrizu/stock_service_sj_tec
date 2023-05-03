<? if ((isset($texto) && (!empty($texto)) { ?>
	<div>
	    <div class="mensaje-estado">{{ $texto }}</div>
	</div>
<? } ?>
<div class="container">
  <h1>Contáctanos</h1>
  <form action="{{ route('guardarMensajeContacto') }}" method="POST">
    @csrf
    <div>
        <h2>Información Personal</h2>
        <div class="">
          <label for="Nombre">Nombre</label>
          <input type="text" name="Nombre" id="Nombre" class="form-control" required>
        </div>
        <div class="">
          <label for="Correo">Email</label>
          <input type="email" name="Correo" id="Correo" class="form-control" required>
        </div>
        <div class="">
          <label for="Telefono">Teléfono</label>
          <input type="tel" name="Telefono" id="Telefono" class="form-control" rows="5" required></textarea>
        </div>
        <div class="">
          <label for="Mensaje">Mensaje</label>
          <textarea name="Mensaje" id="Mensaje" class="form-control" rows="5" required></textarea>
        </div>
    </div>
    <div>
        <h2>Información de la Propiedad</h2>
        <div>
            <label for="venta">
            <h3>Tipo de operación:</h3>
            </label>
            <div>
                <input type="radio" name="Operacion" id="venta" value="Venta" checked>
                <label for="venta">
                    Venta
                </label>
            </div>
            <div>
                <input type="radio" name="Operacion" id="compra" value="Compra">
                <label for="compra">
                    Compra
                </label>
            </div>
        </div>
        <div>
        <hr>
            <label for="precio"><h3>Precio o Presupuesto:</h3></label>
            <div>
                <span><b>$</b></span>
                <input type="text" class="form-precio" id="precio" max="1000000000" min="0" name="Precio" aria-describedby="ayudaPrecio" required>
            </div>
            <small id="ayudaPrecio">
                Ingrese el precio o presupuesto en dólares estadounidenses. (US$). Máximo 1.000.000.000.
            </small>
        </div>
        <hr>
        <div>
           <label for="tipo-contacto">
            <h3>¿Cómo desea ser contactado?:</h3>
            </label>
            <div>
                <input type="radio" name="Tipo_contacto" id="telefono" value="Teléfono" checked>
                <label for="tipo-contacto">
                    Teléfono
                </label>
            </div>
            <div>
                <input type="radio" name="Tipo_contacto" id="email" value="Correo Electrónico">
                <label for="compra">
                    Correo Electrónico
                </label>
            </div>
        </div>
    </div>
    <div>
        <h2>Atención de la inmobiliaria</h2>
        <label for="personal-inmobiliario">
        Seleccione quien le brindará atención:
        </label>
        <select id="personal-inmobiliario" name="Personal_inmobiliario">
            <option value="Evaristo Artigas Colom">Evaristo Artigas Colom</option>
            <option value="Josefa Cerdán Montserrat">Josefa Cerdán Montserrat</option>
            <option value="Celestino Seve Aranda Goñi">Celestino Seve Aranda Goñi</option>
        </select>
    </div>
    <br>
    <button type="submit" class="btn-primary">Enviar</button>
  </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const precioInput = document.getElementById('precio');

  precioInput.addEventListener('input', e => {
    let value = e.target.value;
    value = value.replace(/[^\d]/g, '');
    if (value < 0 || value > 1000000000) {
      value = '';
    }
    e.target.value = value;
  });
});

const numeroDeTelefono = document.getElementById('Telefono');
const regexTelefonico = /^\+?\d{8,}$/;

numeroDeTelefono.addEventListener('blur', () => {
  if (!regexTelefonico.test(numeroDeTelefono.value)) {
    numeroDeTelefono.classList.add('no-valido');
    numeroDeTelefono.insertAdjacentHTML('afterend', '<div class="retroalimentacion-invalida">Por favor, ingrese un número telefónico válido.</div>');
  } else {
    numeroDeTelefono.classList.remove('no-valido');
    numeroDeTelefono.nextElementSibling.remove();
  }
});

</script>
<style>
  .container {
    height: 50%;
    margin: auto;
    max-height: 50%;
    max-width: 40%;
    width: 40%;
  }

  form input, textarea, select, option {
    font-size: 16px;
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

  .form-precio {
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

  .mensaje-estado{
    margin: auto;
  }

  .no-valido {
    border: 2px solid red;
  }

  .retroalimentacion-invalida {
    color: red;
    font-size: 14px;
    margin-top: 4px;
  }
</style>
