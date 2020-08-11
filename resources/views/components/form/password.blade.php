<div class="form-group">
    {{ Form::label($name, $attributes['label'], ['class' => 'control-label']) }}
    {{ Form::password($name, array_merge(['class' => 'form-control'], $attributes)) }}
</div>