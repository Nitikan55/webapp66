<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    @include('layouts.back.css')
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
     @include('layouts.back.nav')
      <!--end::Header-->
      <!--begin::Sidebar-->
     @include('layouts.back.side')

     @yield('content')
      
      @include('layouts.back.footer')
      <!--end::Footer-->
    </div>

    @include('layouts.back.js')
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}
