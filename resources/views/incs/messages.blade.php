@if($message = Session::get('success'))
<div id="alertmsg" class="alert alert-dismissable alert-success">
    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button> 
    {{ $message }}
</div>
<script>
    $("#alertmodal").hide().slideDown();
      setTimeout(function(){
          $("#alertmodal").slideUp();        
      }, 1000);
</script>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block mt-3">
    {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block mt-3">
    {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block mt-3">
    {{-- <button type="button" class="close" data-dismiss="alert">×</button> --}}
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-block mt-3">
        <li class="list-unstyled">{{ $error }}</li>
    </div>
    @endforeach
@endif