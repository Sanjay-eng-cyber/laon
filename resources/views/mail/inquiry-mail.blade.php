@component('mail::message')
    - **Details**:
    - **Name**: {{ $data->name }}
    - **Email**: {{ $data->email }}
    - **Phone no.**: {{ $data->phone }}
    - **Service Name**: {{ ucWords($service_name) }}
    - **City Name**: {{ ucWords($city_name) }}
    - **Date**: {{ dd_format($data->date, 'd-m-Y') }}
@endcomponent
