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
        <form id="form">
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="price-min">Price (min)</label>
                    <select class="custom-select d-block w-100" name="price-min">
                        <option value="">Any</option>
                        <option value="200000">$200,000</option>
                        <option value="300000">$300,000</option>
                        <option value="400000">$400,000</option>
                        <option value="500000">$500,000</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="price-max">Price (max)</label>
                    <select class="custom-select d-block w-100" name="price-max">
                        <option value="">Any</option>
                        <option value="300000">$300,000</option>
                        <option value="400000">$400,000</option>
                        <option value="500000">$500,000</option>
                        <option value="600000">$600,000</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="bedrooms-min">Beds (min)</label>
                    <select class="custom-select d-block w-100" name="bedrooms-min">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="bedrooms-max">Beds (max)</label>
                    <select class="custom-select d-block w-100" name="bedrooms-max">
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
                    <label for="bathrooms-min">Bath (min)</label>
                    <select class="custom-select d-block w-100" name="bathrooms-min">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="bathrooms-max">Bath (max)</label>
                    <select class="custom-select d-block w-100" name="bathrooms-max">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="garages-min">Garage (min)</label>
                    <select class="custom-select d-block w-100" name="garages-min">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="garages-max">Garage (max)</label>
                    <select class="custom-select d-block w-100" name="garages-max">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="storeys-min">Storeys (min)</label>
                    <select class="custom-select d-block w-100" name="storeys-min">
                        <option value="">Any</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="storeys-max">Storeys (max)</label>
                    <select class="custom-select d-block w-100" name="storeys-max">
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
        @verbatim
        <div id="results" style="margin-top: 40px" class="invisible">
            <h4>Search Results</h4>
            <p id="no-result" v-if="results.properties.length === 0">Sorry, no properties matching your criteria were found</p>
            <table class="table table-striped" id="result-table" v-else>
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
                <tbody id="result-body">
                    <tr v-for="result in results.properties">
                        <td>{{result.name}}</td>
                        <td>{{result.price}}</td>
                        <td>{{result.bedrooms}}</td>
                        <td>{{result.bathrooms}}</td>
                        <td>{{result.garages}}</td>
                        <td>{{result.storeys}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endverbatim
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script>
$(function () {
    var form = $("#form");
    var duration = 150;
    var results = {
        hidden: true,
        properties: []
    };
    var app = new Vue({
        el: "#results",
        data: {
            results: results
        }
    });

    form.submit(function (e) {
        e.preventDefault();
        $.LoadingOverlay("show", {fade: duration});
        var url = "/property/search";
        $.ajax({
            type: "GET",
            url: url,
            data: form.serialize(),
            success: function (data) {
                results.properties = data;
                if (results.hidden) {
                    document.getElementById('results').className = "";
                    results.hidden = false;
                }
                $.LoadingOverlay("hide", {fade: duration});
            }
        });
    });
});
</script>
@endsection
