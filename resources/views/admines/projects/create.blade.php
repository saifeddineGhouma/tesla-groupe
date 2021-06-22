@extends('layouts.prencipal')

@section('contenu')
<style>
 .filepond--drop-label {
	color: #4c4e53;
}

.filepond--label-action {
	text-decoration-color: #babdc0;
}

.filepond--panel-root {
	border-radius: 2em;
	background-color: #edf0f4;
	height: 1em;
}

.filepond--item-panel {
	background-color: #595e68;
}

.filepond--drip-blob {
	background-color: #7f8a9a;
}

</style>
<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Add new Project  To   :  {{$company->name}}
                            </h2>
                            <div class="text-right" >
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">

                        <form id="form_validation" action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name </label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <input type="file" 
                                        class="filepond"
                                        name="photo[]"
                                        multiple
                                        data-max-file-size="3MB"
                                        data-max-files="10" />

                                    </div>
                                </div>
                              
                             
                                <input type="hidden" name="company_id" value="{{$company->id}}" />

                                <button class="btn btn-success waves-effect btn-block" type="submit">Add </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

@include('admines.projects.codeJs')
@stop
