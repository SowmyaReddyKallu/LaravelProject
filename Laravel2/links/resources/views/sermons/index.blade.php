@extends('base')
@section('main')
<script>
function ResetSearch()
{
    document.getElementById('title').value="";
    document.getElementById('description').value="";
}

</script>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">sermons</h1>    
    
    <form action="/sermons" method="GET" role="search">
    {{ csrf_field() }} 
    <div class="input-group">
    <div class="form-group">    
              <label for="title">Title:</label>
              <input value='{{ $title }}' type="text" class="form-control" name="title" id="title"/>
          </div>
          <div class="form-group">
              <label for="description">Description:</label>
              <input value='{{ $description }}'  type="text" class="form-control" name="description" id="description"/>
          </div>
          
    </div>    
    <button type="submit" value="Search" class="btn btn-primary">Search</button>
    <button type="submit" value="Reset" class="btn btn-primary" onclick="ResetSearch(); return true;">Reset</button>
</form>
 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Description</td>          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($sermons as $sermon)
        <tr>
            <td>{{$sermon->id}}</td>
            <td>{{$sermon->title}}</td>
            <td>{{$sermon->description}}</td> 
            <td>
                <a href="{{ route('sermons.edit',$sermon->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('sermons.destroy', $sermon->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
<?php echo $sermons->render(); ?>
</div>
@endsection