@extends('layouts.prencipal')

@section('contenu')
<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Add new Serive To   :  {{$company->name}}
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

                        <form id="form_validation" action="{{route('admin.services.store')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name_fr" required>
                                        <label class="form-label">Name Fr</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name_en" required>
                                        <label class="form-label">Name En</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="body">
                                            <textarea class="ckeditor" name="description_fr">
                                            <h2> about us fr </h2>
                                            </textarea>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="body">
                                            <textarea class="ckeditor" name="description_en">
                                            <h2> about us an </h2>
                                            </textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="company_id" value="{{$company->id}}" />

                                <button class="btn btn-success waves-effect btn-block" type="submit">Add </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


@stop
