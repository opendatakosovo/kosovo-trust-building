@extends('dashboard.base')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
          <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Highlighted Stories
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Date</th>
                        
                            <th>Category</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($notes as $note)
                            <tr>
                              <td><strong>{{ $note->user->name }}</strong></td>
                              <td><strong>{{ $note->title }}</strong></td>
                              <td>{{ $note->content }}</td>
                              <td>{{ $note->applies_to_date }}</td>
                            
                              <td><strong>{{ $note->note_type }}</strong></td>
                              <td>
                                <a href="{{ url('/notes/' . $note->id) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/notes/' . $note->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('notes.destroy', $note->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-block btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
      </div>
    </div>
  </div>
  <br>
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i>{{ __('Stories') }}</div>
                    <div class="card-body">
                        <div class="row"> 
                          <a href="{{ route('notes.create') }}" class="btn btn-primary m-2">{{ __('Add Story') }}</a>
                        </div>
                        <br>
                        <table class="table table-responsive-sm table-striped">
                        <thead>
                          <tr>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Date</th>
                        
                            <th>Category</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($notes as $note)
                            <tr>
                              <td><strong>{{ $note->user->name }}</strong></td>
                              <td><strong>{{ $note->title }}</strong></td>
                              <td>{{ $note->content }}</td>
                              <td>{{ $note->applies_to_date }}</td>
                            
                              <td><strong>{{ $note->note_type }}</strong></td>
                              <td>
                                <a href="{{ url('/notes/' . $note->id) }}" class="btn btn-block btn-primary">View</a>
                              </td>
                              <td>
                                <a href="{{ url('/notes/' . $note->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
                              </td>
                              <td>
                                <form action="{{ route('notes.destroy', $note->id ) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-block btn-danger">Delete</button>
                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $notes->links() }}
                    </div>
                </div>
              </div>
            </div>
           

          </div>
          
        </div>
        

@endsection


@section('javascript')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
@endsection

