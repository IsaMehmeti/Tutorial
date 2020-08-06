@extends('layouts.admin')
@section('page_name','Complete Profile') 



@section('content')
<div class="container-fluid">
          <div class="col-md-8 col-12 mr-auto ml-auto">
            <div class="card">
                  <div class="card-header card-header-icon card-header-primary">
                    <div class="card-icon">
                      <i class="material-icons">timeline</i>
                    </div>
                    <h4 class="card-title">Profile Completed currently: {{$user->completion}}%
                    </h4>
                  </div>
                  <div class="card-body">
            
        <div style="height: 30px;" class="progress-rose">
          <div  class="progress-bar" role="progressbar" style="max-width: 100%; width: {{$user->completion}}%;" aria-valuenow="{{$user->completion}}" aria-valuemin="0" aria-valuemax="100">{{$user->completion}}%</div>
        </div>
                  </div>
                </div>
            <!--      Wizard container        -->
            <div class="wizard-container">
              <div class="card card-wizard active" data-color="rose" id="wizardProfile">
                <form action="{{route('updateProfile', $user->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                  <div class="card-header text-center">
                    <h3 class="card-title">
                      Complete Your Profile
                    </h3>
                    <h5 class="card-description">This information will let us know more about you.</h5>
                  </div>
               
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="about">
                        <div class="row justify-content-center">
                          <div class="col-sm-4">
                            <div class="picture-container">
                              <div class="picture">
                                <img src="../../assets/img/default-avatar.png" alt="" class="picture-src" id="wizardPicturePreview" title="">
                                <input type="file" id="wizard-picture" name="image">
                              </div>
                              <h6 class="description">Choose Picture</h6>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">face</i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group ">
                                <label for="exampleInput1" class="bmd-label-floating">Name</label>
                                <input type="text" class="form-control" id="exampleInput1" name="name" value="{{$user->name}}">
                              </div>
                            </div>
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">record_voice_over</i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group ">
                                <label for="exampleInput11" class="bmd-label-floating">Job</label>
                                <input type="text" class="form-control" id="exampleInput11" name="job"value="{{$user->job}}">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-10 mt-3">
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">email</i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group ">
                                <label for="exampleInput1" class="bmd-label-floating">Email </label>
                                <input type="email" class="form-control" id="exampleemalil" name="email" required="" aria-required="true" aria-invalid="true" value="{{$user->email}}">
                              </div>
                            </div>
                          </div> 
                             <div class="col-lg-10 mt-3">
                            <div class="input-group form-control-lg">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">library_books</i>
                                </span>
                              </div>
                              <div class="form-group bmd-form-group ">
                                <label for="exampleInput1" class="bmd-label-floating">Date </label>
                                <input type="date" name="birth" class="form-control datepicker" value="{{$user->birth}}">
                              </div>
                            </div>
                          </div> 
                             <div class="col-lg-9 mt-4">
                            <div class="input-group form-control-lg">
                             <label class="">Account type: </label>
                            <div class="col-sm-10 checkbox-radios">
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" @if($user->type == '1') checked @else @endif  disabled>  Admin
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" @if($user->type == '2') checked @else @endif   disabled> Blogger
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                              <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value=""@if($user->type >= '3') checked @else @endif   disabled> User
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                   
                    <div class="ml-auto">
                      <button type="submit" class="btn btn-next btn-fill btn-rose btn-wd">Submit</button>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div>
            <!-- wizard container -->
          </div>
        </div>


@endsection