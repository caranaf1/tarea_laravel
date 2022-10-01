            <div class="modal fade" id="editStudent{{ $student->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Datos del Estudiante</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
            <form method="POST" action="{{ route('Estudiantes.update',$student->id) }}">
                @method('PUT')
                @csrf

                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">Id:</label>
                    <input type="text" class="form-control" id="txt_id" name="id" value="{{ $student->id }}" readonly />
                </div>
                <div class="mb-3 mt-3">
                    <label for="text" class="form-label">Carne:</label>
                    <input type="text" class="form-control" id="txt_carne" name="carne" value="{{ $student->carne }}"onchange="carnetValidation(this);" required />
                    @error('carne')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Nombres:</label>
                    <input type="text" class="form-control" id="txt_nombres" name="nombres" value="{{ $student->nombres }}" required />
                    @error('nombres')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Apellidos:</label>
                    <input type="text" class="form-control" id="txt_apellidos" name="apellidos" value="{{ $student->apellidos }}"required />
                    @error('apellidos')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Direccion:</label>
                    <input type="text" class="form-control" id="txt_direccion" name="direccion" value="{{ $student->direccion }}"required />
                    @error('direccion')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Telefono:</label>
                    <input type="text" class="form-control" id="txt_telefono" name="telefono" value="{{ $student->telefono }}"required />
                    @error('telefono')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Email:</label>
                    <input type="text" class="form-control" id="txt_email" name="correo_electronico" value="{{ $student->correo_electronico }}" required />
                    @error('correo_electronico')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="text" class="form-label">Tipo de Sangre:</label>
                    <select name="id_tipo_sangre" id="txt_tipo_sangre" class="form-select" required />
                    <option >Seleccione el tipo de sangre</option>
                    @foreach ($Sangre as $blood)
                    @if($student->id_tipo_sangre == $blood->id)
                    <option value="{{ $blood->id }}" selected>{{ $blood->sangre }}</option>
                    @else
                    <option value="{{ $blood->id }}">{{ $blood->sangre }}</option>
                    @endif

                    @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Fecha Nacimiento:</label><br>
                    <input type="date" class="form-control" id="txt_fecha_nacimiento" name="fecha_nacimiento" value="{{ $student->fecha_nacimiento }}" required />
                    @error('fecha_nacimiento')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary" id="btn_modificar" name="btn_modificar" value="modificar">Modificar</button>

            </form>
        </div>
    </div>
</div>
</div>


