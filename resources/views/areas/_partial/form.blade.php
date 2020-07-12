@csrf
<div class="form-group">
    <label>Descrição</label>
    <input name="description" value="{{ isSet($area) ? $area->description : old('description }}" type="text" class="form-control" placeholder="Entre com uma descrição">
</div>
<div class="form-group">
    <label>Cor</label>
    <input name="color" value="{{ isset($area) ? $area->color : '' }}" type="text" class="form-control" placeholder="Entre com uma cor">
</div>
<button type="submit" class="btn btn-primary">Salvar</button>