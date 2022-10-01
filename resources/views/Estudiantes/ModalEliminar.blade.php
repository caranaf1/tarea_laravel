<div class="modal fade" id="quitarStudent{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Confirmar La Eliminacion </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                <strong style="text-align: center !important">Desea Eliminar a {{ $student->nombres }} ?</strong>
      <div class="modal-footer">
      <form action="{{ route('Estudiantes.destroy',$student->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>

        </div>
        </div>
    </div>
</div>
</div>
