@extends('layouts.app')

@section('title', 'Property Search')

@section('content')
<div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Find your dream home</h2>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
</div>

<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Featured Property</span>
        </h4>
        <ul class="list-group mb-3">
            <li class="list-group-item">
                <h6>{{$featured->name}}</h6>
                <table class="table table-sm table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">Price</th>
                            <td>${{$featured->formattedPrice()}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Bed</th>
                            <td>{{$featured->bedrooms}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Bath</th>
                            <td>{{$featured->bathrooms}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Garage</th>
                            <td>{{$featured->garages}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Storeys</th>
                            <td>{{$featured->storeys}}</td>
                        </tr>
                    </tbody>
                </table>
            </li>
        </ul>
    </div>
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Property Search</h4>
        <form>
         <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="price-min">Price (min)</label>
                    <select class="custom-select d-block w-100" id="price-min">
                        <option value="">Any</option>
                        <option>$200,000</option>
                        <option>$300,000</option>
                        <option>$400,000</option>
                        <option>$500,000</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="price-max">Price (max)</label>
                    <select class="custom-select d-block w-100" id="price-max">
                        <option value="">Any</option>
                        <option>$300,000</option>
                        <option>$400,000</option>
                        <option>$500,000</option>
                        <option>$600,000</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="beds-min">Beds (min)</label>
                    <select class="custom-select d-block w-100" id="beds-min">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="beds-max">Beds (max)</label>
                    <select class="custom-select d-block w-100" id="beds-max">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 mb-3">
                    <label for="bath-min">Bath (min)</label>
                    <select class="custom-select d-block w-100" id="bath-min">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="bath-max">Bath (max)</label>
                    <select class="custom-select d-block w-100" id="bath-max">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="garage-min">Garage (min)</label>
                    <select class="custom-select d-block w-100" id="garage-min">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="garage-max">Garage (max)</label>
                    <select class="custom-select d-block w-100" id="garage-max">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="storey-min">Storeys (min)</label>
                    <select class="custom-select d-block w-100" id="storey-min">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="storey-max">Storeys (max)</label>
                    <select class="custom-select d-block w-100" id="storey-max">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Search</button>
        </form>
        <div style="margin-top: 40px">
            <h4>Search Results</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Bed</th>
                        <th scope="col">Bath</th>
                        <th scope="col">Garage</th>
                        <th scope="col">Storeys</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">The Xavier</th>
                        <td>$623,324</td>
                        <td>5</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
