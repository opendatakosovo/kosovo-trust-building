@extends('dashboard.base')

@section('content')

        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-12 col-md-10 col-lg-8 col-xl-10">
                <div class="card">
                    <div class="card-header">
                      <i class="fa fa-align-justify"></i> {{ __('Create Story') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('notes.store') }}">
                            @csrf
                           
                            <div class="form-group row">
                                <label>Title</label>
                                <input class="form-control" type="text" placeholder="{{ __('Title') }}" name="title" required autofocus>
                            </div>

                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" id="textarea-input" name="content" rows="9" placeholder="{{ __('Content..') }}" required></textarea>
                            </div>

                            <div class="form-group row">
                                <label>Date</label>
                                <input type="date" class="form-control" name="applies_to_date" required/>
                            </div>

                           
                           <div class="form-group row">
                                <label>Category</label>
                                <input class="form-control" type="text" placeholder="{{ __('Category') }}" name="note_type" required>
                            </div>

                          <div class="form-group row">
                                <label>Actors</label>
                                <input class="form-control" type="text" placeholder="{{ __('Actors') }}" name="note_type" required>
                            </div>

                            
                            <div class="form-group row">
                                <label>Tags</label>
                                <input class="form-control" type="text" placeholder="{{ __('Tags') }}" name="note_type" required>
                            </div>
 
                            <button class="btn btn-block btn-success" type="submit">{{ __('Add') }}</button>
                            <a href="{{ route('notes.index') }}" class="btn btn-block btn-primary">{{ __('Return') }}</a> 
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('javascript')

<script src="{{ ('https://cdn.tiny.cloud/1/s1cvah5fcucfql4r7y91sdyqegend95iv617ra8qvn4ma36r/tinymce/5/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>
@endsection