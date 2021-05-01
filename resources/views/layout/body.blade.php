@section('body')
    <div id="app" class="clearfix">
       {{-- @section('navigation')
             Comment this include to remove navigation 
            @include('common.navigation')

        @show --}}
        @section('header')
            @include('layout.header')
        @show

        {{-- CONTENT --}}
        @yield('content')
        {{-- /CONTENT --}}

        @section('footer')
            {{-- Comment this include to remove footer section 
            @include('common.footer') --}}
        @show
    </div>
@show