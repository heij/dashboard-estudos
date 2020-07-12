@csrf
<div class="form-group">
    <label for="name">Descrição</label>
    <input type="text" value="{{ isset($study)? $study->description : '' }}" name="description" class="form-control" id="name">
</div>
<div class="form-group">
    <label for="area_id">Área</label>
    <select id="area_id" name="area_id" class="form-control">
        @if(isset($areas))
        @foreach($areas as $area)
        <option value="{{ $area->id }}" {{ 
                isset($study) && $study->area_id == $area->id  
                ? "selected"
                : ""
            }}>
            {{ $area->description }}
        </option>
        @endforeach
        @else
        <option value="">Nenhuma área encontrada</option>
        @endif
    </select>
</div>
<div class="form-group">
    <label for="date_init">Data Inicial</label>
    <input type="text" value="{{ isset($study)? $study->date_init : '' }}" name="date_init" class="form-control" id="date_init">
</div>
<div class="form-group">
    <label for="date_finish">Data Final</label>
    <input type="text" value="{{ isset($study)? $study->date_finish : '' }}" name="date_finish" class="form-control" id="date_finish">
</div>
<div class="row mt-3">
    <div class="col-md-6 col-sm-6 col-lg-6 col-6">
        <label class="control-label">Situação</label>
        <select name="status" class="form-control">
            <option value="Finalizado" {{ isset($study) && $study->status == 'Finalizado' ? 'selected' : ''  }}>Finalizado
            </option>
            <option value="Em atraso" {{ isset($study) && $study->status == 'Em atraso' ? 'selected' : ''  }}>Em atraso</option>
            <option value="Em andamento" {{ !isset($study) ? "selected" : "" }} {{ isset($study) && $study->status == 'Em andamento' ? 'selected' : ''  }}>Em andamento</option>
        </select>
    </div>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>