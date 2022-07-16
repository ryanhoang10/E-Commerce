<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/products.js') }}" defer></script>
    @inertiaHead
  </head>
  <body>
    {{-- @if (Session()->has('flash_message')) 
      <div class="alert {{ Session()->get('flash_type') }}">
        <h3>{{ Session()->get('flash_message') }}</h3>
      </div>
    @endif --}}
    @inertia
  </body>
</html>
