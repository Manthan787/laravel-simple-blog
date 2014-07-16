{{ Form::open(['url'=>'posts','class'=>'form'])}}
<div class="container">
<div class="form-group">
{{ Form::label('title','Title:', null, ['class'=>'form-control']) }}
{{ Form::text('Title',null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
{{ Form::label('body','Body:', null, ['class'=>'form-control']) }}
{{ Form::textarea('Body',null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
{{ Form::label('draft','Save As Draft:', null, ['class'=>'form-control']) }}
{{ Form::select('draft',[1=>'Yes',0=>'No'],null, ['class'=>'form-control']) }}
</div>

<div class="form-group">
{{ Form::submit('Publish', ['class' => 'btn btn-default']) }}
</div>





</div>
{{ Form::close() }}