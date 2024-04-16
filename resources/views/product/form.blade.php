
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $product->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('description') }}</label>
    <div>
        {{ Form::text('description', $product->description, ['class' => 'form-control' .
        ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>description</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('size') }}</label>
    <div>
        {{ Form::text('size', $product->size, ['class' => 'form-control' .
        ($errors->has('size') ? ' is-invalid' : ''), 'placeholder' => 'Size']) }}
        {!! $errors->first('size', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>size</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('color') }}</label>
    <div>
        {{ Form::text('color', $product->color, ['class' => 'form-control' .
        ($errors->has('color') ? ' is-invalid' : ''), 'placeholder' => 'Color']) }}
        {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>color</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('material') }}</label>
    <div>
        {{ Form::text('material', $product->material, ['class' => 'form-control' .
        ($errors->has('material') ? ' is-invalid' : ''), 'placeholder' => 'Material']) }}
        {!! $errors->first('material', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>material</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('price') }}</label>
    <div>
        {{ Form::text('price', $product->price, ['class' => 'form-control' .
        ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
        {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>price</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('stock') }}</label>
    <div>
        {{ Form::text('stock', $product->stock, ['class' => 'form-control' .
        ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
        {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>stock</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
