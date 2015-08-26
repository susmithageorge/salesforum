@extends('admin/dashboard')
@section('content')

<form class="form-horizontal"  method="post" action="{{URL::to('admin/users/adduser')}}">
   {!! csrf_field() !!}

<fieldset>

<!-- Form Name -->
<legend>Add User</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="name">Name</label>
  <div class="controls">
    <input id="name" name="name" type="text" placeholder="Name" class="input-large">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">Email</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="email" class="input-large">
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="password">Password</label>
  <div class="controls">
    <input id="password" name="password" type="password" placeholder="password" class="input-large">
    
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="password">Confirm Password</label>
  <div class="controls">
    <input id="password" name="cpass" type="password" placeholder="password" class="input-large">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="info">Bio</label>
  <div class="controls">                     
    <textarea id="info" name="info"></textarea>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="submit"></label>
  <div class="controls">
    <button id="submit" name="submit" class="btn btn-primary">Add User</button>
  </div>
</div>

</fieldset>
</form>
@stop
