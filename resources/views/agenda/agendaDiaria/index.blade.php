@extends('layouts.layout')

@section('title')
  Agenda de Citas - Naranjo Plastic | CPTV
@endsection

@section('css')

<link rel="stylesheet" href="/plugins/select2/select2.min.css">

<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
<!-- Fine Uploader CSS -->
<link href="js/fine-uploader/fine-uploader.css" rel="stylesheet">

<!-- Fine Uploader JS -->
<link href="js/fine-uploader/fine-uploader-gallery.min.css" rel="stylesheet">
<script src="js/fine-uploader/fine-uploader.min.js"></script>
<script type="text/template" id="qq-template">
    <div class="qq-uploader-selector qq-uploader qq-gallery" qq-drop-area-text="Drop files here">
        <div class="qq-total-progress-bar-container-selector qq-total-progress-bar-container">
            <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-total-progress-bar-selector qq-progress-bar qq-total-progress-bar"></div>
        </div>
        <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
            <span class="qq-upload-drop-area-text-selector"></span>
        </div>
        <div class="qq-upload-button-selector qq-upload-button">
            <div>Subir imagen</div>
        </div>
        <span class="qq-drop-processing-selector qq-drop-processing">
            <span>Procesando imagen...</span>
            <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
        </span>
        <ul class="qq-upload-list-selector qq-upload-list" role="region" aria-live="polite" aria-relevant="additions removals">
            <li>
                <span role="status" class="qq-upload-status-text-selector qq-upload-status-text"></span>
                <div class="qq-progress-bar-container-selector qq-progress-bar-container">
                    <div role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" class="qq-progress-bar-selector qq-progress-bar"></div>
                </div>
                <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
                <div class="qq-thumbnail-wrapper">
                    <img class="qq-thumbnail-selector" qq-max-size="120" qq-server-scale>
                </div>
                <button type="button" class="qq-upload-cancel-selector qq-upload-cancel">X</button>
                <button type="button" class="qq-upload-retry-selector qq-upload-retry">
                    <span class="qq-btn qq-retry-icon" aria-label="Retry"></span>
                    Reiniciar
                </button>

                <div class="qq-file-info">
                    <div class="qq-file-name">
                        <span class="qq-upload-file-selector qq-upload-file"></span>
                        <span class="qq-edit-filename-icon-selector qq-btn qq-edit-filename-icon" aria-label="Edit filename"></span>
                    </div>
                    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
                    <span class="qq-upload-size-selector qq-upload-size"></span>
                    <button type="button" class="qq-btn qq-upload-delete-selector qq-upload-delete">
                        <span class="qq-btn qq-delete-icon" aria-label="Delete"></span>
                    </button>
                    <button type="button" class="qq-btn qq-upload-pause-selector qq-upload-pause">
                        <span class="qq-btn qq-pause-icon" aria-label="Pause"></span>
                    </button>
                    <button type="button" class="qq-btn qq-upload-continue-selector qq-upload-continue">
                        <span class="qq-btn qq-continue-icon" aria-label="Continue"></span>
                    </button>
                </div>
            </li>
        </ul>

        <dialog class="qq-alert-dialog-selector">
            <div class="qq-dialog-message-selector"></div>
            <div class="qq-dialog-buttons">
                <button type="button" class="qq-cancel-button-selector">Cerrar</button>
            </div>
        </dialog>

        <dialog class="qq-confirm-dialog-selector">
            <div class="qq-dialog-message-selector"></div>
            <div class="qq-dialog-buttons">
                <button type="button" class="qq-cancel-button-selector">No</button>
                <button type="button" class="qq-ok-button-selector">Yes</button>
            </div>
        </dialog>

        <dialog class="qq-prompt-dialog-selector">
            <div class="qq-dialog-message-selector"></div>
            <input type="text">
            <div class="qq-dialog-buttons">
                <button type="button" class="qq-cancel-button-selector">Cencelar</button>
                <button type="button" class="qq-ok-button-selector">Ok</button>
            </div>
        </dialog>
    </div>
</script>

@endsection

@section('content')
<div class="card">
  <div class="card-header"><h4>Agenda de Citas</h4></div>
  <div class="card-body">
     <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header Aqua">
            Agenda dia Especifico
          </div>
          <div class="card-body">
            <div class="col-md-12">
              <div class="form-group row ">
                <label for="Servicio " class="col-md-2 col-form-label">Consultorio:</label>
                <div class="col-md-4">
                  <select class="form-control form-control-sm" id="Servicio">

                  </select>
                </div>
                <label for="inputEmail3" class="col-md-1 col-form-label">Fecha</label>
                <div class="col-md-3">
                  <input type="date" class="form-control form-control-sm" name="fechaInicia" value="<?php echo date("Y-m-d");?>" id="fechaInicia"  >
                </div>
                <div class="col-md-2">
                  <button type="button"  class="btn btn-GrisOscuro btn-sm btn-block" id="Buscar" name="button">Buscar</button>
                </div>
              </div>
            </div>
            <hr/>
            <div class="table-responsive">
              <button class=" float-right btn btn-success btn-sm" id="addCita"><a class="fa fa-user-plus"> Cita</a></button>
              <table id="Usertable" class="table table-striped  table-sm" style="width:100%">
                <thead class=" Aqua ">
                  <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th></th>
                    <th>Nombre(s)</th>
                    <th>Terapeuta(s)</th>
                    <th>Consultorio</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot >
              		<tr >
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
              	</tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('modal')
@include('agenda.modal.addCita');
@include('agenda.modal.servicio');
@include('agenda.modal.consultorio');
@include('admin.user.modal.imagenSubir')
@endsection

@section('js')

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="js/AgendaJS/agenda.js"></script>


<!-- Page script -->

@endsection
