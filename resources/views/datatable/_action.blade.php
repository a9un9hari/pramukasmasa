@if( ! empty($form_url) )
    {!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form-inline js-confirm', 'data-confirm' => $confirm_message] ) !!}
@endif
        @if( ! empty($confirm_url) )
        <a class="btn btn-xs btn-primary" title="Confirm Payment" href="{{ $confirm_url }}"><i class="fa fa-money"></i></a> 
        @endif
        @if( ! empty($edit_url) )
        <a class="btn btn-xs btn-primary" href="{{ $edit_url }}"><i class="fa fa-edit"></i></a> 
        @endif
        @if( ! empty($view_url) )
        <a class="btn btn-xs btn-primary" href="{{ $view_url }}"><i class="fa fa-eye"></i></a> 
        @endif
        @if( ! empty($view_disable) )
        <a class="btn btn-xs btn-primary" disabled="disabled" href="#"><i class="fa fa-eye"></i></a> 
        @endif
@if( ! empty($form_url) )
        &nbsp;
        {{ Form::button('<i class="fa fa-trash-o"></i>', ['class'=>'btn btn-xs btn-danger', 'type' => 'submit']) }}
    {!! Form::close()!!}
@endif
