@extends('layouts.master')

@section('content')
    <div class="container flex flex-wrap">
      <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
        <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
          <div class="rounded-lg p-4 bg-purple-700 flex flex-col">
            <div>
              <h5 class="text-white text-2xl font-bold leading-none">
                Total sales
              </h5>
            </div>
            <div class="flex items-center">
              <div class="text-lg text-white font-light">
                $1099,00
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
        <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
          <div class="rounded-lg p-4 bg-purple-700 flex flex-col">
            <div>
              <h5 class="text-white text-2xl font-bold leading-none">
                Total Patients
              </h5>
            </div>
            <div class="flex items-center">
              <div class="text-lg text-white font-light">
                100
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
        <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
          <div class="rounded-lg p-4 bg-purple-700 flex flex-col">
            <div>
              <h5 class="text-white text-2xl font-bold leading-none">
                Total Invoices
              </h5>
            </div>
            <div class="flex items-center">
              <div class="text-lg text-white font-light">
                100
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
        <div class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
          <div class="rounded-lg p-4 bg-purple-700 flex flex-col">
            <div>
              <h5 class="text-white text-2xl font-bold leading-none">
                Total reports
              </h5>
            </div>
            <div class="flex items-center">
              <div class="text-lg text-white font-light">
                100
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection