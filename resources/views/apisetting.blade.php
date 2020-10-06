<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('API Setting') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block px-4 py-2 text-sm text-gray-400">
                    <div class="card">
                      <div class="card-header">
                        Text SMS API
                      </div>
                      <div class="card-body">
                        @if(!is_null(Auth::user()->api_key))
                        <p class="card-text">Your API Key : {{Auth::user()->api_key}}</p><br>
                        @endif
                        <a href="{{route('appgenerate')}}" class="btn btn-dark">Generate Key</a>
                      </div>

                      <div class="card-body">
                        <h5 class="card-title">API URL Non Masking (GET & POST)</h5>
                        <p class="card-text">http://connect.primesoftbd.com/smsapi/non-masking?api_key={{Auth::user()->api_key}}y&smsType=text&mobileNo=(NUMBER)&smsContent=(Message Content)</p>
                      </div>


                      <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Parameter Name</th>
                          <th scope="col">Meaning/Value</th>
                          <th scope="col">Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>api_key</th>
                          <td>API Key</td>
                          <td>Your API Key: {{Auth::user()->api_key}}y</td>
                        </tr>
                        <tr>
                          <td>type</td>
                          <td>text/unicode</td>
                          <td>text for normal SMS/unicode for Bangla SMS</td>
                        </tr>
                        <tr>
                          <td>contacts</td>
                          <td>mobile number</td>
                          <td>Exp: 88017XXXXXXXX,88018XXXXXXXX,88019XXXXXXXX...</td>
                        </tr>

                        <tr>
                          <td>msg</td>
                          <td>mobile number</td>
                          <td>Exp: 88017XXXXXXXX,88018XXXXXXXX,88019XXXXXXXX...</td>
                        </tr>

                      </tbody>
                    </table>




                    <div class="card-body">
                        <h5 class="card-title">Credit Balance API</h5>
                        <p class="card-text "><mark>http://connect.primesoftbd.com/api/balance?api_key={{Auth::user()->api_key}}y</mark></p>
                      </div>







                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
