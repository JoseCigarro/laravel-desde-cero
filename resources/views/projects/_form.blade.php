@csrf
<div class="custom-file">
    <input type="file" name="image" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
  </div>
<div class="form-group">
    <label for="title">Título del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm" id="title" type="text" name="title"
        value="{{ old('title', $project->title) }}">
</div>
<div class="form-group">
    <label for="slug">slug del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm" id="slug" type="text" name="slug"
        value="{{ old('slug', $project->slug) }}">
</div>

<div class="form-group">
    <label for="description">Descripción del proyecto</label>
    <textarea class="form-control border-0 bg-light shadow-sm"
        name="description">{{ old('description', $project->description) }}</textarea>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">
    Cancelar
</a>
