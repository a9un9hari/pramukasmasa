@if (session()->has('flash_notification.message'))
    <br>
    <div class="alert alert-{{ session()->get('flash_notification.level') }}">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {!! session()->get('flash_notification.message') !!}
  </div>
@endif
@if (count($errors) > 0)
    <br>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<style>
    .alert ul{
        list-style: none;
        margin: 0;
        padding: 0;
    }
</style>