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
 
<?php $currPage =0; ?>
<?php $lastPage =0; ?>
<?php $totalPages =0; ?>
 
@foreach($sermons as $sermon1)

        @foreach(array_keys($sermon1) as $nmkey) 
        
                @if(!is_array($sermon1[$nmkey])) 
                    @if($nmkey=="current_page")
                        
                       <?php $currPage =$sermon1[$nmkey]; ?>
                    @endif
                    @if($nmkey=="last_page")
                         
                        <?php $lastPage =$sermon1[$nmkey]; ?>
                    @endif
                    @if($nmkey=="total")
                         
                        <?php $totalPages =$sermon1[$nmkey]; ?>
                    @endif
                @endif 
                 
        @endforeach 

         @foreach($sermon1 as $sermonItem)
        
         @if(is_array($sermonItem))
              
            <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Description</td>          
          
        </tr>
    </thead>
    <tbody>
        @foreach($sermonItem as $sermon)
        <tr>
            <td>{{$sermon['id']}}</td>
            <td>{{$sermon['title']}}</td>
            <td>{{$sermon['description']}}</td>  
        </tr>
        @endforeach
    </tbody>
  </table>
<div>   
          @endif
        @endforeach 
 @endforeach
<br/>
 
<nav aria-label="Page navigation example">
  <ul class="pagination">
 @for ($i =1; $i <= $lastPage; $i++)
 
 @if($currPage==$i)
 <li  class="page-item active">
    <a  class="page-link" href="http://localhost:8003/sermons?page={{$i}}"> {{$i}}</a>
    </li>
 @else
 <li  class="page-item">
    <a  class="page-link" href="http://localhost:8003/sermons?page={{$i}}"> {{$i}}</a>
    </li>
    @endif
 
 @endfor
 </ul>
</nav>
</div>
@endsection