@push('title')
    <title>Services | Verified Campaigns</title>
@endpush
@extends('frontend.layouts.main')
@section('main-container')
<div class="service-page">
<div class="container">
    <div class="row service-head-content">
        <div class="col-md-12">
            <p class="chk-ser-label">Checkout our services</p>
            <h1 class="main-title"># 1 Crypto marketing tools</h1>
            <p class="txt">our services is provided by us we don't buy any services from any other providers all providers use our services compare the prices  </p>
        </div>
    </div>

    <div class="row search-row">
        <div class="col-sm-9">
          <form action="">
          <div class="input-group">
            <input id="serv-inp" type="search" class="form-control" placeholder="Search" value="{{$search}}">
          </div>
          </form>
        </div>
        <div class="col-sm-3">
          <div class="dropdown cat-dropdown">
            <button class="btn btn-primary dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span data-filter-active-category="true">Catogries</span>
              <i class="fas fa-bars"></i>
            </button>
            <ul class="dropdown-menu">
                <li>
                <a class="dropdown-item" href="#" data-filter-category-id="All">All</a>
                </li>
                @foreach ($category as $cat) 
                <li>
                    <a class="dropdown-item" href="#" data-filter-category-id="{{$cat->id}}" data-filter-category-name="{{$cat->category_name}}">{{$cat->category_name}}</a>
                </li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
        <div class="accordion service-accordion" id="accordionExample">
            <div class="card">
                @php
                    $acc_id = 1;
                @endphp
                @php
                  $modal_id = 1;
                @endphp                
                @foreach ($category as $cat)
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link accordion-toggle collapsed" type="button" data-toggle="collapse" data-target="#{{"service".$acc_id.""}}" aria-expanded="true" aria-controls="collapseOne">
                    {{$cat->category_name}}
                  </button>
                </h2>
              </div>
              <div id="{{"service".$acc_id++.""}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th class="width-service-name" scope="col">Service</th>
                                    <th class="nowrap" scope="col">Rate per 1000</th>
                                    <th class="nowrap" scope="col">Min order</th>
                                    <th class="nowrap" scope="col">Max order</th>
                                    <th class="nowrap" scope="col">Description</th>
                                    <th class="nowrap" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($services as $ser)
                                @if ($ser->category_id == $cat->id)
                                  {{-- Modal Section --}}
                                  <!-- Modal -->
                                  <div class="modal fade" id="{{"modal".$modal_id.""}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content" id="{{$ser->id}}">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">{{$ser->service}}</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="col-md-6">
                                              <div class="ser-desc-box">
                                                <h5>Rate per 1000</h5>
                                                <p>{{$ser->rate_per1000}}</p>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="ser-desc-box">
                                                <h5>Min order</h5>
                                                <p>{{$ser->min_order}}</p>
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="ser-desc-box">
                                                <h5>Max order</h5>
                                                <p>{{$ser->max_order}}</p>
                                              </div>
                                            </div>                                            
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  {{-- Modal Section --}}                                
                                        <tr class="">
                                          @if($ser->status == "1")
                                            <td scope="row"><span class="serv-id-badge">{{$ser->id}}</span></td>
                                            <td>{{$ser->service}}</td>
                                            <td>{{$ser->rate_per1000}}</td>
                                            <td>{{$ser->min_order}}</td>
                                            <td>{{$ser->max_order}}</td>
                                            <td><span class="btn btn-secondary desc-btn"data-toggle="modal" data-target="#{{"modal".$modal_id++.""}}">Description</span></td>
                                            <td><span class="btn buy-btn">Buy</span></td>
                                          @endif
                                        </tr>
                                @endif
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
              @endforeach
            </div>
          </div>
      </div>
    </div>
</div>
</div>
@endsection